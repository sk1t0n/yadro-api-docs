<?php

namespace App\Http\Controllers;

use OpenApi\Annotations as OA;


class CompanyController extends Controller
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
     *     tags={"company"},
     *     path="/company/{id}",
     *     summary="Возвращает компанию по id",
     *     @OA\Parameter(
     *         @OA\Schema(type="integer"),
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
        return $this->json();
    }

    /**
     * @OA\Get(
     *     tags={"company"},
     *     path="/company/search",
     *     summary="Поиск компаний",
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
     *     tags={"company"},
     *     path="/company/list",
     *     summary="Возвращает список компаний",
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
     *     tags={"company"},
     *     path="/company/create",
     *     summary="Создаёт компании",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     example={"name": "Company name"}
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
     *     tags={"company"},
     *     path="/company/update",
     *     summary="Обновляет компании",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     example={"id": 12345678, "name": "New company name"}
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
