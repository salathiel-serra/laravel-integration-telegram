<?php

namespace App\Services;

use App\Notifications\TelegramNotification;
use Illuminate\Support\Facades\Notification;

class TelegramService
{
    private $notification;
    private $telegramNotification;

    public function __construct()
    {
        $this->notification         = new Notification;
        $this->telegramNotification = new TelegramNotification;
    }

    public function send()
    {
        $message = $this->prepareMessage();
        
        return $this->notification
        ->route('telegram_userid', env('TELEGRAM_USER_ID'))
        ->route('message', $message)
        ->notify($this->telegramNotification);
    }

    private function prepareMessage()
    {
        $request = request()->all();

        return 'Nome: ' . $request["name"] . "\n" .
        'E-mail: ' . $request["email"]  . "\n\n" .
        'Mensagem: ' . $request["message"];
    }
}