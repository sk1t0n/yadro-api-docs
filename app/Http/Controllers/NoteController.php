<?php

namespace App\Http\Controllers;

use OpenApi\Annotations as OA;


class NoteController extends Controller
{
    /**
     * @OA\Get(
     *     tags={"note"},
     *     path="/note/{id}",
     *     summary="Возвращает примечание по id",
     *     @OA\Parameter(
     *         @OA\Schema(type="integer", default="297766441"),
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="id примечания"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
    public function note($id)
    {
        return response()->json([
            'code' => 1,
            'message' => 'Успешно выполнено',
            'result' => [
                'id' => $id,
                'element_id' => 27626723,
                'element_type' => 2,
                'note_type' => 4,
                'date_create' => 1644768714,
                'created_user_id' => 0,
                'modified_user_id' => 797280,
                'last_modified' => 1644770492,
                'text' => 'Note 1',
                'responsible_user_id' => 797280,
                'account_id' => 9585804,
                'ATTACHEMENT' => null,
                'group_id' => 0,
                'editable' => 'Y'
            ],
            'count' => 14
        ]);
    }

    /**
     * @OA\Post(
     *     tags={"note"},
     *     path="/note/create",
     *     summary="Создаёт примечания",
     *     description="element_id - id сущности, element_type=2 - сделка (AMOCRM.element_types), note_type=4 - системное примечание (AMOCRM.note_types)",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     example={
     *                         "text": "New Note",
     *                         "element_id": 27626723,
     *                         "element_type": "2",
     *                         "note_type": 4
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
                    'notes' => [
                        'add' => [
                            [
                                'id' => '297766441',
                                'request_id' => 0,
                                'element_id' => 27626723
                            ]
                        ]
                    ],
                    'server_time' => 1644768714
                ]
            ],
            'count' => 1
        ]);
    }

    /**
     * @OA\Post(
     *     tags={"note"},
     *     path="/note/update",
     *     summary="Обновляет примечания",
     *     description="element_id - id сущности",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     example={
     *                         "id": 297766441,
     *                         "element_id": 27626723,
     *                         "text": "New text",
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
    public function update()
    {
        return response()->json([
            'code' => 1,
            'message' => 'Успешно выполнено',
            'result' => [
                'response' => [
                    'notes' => [
                        'update' => [
                            [
                                'id' => '297766441',
                                'element_id' => 27626723,
                                'text' => 'New text',
                                'last_modified' => 1644770492
                            ]
                        ]
                    ],
                    'server_time' => 1644770491
                ]
            ],
            'count' => 1
        ]);
    }
}
