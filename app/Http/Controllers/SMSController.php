<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SMSController extends Controller
{
    //
    public function sendText(Request $request)
    {
        $res = Http::withHeaders([
            'x-access-key' => env('ZUWINDA_API_TOKEN')
        ])->post(
            'https://api.zuwinda.com/v1.2/message/sms/send-text',
            [
                'type' => 'PREMIUM', // CHEAP, PREMIUM or VIP
                'to' => 'xxxxxxxxxx',
                'content' => 'Hello world !'
            ]
        );

        $response = $res->object();

        return response()->json($response);
    }

    public function sendTextSchedule(Request $request)
    {
        $res = Http::withHeaders([
            'x-access-key' => env('ZUWINDA_API_TOKEN')
        ])->post(
            'https://api.zuwinda.com/v1.2/message/sms/send-text',
            [
                'type' => 'PREMIUM', // CHEAP, PREMIUM or VIP
                'to' => 'xxxxxxxxxx',
                'content' => 'Hello world !',
                'date' => '2024-01-14',
                'time' => '18:00'
            ]
        );

        $response = $res->object();

        return response()->json($response);
    }
}
