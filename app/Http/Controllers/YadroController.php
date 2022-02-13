<?php

namespace App\Http\Controllers;

use OpenApi\Annotations as OA;


class YadroController extends Controller
{
    /**
     * @OA\Post(
     *     tags={"yadro"},
     *     path="/yadro/sendToAmo",
     *     summary="Перенаправляет запрос в AmoCRM",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="object",
 *                     example={
     *                     "url": "/widgets/other_lead/8/i18n/ru.json",
     *                     "params": {},
     *                     "body": {}
     *                 }
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
    public function sendToAmo()
    {
        return response()->json([
            'code' => 1,
            'message' => 'Успешно выполнено',
            'result' => [
                'widget' => [
                    'name' => 'Другие сделки',
                    'short_description' => 'Короткое описание виджета',
                    'description' => 'Полное описание виджета',
                    'tour_description' => 'Описание виджета'
                ],
                'settings' => [
                    'apiKey' => 'API-ключ'
                ]
            ],
            'count' => 2
        ]);
    }
}
