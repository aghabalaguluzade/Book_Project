<?php

namespace App\Listeners;

use App\Events\UserCreatedEvent;
use App\Models\Role;

class SetDefaultRoleListener
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
     * @param  \App\Events\UserCreatedEvent  $event
     * @return void
     */
    public function handle(UserCreatedEvent $event)
    {
        $role = Role::where('name','user')->firstOrFail();
        $event->user->roles()->attach($role->id);
    }
}
