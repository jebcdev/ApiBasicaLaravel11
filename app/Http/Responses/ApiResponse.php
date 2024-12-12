<?php

namespace App\Http\Responses;

use Exception;

class ApiResponse
{

    public static function Success($message, $data = [], $statusCode = 200)
    {
        try {
            return response()->json([
                'message' => $message,
                'data' => $data,
            ], $statusCode);
        } catch (Exception $e) {
            return self::Error($e->getMessage(), $e, 500);
        }
    }

    public static function Error($message, $data = [], $statusCode = 500)
    {
        try {
            return response()->json([
                'message' => $message,
                'data' => $data,
            ], $statusCode);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'data' => $e,
            ], 500);
        }
    }
}

/*  */
