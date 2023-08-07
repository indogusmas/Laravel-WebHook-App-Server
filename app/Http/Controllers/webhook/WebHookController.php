<?php

namespace App\Http\Controllers\webhook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\WebhookServer\WebhookCall;


class WebHookController extends Controller
{
    public function show(Request $request){
        try {
            WebhookCall::create()
                ->url('http://127.0.0.1:8000/webhook')
                ->payload(['key' => 'cahganteng'])
                ->useSecret('sign-using-this-secret')
                ->dispatch();
            
            return redirect()->back();
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
