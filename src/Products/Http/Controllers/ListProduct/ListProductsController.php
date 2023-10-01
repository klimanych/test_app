<?php


namespace Src\Products\Http\Controllers\ListProduct;


use Src\Products\Model\Product;
use Yajra\DataTables\DataTables;

class ListProductsController
{
    public function __invoke()
    {
        return DataTables::of(Product::query())
            ->editColumn('data', function($item) {
                return view('Products::list.components.attributes',[
                    'attributes' => $item->data ?? []
                ]);
            })
            ->rawColumns(['data'])
            ->make(true);
    }
}
