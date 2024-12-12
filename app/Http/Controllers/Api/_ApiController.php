<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use Exception;
use Illuminate\Http\Request;

class _ApiController extends Controller
{
    public function index()
    {
        try {
            return ApiResponse::Success('First Laravel API', [
                'message' => 'Welcome to the first Laravel API',
                'version' => '0.0.1',
                'author' => ' { JEBC-Dev } ',
                'email' => 'jebcdev@gmail.com',
            ]);
        } catch (Exception $e) {
            return ApiResponse::Error($e->getMessage(), $e, 500);
        }
    }
}
