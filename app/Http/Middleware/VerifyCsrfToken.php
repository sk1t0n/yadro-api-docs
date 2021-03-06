<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/company/create',
        '/company/update',
        '/contact/create',
        '/contact/update',
        '/field/create',
        '/lead/create',
        '/lead/update',
        '/note/create',
        '/note/update',
        '/task/create',
        '/yadro/sendToAmo',
    ];
}
