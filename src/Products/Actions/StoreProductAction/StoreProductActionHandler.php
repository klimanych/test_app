<?php


namespace Src\Products\Actions\StoreProductAction;


use Src\Products\Exceptions\ProductArticleExistsException;
use Src\Products\Model\Product;

final class StoreProductActionHandler
{

    /**
     * @param StoreProductAction $action
     * @return int
     * @throws ProductArticleExistsException
     */
    public function handle(StoreProductAction $action): int
    {
        throw_if(Product::where('article', '=', $action->getArticle())->count() > 0,
            new ProductArticleExistsException($action->getArticle())
        );


        $product = Product::create([
            'article' => $action->getArticle(),
            'name' => $action->getName(),
            'status' => $action->getStatus(),
            'data' => array_values($action->getData())
        ]);

        return $product->id;
    }
}
