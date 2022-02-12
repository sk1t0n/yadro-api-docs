<?php

namespace App\Http\Controllers;

use OpenApi\Annotations as OA;


class AccountController extends Controller
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
     *     tags={"account"},
     *     path="/account",
     *     summary="Возвращает информацию об аккаунте",
     *     @OA\Response(
     *         response="200",
     *         description="OK"
     *     )
     * )
     */
    public function account()
    {
        return $this->json();
    }

    /**
     * @OA\Get(
     *     tags={"account"},
     *     path="/account/statuses",
     *     summary="Возвращает информацию о статусах главной воронки",
     *     @OA\Response(
     *         response="200",
     *         description="OK"
     *     )
     * )
     */
    public function statuses()
    {
        return $this->json();
    }

    /**
     * @OA\Get(
     *     tags={"account"},
     *     path="/account/allStatuses",
     *     summary="Возвращает информацию о воронках и их статусах",
     *     @OA\Response(
     *         response="200",
     *         description="OK"
     *     )
     * )
     */
    public function allStatuses()
    {
        return $this->json();
    }

    /**
     * @OA\Get(
     *     tags={"account"},
     *     path="/account/pipelines",
     *     summary="Возвращает информацию о воронках",
     *     @OA\Response(
     *         response="200",
     *         description="OK"
     *     )
     * )
     */
    public function pipelines()
    {
        return $this->json();
    }

    /**
     * @OA\Get(
     *     tags={"account"},
     *     path="/account/users",
     *     summary="Возвращает информацию о пользователях",
     *     @OA\Response(
     *         response="200",
     *         description="OK"
     *     )
     * )
     */
    public function users()
    {
        return $this->json();
    }

    /**
     * @OA\Get(
     *     tags={"account"},
     *     path="/account/fields",
     *     summary="Возвращает информацию о полях",
     *     @OA\Response(
     *         response="200",
     *         description="OK"
     *     )
     * )
     */
    public function fields()
    {
        return $this->json();
    }
}
