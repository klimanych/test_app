<?php


namespace Src\Products\Http\ShowProduct;


use App\Http\Controllers\Controller;
use Src\Products\Model\Product;

class ShowProductPageController extends Controller
{
    public function __invoke(int $id)
    {
        $product = Product::findOrFail($id);
        return view('Products::show.index', [
            'model' => $product->toArray()
        ]);
    }
}
