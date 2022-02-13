<?php

namespace App\Http\Controllers;

use OpenApi\Annotations as OA;


class ContactController extends Controller
{
    private function json()
    {
        return response()->json([
            'code' => 1,
            'message' => 'Успешно выполнено',
            'result' => [],
            'count' => 0
        ]);
    }

    /**
     * @OA\Get(
     *     tags={"contact"},
     *     path="/contact/{id}",
     *     summary="Возвращает контакт по id",
     *     @OA\Parameter(
     *         @OA\Schema(type="integer"),
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
        return $this->json();
    }

    /**
     * @OA\Get(
     *     tags={"contact"},
     *     path="/contact/search",
     *     summary="Поиск контактов",
     *     @OA\Parameter(
     *         @OA\Schema(type="string"),
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
        return $this->json();
    }

    /**
     * @OA\Get(
     *     tags={"contact"},
     *     path="/contact/list",
     *     summary="Возвращает список контактов",
     *     @OA\Parameter(
     *         @OA\Schema(type="integer"),
     *         name="count",
     *         in="query",
     *         required=true,
     *         description="количество запрашиваемых элементов"
     *     ),
     *     @OA\Parameter(
     *         @OA\Schema(type="integer"),
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
        return $this->json();
    }

    /**
     * @OA\Post(
     *     tags={"contact"},
     *     path="/contact/create",
     *     summary="Создаёт контакты",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     example={"name": "Contact name"}
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
        return response(200);
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
     *                     example={"id": 12345678, "name": "New contact name"}
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
        return response(200);
    }
}
