<?php

namespace Swapstr\Listeners;

use Swapstr\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Mail;

class AccountVerificationEmail implements ShouldQueue
{
    protected $user;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $this->user = $event->user;

        Mail::send('emails.verify', ['verification_token' => $this->user->verification_token], function($message) 
        {
            $message->to($this->user->email, $this->user->username)
                    ->subject('Welcome to Swapstr - Email verification');
        });
    }
}