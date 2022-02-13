<?php

namespace App\Http\Controllers;

use OpenApi\Annotations as OA;


class FieldController extends Controller
{
    /**
     * @OA\Post(
     *     tags={"field"},
     *     path="/field/create",
     *     summary="Создаёт кастомные поля",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     example={"name": "Custom field name"}
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
    public function create()
    {
        return response()->json([
            'code' => 1,
            'message' => 'Успешно выполнено',
            'result' => [
                'response' => [
                    'fields' => null,
                    'server_time' => 1644734017
                ]
            ],
            'count' => 1
        ]);
    }
}
