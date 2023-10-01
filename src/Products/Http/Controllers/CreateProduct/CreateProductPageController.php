<?php


namespace Src\Products\Http\Controllers\CreateProduct;


use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

final class CreateProductPageController extends Controller
{
    /**
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function __invoke(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Products::create.index');
    }
}
