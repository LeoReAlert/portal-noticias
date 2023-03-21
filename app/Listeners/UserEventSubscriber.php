<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserEventSubscriber
{
    /**
     * Handle user login events.
     */
    public function onUserLogin($event)
    {
        $tokenAccess = bcrypt(date('YmdHms'));
 
        $user = auth()->user();
        $user->token_access = $tokenAccess;
        $user->save();
 
        session()->put('access_token', $tokenAccess);
    }
 
    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'Illuminate\Auth\Events\Login',
            'App\Listeners\UserEventSubscriber@onUserLogin'
        );
  
        /*
        $events->listen(
            'Illuminate\Auth\Events\Logout',
            'App\Listeners\UserEventSubscriber@onUserLogout'
        );
        */
    }
}