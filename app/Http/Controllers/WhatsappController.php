<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WhatsappController extends Controller
{
    //
    public function sendText()
    {
        $res = Http::withHeaders([
            'x-access-key' => env('ZUWINDA_API_TOKEN')
        ])->post(
            'https://api.zuwinda.com/v1.2/message/whatsapp/send-text',
            [
                'type' => 'PREMIUM', // CHEAP, PREMIUM or VIP
                'to' => 'xxxxxxxxxx',
                'content' => 'Hello world !'
            ]
        );

        $response = $res->object();

        return response()->json($response);
    }

    public function sendImage(Request $request)
    {
        $res = Http::withHeaders([
            'x-access-key' => env('ZUWINDA_API_TOKEN')
        ])->post(
            'https://api.zuwinda.com/v1.2/message/whatsapp/send-media',
            [
                'instances_id' => 'Your instances id',
                'to' => 'xxxxxxxxxx',
                'content' => 'Hello world !',
                'url_file' => 'your url file',
                'message_tye' => 'image'
            ]
        );

        $response = $res->object();

        return response()->json($response);
    }

    public function sendDocument(Request $request)
    {
        $res = Http::withHeaders([
            'x-access-key' => env('ZUWINDA_API_TOKEN')
        ])->post(
            'https://api.zuwinda.com/v1.2/message/whatsapp/send-media',
            [
                'instances_id' => 'Your instances id',
                'to' => 'xxxxxxxxxx',
                'content' => 'Hello world !',
                'url_file' => 'your url file',
                'message_tye' => 'document'
            ]
        );

        $response = $res->object();

        return response()->json($response);
    }

    public function sendVideo(Request $request)
    {
        $res = Http::withHeaders([
            'x-access-key' => env('ZUWINDA_API_TOKEN')
        ])->post(
            'https://api.zuwinda.com/v1.2/message/whatsapp/send-media',
            [
                'instances_id' => 'Your instances id',
                'to' => 'xxxxxxxxxx',
                'content' => 'Hello world !',
                'url_file' => 'your url file',
                'message_tye' => 'video'
            ]
        );

        $response = $res->object();

        return response()->json($response);
    }
}
