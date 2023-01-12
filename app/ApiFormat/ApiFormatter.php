<?php 

namespace App\ApiFormat;


class ApiFormatter{
    protected static $response = [
        'date' => null,
        'message' => null,
        'data' => null,
    ];

    public static function createApi($date = null, $message = null, $data = null) {
        self::$response['date'] = $date;
        self::$response['pesan'] = $message;
        self::$response['data'] = $data;

        return response()->json(self::$response, self::$response['date']);
    }
}