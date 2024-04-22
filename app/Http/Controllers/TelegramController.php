<?php

namespace App\Http\Controllers;

use App\Services\TelegramService;
use Illuminate\Http\Request;

class TelegramController extends Controller
{
    private $telegramService;

    public function __construct()
    {
        $this->telegramService = new TelegramService;
    }

    public function createMessage()
    {
        return view('home');
    }

    public function sendMessage()
    {
        try {

            $this->telegramService->send();
            return redirect('/');
        
        } catch (\Exception $e) {
            
            return redirect('/');
        }
    }
}
