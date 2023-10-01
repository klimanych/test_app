<?php


namespace Src\Products\Actions\DeleteProductAction;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Src\Products\Model\Product;

class DeleteProductActionHandler
{
    /**
     * @param DeleteProductAction $action
     * @throws ModelNotFoundException
     */
    public function handle(DeleteProductAction $action) {

        $product = Product::find($action->getId());

        if(!$product) {
            throw new ModelNotFoundException();
        }

        $product->delete();

    }
}
