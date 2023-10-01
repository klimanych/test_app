<?php


namespace Src\Products\Http\Controllers\EditProduct;


use Src\Products\Model\Product;

class EditProductPageController
{
    public function __invoke(int $id)
    {
        $product = Product::findOrFail($id);

        return view('Products::edit.index', [
           'product' => $product->toArray()
        ]);
    }
}
