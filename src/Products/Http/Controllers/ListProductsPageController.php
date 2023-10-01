<?php


namespace Src\Products\Http\Controllers;


class ListProductsPageController
{
    public function __invoke()
    {
       return view('Products::list.index');
    }
}
