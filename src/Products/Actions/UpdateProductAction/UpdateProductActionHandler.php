<?php


namespace Src\Products\Actions\UpdateProductAction;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Src\Products\Exceptions\ProductArticleExistsException;
use Src\Products\Model\Product;

class UpdateProductActionHandler
{
    /**
     * @param UpdateProductAction $action
     * @return int
     * @throws ProductArticleExistsException | ModelNotFoundException
     */
    public function handle(UpdateProductAction $action): int
    {

        $product = Product::find($action->getId());

        if(!$product) {
            throw new ModelNotFoundException();
        }

        throw_if(Product::where('article', '=', $action->getArticle())->where('id','!=',$action->getId())->count() > 0,
            new ProductArticleExistsException($action->getArticle())
        );

        $attributes = [
            'article' => $action->getArticle(),
            'name' => $action->getName(),
            'status' => $action->getStatus(),
            'data' => $action->getData()
        ];

        $product->fill($attributes);
        $product->save();

        return $product->id;
    }
}
