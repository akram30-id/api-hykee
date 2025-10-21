<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function responseSuccess(array $data)
    {
        return response()->json([
            'code' => 'S01',
            'data' => $data
        ], 200);
    }

    public function responseFail($message, String $code, int $httpCode)
    {
        return response()->json([
            'code' => $code,
            'message' => $message
        ], $httpCode);
    }
}
