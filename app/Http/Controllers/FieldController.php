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
     *     description="type=1 - текст (AMOCRM.cf_types), element_type=2 - сделка (AMOCRM.element_types)",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     example={
     *                         "name": "Custom field name",
     *                         "type": 1,
     *                         "element_type": 2
     *                     }
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
                    'fields' => [
                        'add' => [
                            [
                                'id' => '1520093',
                                'request_id' => 0
                            ]
                        ]
                    ],
                    'server_time' => 1644831005
                ]
            ],
            'count' => 1
        ]);
    }
}
