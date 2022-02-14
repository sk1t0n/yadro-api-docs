<?php

namespace App\Http\Controllers;

use OpenApi\Annotations as OA;


class TaskController extends Controller
{
    /**
     * @OA\Get(
     *     tags={"task"},
     *     path="/task/{id}",
     *     summary="Возвращает задачу по id",
     *     @OA\Parameter(
     *         @OA\Schema(type="integer", default="39813909"),
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="id задачи"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
    public function task($id)
    {
        return response()->json([
            'code' => 1,
            'message' => 'Успешно выполнено',
            'result' => [
                'author_name' => 'Робот',
                'id' => 39813909,
                'element_id' => 27626723,
                'element_type' => 2,
                'task_type' => "MEETING",
                'date_create' => 1644772560,
                'created_user_id' => 0,
                'last_modified' => 1644772561,
                'text' => 'Task 1',
                'responsible_user_id' => 7827994,
                'complete_till' => 1644858960,
                'status' => 0,
                'group_id' => 30426,
                'duration' => 0,
                'modified_user_id' => 0,
                'account_id' => 9585804,
                'result' => []
            ],
            'count' => 17
        ]);
    }

    /**
     * @OA\Get(
     *     tags={"task"},
     *     path="/task/list",
     *     summary="Возвращает список задач",
     *     @OA\Parameter(
     *         @OA\Schema(type="integer", default="2"),
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
                    'id' => 28270293,
                    'element_id' => 23186565,
                    'element_type' => 2,
                    'task_type' => "MEETING",
                    'date_create' => 1573120928,
                    'created_user_id' => 3001336,
                    'last_modified' => 1573120928,
                    'text' => 'Перезвонить по повторной заявке с сайта',
                    'responsible_user_id' => 3001336,
                    'complete_till' => 1573122727,
                    'status' => 0,
                    'group_id' => 30426,
                    'duration' => 0,
                    'modified_user_id' => 3001336,
                    'account_id' => 9585804,
                    'result' => []
                ],
                [
                    'id' => 7675566,
                    'element_id' => 0,
                    'element_type' => 0,
                    'task_type' => 'CALL',
                    'date_create' => 1458539183,
                    'created_user_id' => 595371,
                    'last_modified' => 1460102927,
                    'text' => 'CРО в строительстве — получение строительной лицензии',
                    'responsible_user_id' => 736095,
                    'complete_till' => 1458539183,
                    'status' => 0,
                    'group_id' => 0,
                    'duration' => 0,
                    'modified_user_id' => 595371,
                    'account_id' => 9585804,
                    'result' => []
                ]
            ],
            'count' => 2
        ]);
    }

    /**
     * @OA\Post(
     *     tags={"task"},
     *     path="/task/create",
     *     summary="Создаёт задачу",
     *     description="crm_user_id - id ответственного (менеджера - AMOCRM.constant('managers')), element_id - id сущности, element_type=2 - сделка (AMOCRM.element_types), type=2 - встреча (AMOCRM.todo_types)",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     example={
     *                         "text": "New Task",
     *                         "crm_user_id": 7827994,
     *                         "time": "15.02.2022",
     *                         "element_id": 27626723,
     *                         "element_type": "2",
     *                         "type": "2"
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
                    'tasks' => [
                        'add' => [
                            [
                                'id' => 39813909,
                                'request_id' => 0,
                            ]
                        ]
                    ],
                    'server_time' => 1644772560
                ]
            ],
            'count' => 1
        ]);
    }
}
