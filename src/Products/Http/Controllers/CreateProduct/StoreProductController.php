<?php


namespace Src\Products\Http\Controllers\CreateProduct;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Src\Products\Actions\StoreProductAction\StoreProductAction;
use Src\Products\Actions\StoreProductAction\StoreProductActionHandler;
use Src\Products\Exceptions\ProductArticleExistsException;
use Src\Products\Enums\ProductStatus;

class StoreProductController
{
    /**
     * @param Request $request
     * @param StoreProductActionHandler $handler
     * @return RedirectResponse
     */
    public function __invoke(Request $request, StoreProductActionHandler $handler): RedirectResponse
    {
        try {
            $handler->handle(new StoreProductAction(
                $request->get('article'),
                $request->get('name'),
                ProductStatus::from($request->get('status')),
                $request->get('attributes')
            ));
        } catch (ProductArticleExistsException $e) {
            return redirect()->back()->withErrors(['article' => $e->getMessage()]);
        }

        return redirect()->back()->with(['success' => 'Продукт успешно добавлен']);
    }
}
