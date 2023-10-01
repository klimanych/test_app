<?php


namespace Src\Products\Http\Controllers\EditProduct;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Src\Products\Actions\UpdateProductAction\UpdateProductAction;
use Src\Products\Actions\UpdateProductAction\UpdateProductActionHandler;
use Src\Products\Enums\ProductStatus;
use Src\Products\Exceptions\ProductArticleExistsException;

class UpdateProductController
{
    public function __invoke(int $id, Request $request, UpdateProductActionHandler $handler): RedirectResponse
    {
        try {
            $handler->handle(new UpdateProductAction(
                $id,
                $request->get('article'),
                $request->get('name'),
                ProductStatus::from($request->get('status')),
                $request->get('attributes')
            ));
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->withErrors(['Ресурс не найден']);
        }
        catch (ProductArticleExistsException $e) {
            return redirect()->back()->withErrors(['article' => $e->getMessage()]);
        }
        return redirect()->back()->with(['success' => 'Продукт успешно обновлен']);
    }
}
