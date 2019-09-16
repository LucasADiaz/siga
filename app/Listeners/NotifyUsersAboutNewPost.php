<?php

namespace App\Listener;


use App\User;
use App\Notifications\PostPublished;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Events\PostCreated;

class NotifyUsersAboutNewPost
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
     * @param  PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        var_dump('aaaaaaa');
     //$users = User::all();
    //Notification::send($users, new PostPublished($event->post));
    }
}
