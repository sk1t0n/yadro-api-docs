<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Request;
use OpenApi\Annotations as OA;


class LeadController extends Controller
{
    /**
     * @OA\Get(
     *     tags={"lead"},
     *     path="/lead/{id}/links",
     *     summary="Возвращает связанные контакты по id",
     *     @OA\Parameter(
     *         @OA\Schema(type="integer", default="19572173"),
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="id сделки"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
    public function linksById($id)
    {
        return response()->json([
            'code' => 1,
            'message' => 'Успешно выполнено',
            'result' => [
                [
                    'contact_id' => 46994293,
                    'lead_id' => $id,
                    'last_modified' => 1644741223
                ]
            ],
            'count' => 1
        ]);
    }

    /**
     * @OA\Get(
     *     tags={"lead"},
     *     path="/lead/links",
     *     summary="Возвращает связанные контакты по id",
     *     @OA\Parameter(
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(
     *                 default="19572173"
     *             ),
     *             collectionFormat="multi",
     *             uniqueItems=true
     *         ),
     *         name="id[]",
     *         in="query",
     *         required=true,
     *         description="id сделки",
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
    public function links()
    {
        return response()->json([
            'code' => 1,
            'message' => 'Успешно выполнено',
            'result' => [
                [
                    'contact_id' => 46994293,
                    'lead_id' => 19572173,
                    'last_modified' => 1644741223
                ]
            ],
            'count' => 1
        ]);
    }

    /**
     * @OA\Get(
     *     tags={"lead"},
     *     path="/lead/{id}",
     *     summary="Возвращает сделку по id",
     *     @OA\Parameter(
     *         @OA\Schema(type="integer", default="19572173"),
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="id сделки"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
    public function lead($id)
    {
        return response()->json([
            'code' => 1,
            'message' => 'Успешно выполнено',
            'result' => [
                'id' => $id,
                'name' => 'Test lead',
                'date_create' => 1553853237,
                'created_user_id' => '595371',
                'last_modified' => 1644736161,
                'account_id' => '9585804',
                'price' => '15000',
                'responsible_user_id' => '595371',
                'linked_company_id' => '',
                'group_id' => 30426,
                'pipeline_id' => 3144,
                'date_close' => 0,
                'closest_task' => 0,
                'loss_reason_id' => 0,
                'modified_user_id' => '0',
                'deleted' => 0,
                'tags' => [],
                'status_id' => 20715778,
                'custom_fields' => [
                    [
                        'id' => 942425,
                        'name' => 'Предоплата',
                        'type_id' => 2,
                        'values' => [
                            [
                                'value' => '120'
                            ]
                        ]
                    ]
                ],
                'main_contact_id' => 46994293,
                'score' => 0
            ],
            'count' => 21
        ]);
    }

    /**
     * @OA\Get(
     *     tags={"lead"},
     *     path="/lead/search",
     *     summary="Поиск сделок",
     *     @OA\Parameter(
     *         @OA\Schema(type="string", default="test"),
     *         name="query",
     *         in="query",
     *         required=true,
     *         description="строка поиска"
     *     ),
     *     @OA\Parameter(
     *         @OA\Schema(type="integer", default="1"),
     *         name="count",
     *         in="query",
     *         required=true,
     *         description="количество запрашиваемых элементов",
     *     ),
     *     @OA\Parameter(
     *         @OA\Schema(type="integer", default="0"),
     *         name="offset",
     *         in="query",
     *         required=true,
     *         description="смещение, относительно которого нужно вернуть элементы"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
    public function search()
    {
        return response()->json([
            'code' => 1,
            'message' => 'Успешно выполнено',
            'result' => [
                [
                    'id' => '27448995',
                    'name' => 'test name',
                    'date_create' => 1639380895,
                    'created_user_id' => '0',
                    'last_modified' => 1640164011,
                    'account_id' => '9585804',
                    'price' => '0',
                    'responsible_user_id' => '1620274',
                    'linked_company_id' => '52210551',
                    'group_id' => 30426,
                    'pipeline_id' => 3144,
                    'date_close' => 0,
                    'closest_task' => 1639416895,
                    'loss_reason_id' => 0,
                    'modified_user_id' => '7753246',
                    'deleted' => 0,
                    'tags' => [],
                    'status_id' => 20715778,
                    'custom_fields' => [
                        [
                            'id' => 1514415,
                            'name' => 'utm_campaign',
                            'type_id' => 21,
                            'code' => 'UTM_CAMPAIGN',
                            'values' => [
                                [
                                    'value' => 'test'
                                ]
                            ]
                        ],
                        [
                            'id' => 971145,
                            'name' => 'CITY',
                            'type_id' => 1,
                            'values' => [
                                [
                                    'value' => 'test'
                                ]
                            ]
                        ],
                        [
                            'id' => 1519721,
                            'name' => 'book_ak',
                            'type_id' => 6,
                            'values' => [
                                [
                                    'value' => '2022-01-07 00:00:00'
                                ]
                            ]
                        ]
                    ],
                    'main_contact_id' => 52203019,
                    'score' => 0,
                    'company_name' => 'Some company'
                ]
            ],
            'count' => 1
        ]);
    }

    /**
     * @OA\Get(
     *     tags={"lead"},
     *     path="/lead/list",
     *     summary="Возвращает список сделок",
     *     @OA\Parameter(
     *         @OA\Schema(type="integer", default="1"),
     *         name="count",
     *         in="query",
     *         required=true,
     *         description="количество запрашиваемых элементов",
     *     ),
     *     @OA\Parameter(
     *         @OA\Schema(type="integer", default="0"),
     *         name="offset",
     *         in="query",
     *         required=true,
     *         description="смещение, относительно которого нужно вернуть элементы"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
    public function list()
    {
        return response()->json([
            'code' => 1,
            'message' => 'Успешно выполнено',
            'result' => [
                [
                    'id' => '17252479',
                    'name' => 'Сделка #17252479',
                    'date_create' => 1540907690,
                    'created_user_id' => "595371",
                    'last_modified' => 1559720519,
                    'account_id' => '9585804',
                    'price' => '0',
                    'responsible_user_id' => '595371',
                    'linked_company_id' => '',
                    'group_id' => 30426,
                    'pipeline_id' => 0,
                    'date_close' => 0,
                    'closest_task' => 0,
                    'loss_reason_id' => 0,
                    'modified_user_id' => '595371',
                    'deleted' => 0,
                    'tags' => [],
                    'status_id' => 0,
                    'custom_fields' => [],
                    'main_contact_id' => false,
                    'score' => 0
                ]
            ],
            'count' => 1
        ]);
    }

    /**
     * @OA\Post(
     *     tags={"lead"},
     *     path="/lead/create",
     *     summary="Создаёт сделки",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     example={
     *                         "name": "Lead name",
     *                         "crm_user_id": 7827994,
     *                         "status": "20715778"
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
                'leads' => [
                    'add' => [
                        [
                            'id' => '27627175',
                            'request_id' => 0
                        ]
                    ]
                ],
                'server_time' => 1644765009
            ],
            'count' => 2
        ]);
    }

    /**
     * @OA\Post(
     *     tags={"lead"},
     *     path="/lead/update",
     *     summary="Обновляет сделки",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     example={"id": 27627167, "name": "New lead name"}
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request"
     *     )
     * )
     */
    public function update()
    {
        try {
            $body = Request::all();
            $id = $body[0]['id'];

            return response()->json([
                'code' => 1,
                'message' => 'Успешно выполнено',
                'result' => [
                    'leads' => [
                        'update' => [
                            [
                                'id' => $id,
                                'last_modified' => 1644736161
                            ]
                        ]
                    ],
                    'server_time' => 1644736161
                ],
                'count' => 2
            ]);
        } catch (Exception $e) {
            return response()->json(null, 400);
        }
    }
}
