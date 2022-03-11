<?php

namespace App\Listeners;

use App\Events\UserCreatedEvent;
use App\Mail\SendMailToUser;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class UserCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserCreatedEvent $event)
    {
        // info('I am fired from Arif');
        info($event->user);
        Mail::to($event->user->mail)->send(new SendMailToUser($event->user));
    }
}
