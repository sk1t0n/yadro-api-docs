<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use OpenApi\Annotations as OA;


class ContactController extends Controller
{
    /**
     * @OA\Get(
     *     tags={"contact"},
     *     path="/contact/{id}",
     *     summary="Возвращает контакт по id",
     *     @OA\Parameter(
     *         @OA\Schema(type="integer", default="52331497"),
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="id контакта"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
    public function contact($id)
    {
        return response()->json([
            'code' => 1,
            'message' => 'Успешно выполнено',
            'result' => [
                'id' => $id,
                'name' => 'New contact',
                'last_modified' => 1644751977,
                'account_id' => 9585804,
                'date_create' => 1644751259,
                'created_user_id' => 0,
                'modified_user_id' => 0,
                'responsible_user_id' => 7827994,
                'group_id' => 30426,
                'closest_task' => 0,
                'company_name' => '',
                'linked_company_id' => '',
                'first_name' => '',
                'last_name' => '',
                'tags' => [],
                'type' => 'contact',
                'is_unsorted' => false,
                'custom_fields' => [],
                'linked_leads_id' => []
            ],
            'count' => 19
        ]);
    }

    /**
     * @OA\Get(
     *     tags={"contact"},
     *     path="/contact/search",
     *     summary="Поиск контактов",
     *     @OA\Parameter(
     *         @OA\Schema(type="string", default="contact"),
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
                    'id' => 43543431,
                    'name' => 'empty contact',
                    'last_modified' => 1567441495,
                    'account_id' => 9585804,
                    'date_create' => 1539255547,
                    'created_user_id' => 595371,
                    'modified_user_id' => 3718531,
                    'responsible_user_id' => 595371,
                    'group_id' => 30426,
                    'closest_task' => 0,
                    'linked_company_id' => '0',
                    'company_name' => '',
                    'first_name' => null,
                    'last_name' => null,
                    'tags' => [],
                    'type' => 'contact',
                    'is_unsorted' => false,
                    'custom_fields' => [
                        [
                            'id' => 958187,
                            'name' => 'Количество успешных сделок',
                            'type_id' => 2,
                            'values' => [
                                [
                                    'value' => '0'
                                ]
                            ]
                        ],
                        [
                            'id' => 958191,
                            'name' => 'Бюджет успешных сделок',
                            'type_id' => 2,
                            'values' => [
                                [
                                    'value' => '0'
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
     * @OA\Get(
     *     tags={"contact"},
     *     path="/contact/list",
     *     summary="Возвращает список контактов",
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
                    'id' => 43516805,
                    'name' => 'test_name',
                    'last_modified' => 1567442935,
                    'account_id' => 9585804,
                    'date_create' => 1487333321,
                    'created_user_id' => 595371,
                    'modified_user_id' => 3718531,
                    'responsible_user_id' => 595371,
                    'group_id' => 30426,
                    'closest_task' => 0,
                    'company_name' => '',
                    'linked_company_id' => '',
                    'first_name' => null,
                    'last_name' => null,
                    'tags' => [],
                    'type' => 'contact',
                    'is_unsorted' => false,
                    'custom_fields' => [
                        [
                            'id' => 958187,
                            'name' => 'Количество успешных сделок',
                            'type_id' => 2,
                            'values' => [
                                [
                                    'value' => '0'
                                ]
                            ]
                        ],
                        [
                            'id' => 958191,
                            'name' => 'Бюджет успешных сделок',
                            'type_id' => 2,
                            'values' => [
                                [
                                    'value' => '0'
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
     *     tags={"contact"},
     *     path="/contact/create",
     *     summary="Создаёт контакты",
     *     description="crm_user_id - id ответственного (менеджера - AMOCRM.constant('managers'))",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     example={"name": "Contact name", "crm_user_id": 7827994}
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
                            'id' => '52331497',
                            'request_id' => 0
                        ]
                    ]
                ],
                'server_time' => 1644751259
            ],
            'count' => 2
        ]);
    }

    /**
     * @OA\Post(
     *     tags={"contact"},
     *     path="/contact/update",
     *     summary="Обновляет контакты",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     example={"id": 52331497, "name": "New contact name"}
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
                            'last_modified' => 1644751977,
                            'name' => $name
                        ]
                    ]
                ],
                'server_time' => 1644751976
            ],
            'count' => 2
        ]);
    }
}
