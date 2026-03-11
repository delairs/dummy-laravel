<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class EnvViewerController extends Controller
{
    public function index(): View
    {
        $items = [
            'APP_NAME' => env('APP_NAME'),
            'APP_ENV' => env('APP_ENV'),
            'APP_DEBUG' => env('APP_DEBUG'),
            'APP_URL' => env('APP_URL'),
            'APP_LOCALE' => env('APP_LOCALE'),
            'LOG_CHANNEL' => env('LOG_CHANNEL'),
            'CACHE_STORE' => env('CACHE_STORE'),
            'SESSION_DRIVER' => env('SESSION_DRIVER'),
            'QUEUE_CONNECTION' => env('QUEUE_CONNECTION'),
        ];

        return view('env', [
            'items' => $items,
        ]);
    }
}