<?php

namespace App\Helpers;

class formatAPI{

    protected static $response =[
        'code' => null,
        'massage' => null,
        'data' => null,
    ];

    public static function createAPI($code = null, $massage = null, $data = null){
        self::$response['code'] = $code;
        self::$response['massage'] = $massage;
        self::$response['data'] = $data;

        return response()->json(self::$response, self::$response['code']);
    }
}