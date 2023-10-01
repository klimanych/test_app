<?php


namespace Src\Products\Http\Controllers;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Src\Products\Actions\DeleteProductAction\DeleteProductAction;
use Src\Products\Actions\DeleteProductAction\DeleteProductActionHandler;

class DeleteProductController
{
    public function __invoke(int $id, DeleteProductActionHandler $handler): JsonResponse
    {
        try {
            $handler->handle(new DeleteProductAction(
                $id
            ));
        } catch (ModelNotFoundException $e) {
            return response()->json([],404);
        }

        return response()->json([],200);

    }
}
