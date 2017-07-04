<?php

namespace App\Listeners;

use Mail;
use App\Mail\EmailConfirmed as EmailConfirmedMail;
use App\Events\EmailConfirmed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailConfirmationSuccessMail
{
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
     * @param  EmailConfirmed  $event
     * @return void
     */
    public function handle(EmailConfirmed $event)
    {
        Mail::to($event->user)->send(new EmailConfirmedMail($event->user));        
    }
}
