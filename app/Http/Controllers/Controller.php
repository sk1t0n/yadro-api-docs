<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(title="Yadro API", version="1.0")
 * @OA\Tag(name="account")
 * @OA\Tag(name="bp")
 * @OA\Tag(name="chat")
 * @OA\Tag(name="company")
 * @OA\Tag(name="contact")
 * @OA\Tag(name="customer")
 * @OA\Tag(name="docflow")
 * @OA\Tag(name="field")
 * @OA\Tag(name="lead")
 * @OA\Tag(name="links")
 * @OA\Tag(name="mail")
 * @OA\Tag(name="note")
 * @OA\Tag(name="pbx")
 * @OA\Tag(name="sensei")
 * @OA\Tag(name="sms")
 * @OA\Tag(name="task")
 * @OA\Tag(name="telegram")
 * @OA\Tag(name="transaction")
 * @OA\Tag(name="unsorted")
 * @OA\Tag(name="yadro")
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
