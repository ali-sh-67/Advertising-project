<?php

namespace App\Listeners;

use App\Events\UserRegister;
use App\Mail\UserRegisterMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class EmailRegisterNotification
{



    public function __construct()
    {
        //
    }

    public function handle(UserRegister $event)
    {
//        var_dump("notify ". $event->user::find(auth()->user()->id)->name . ' they have been email!');
        Mail::to($event->User)->send(new UserRegisterMessage());
    }
}
