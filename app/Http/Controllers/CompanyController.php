<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use OpenApi\Annotations as OA;


class CompanyController extends Controller
{
    /**
     * @OA\Get(
     *     tags={"company"},
     *     path="/company/{id}",
     *     summary="Возвращает компанию по id",
     *     @OA\Parameter(
     *         @OA\Schema(type="integer", default="52331573"),
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="id компании"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
    public function company($id)
    {
        return response()->json([
            'code' => 1,
            'message' => 'Успешно выполнено',
            'result' => [
                'id' => $id,
                'name' => 'New company',
                'last_modified' => 1644756791,
                'account_id' => 9585804,
                'date_create' => 1644756468,
                'created_user_id' => 0,
                'modified_user_id' => 0,
                'responsible_user_id' => 7827994,
                'group_id' => 30426,
                'closest_task' => 0,
                'tags' => [],
                'type' => 'company',
                'is_unsorted' => false,
                'custom_fields' => [],
                'linked_leads_id' => []
            ],
            'count' => 15
        ]);
    }

    /**
     * @OA\Get(
     *     tags={"company"},
     *     path="/company/search",
     *     summary="Поиск компаний",
     *     @OA\Parameter(
     *         @OA\Schema(type="string", default="company"),
     *         name="query",
     *         in="query",
     *         required=true,
     *         description="строка поиска"
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
                    'id' => 39772265,
                    'name' => 'Finolog Test Company 1',
                    'last_modified' => 1567443195,
                    'account_id' => 9585804,
                    'date_create' => 1537260215,
                    'created_user_id' => 595371,
                    'modified_user_id' => 3718531,
                    'responsible_user_id' => 595371,
                    'group_id' => 30426,
                    'closest_task' => 0,
                    'tags' => [
                        [
                            'entity_type' => 1,
                            'id' => 487117,
                            'name' => 'Финолог 18.09.2018'
                        ]
                    ],
                    'type' => 'company',
                    'is_unsorted' => false,
                    'custom_fields' => [
                        [
                            'id' => 958193,
                            'name' => 'Количество успешных сделок',
                            'type_id' => 2,
                            'values' => [
                                [
                                    'value' => '0'
                                ]
                            ]
                        ]
                    ],
                    'linked_leads_id' => [
                        17038645
                    ]
                ],
                [
                    'id' => 52331573,
                    'name' => 'New company 2',
                    'last_modified' => 1644756791,
                    'account_id' => 9585804,
                    'date_create' => 1644756468,
                    'created_user_id' => 0,
                    'modified_user_id' => 0,
                    'responsible_user_id' => 7827994,
                    'group_id' => 30426,
                    'closest_task' => 0,
                    'tags' => [],
                    'type' => 'company',
                    'is_unsorted' => false,
                    'custom_fields' => [],
                    'linked_leads_id' => []
                ]
            ],
            'count' => 2
        ]);
    }

    /**
     * @OA\Get(
     *     tags={"company"},
     *     path="/company/list",
     *     summary="Возвращает список компаний",
     *     @OA\Parameter(
     *         @OA\Schema(type="integer", default="1"),
     *         name="count",
     *         in="query",
     *         required=true,
     *         description="количество запрашиваемых элементов"
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
                    'id' => 33301046,
                    'name' => 'Сайденфельд Менахем',
                    'last_modified' => 1633703801,
                    'account_id' => 9585804,
                    'date_create' => 1484730201,
                    'created_user_id' => 866256,
                    'modified_user_id' => 0,
                    'responsible_user_id' => 851376,
                    'group_id' => 30417,
                    'closest_task' => 0,
                    'tags' => [
                        [
                            'entity_type' => 1,
                            'id' => 401820,
                            'name' => 'импорт_18012017_1203'
                        ]
                    ],
                    'type' => 'company',
                    'is_unsorted' => false,
                    'custom_fields' => [
                        [
                            'id' => 617148,
                            'name' => 'Адрес',
                            'type_id' => 9,
                            'code' => 'ADDRESS',
                            'values' => [
                                [
                                    'value' => 'Москва'
                                ]
                            ]
                        ],
                        [
                            'id' => 1517031,
                            'name' => 'Часовой пояс',
                            'type_id' => 1,
                            'values' => [
                                [
                                    'value' => 'UTC+3'
                                ]
                            ]
                        ]
                    ],
                    'linked_leads_id' => []
                ]
            ],
            'count' => 1
        ]);
    }

    /**
     * @OA\Post(
     *     tags={"company"},
     *     path="/company/create",
     *     summary="Создаёт компании",
     *     description="crm_user_id - id ответственного (менеджера)",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     example={"name": "Company name", "crm_user_id": 7827994}
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
                'contacts' => [
                    'add' => [
                        [
                            'id' => '52331573',
                            'request_id' => 0
                        ]
                    ]
                ],
                'server_time' => 1644756468
            ],
            'count' => 2
        ]);
    }

    /**
     * @OA\Post(
     *     tags={"company"},
     *     path="/company/update",
     *     summary="Обновляет компании",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     example={"id": 52331573, "name": "New company name"}
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
    public function update()
    {
        $body = Request::all();

        if (count($body) === 0
            || !array_key_exists('id', $body[0])
            || !array_key_exists('name', $body[0])
        ) {
            return response()->json(null, 400);
        }

        $id = $body[0]['id'];
        $name = $body[0]['name'];

        return response()->json([
            'code' => 1,
            'message' => 'Успешно выполнено',
            'result' => [
                'contacts' => [
                    'update' => [
                        [
                            'id' => $id,
                            'last_modified' => 1644756791,
                            'name' => $name
                        ]
                    ]
                ],
                'server_time' => 1644756790
            ],
            'count' => 2
        ]);
    }
}
