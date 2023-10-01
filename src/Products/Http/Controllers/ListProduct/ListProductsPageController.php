<?php


namespace Src\Products\Http\Controllers\ListProduct;


class ListProductsPageController
{
    public function __invoke()
    {
       return view('Products::list.index');
    }
}
