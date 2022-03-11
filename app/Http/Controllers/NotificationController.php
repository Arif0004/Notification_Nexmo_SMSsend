<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SendUserNotification;
use Illuminate\Http\Request;
use Exception;
use Vonage\SMS\Client;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    function mail()
    {

        $user = User::find(1);
        $user->notify(new SendUserNotification($user));
        return "Notification has been sent!";
    }
    public function index()
    {
        $code = rand(100, 500);
        $basic  = new \Vonage\Client\Credentials\Basic("1763bb57", "hrqFFzag8vDw6CXI");
        $client = new \Vonage\Client($basic);
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("880162285548", 'test', "Your verification code is $code")
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}
