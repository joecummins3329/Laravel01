<?php

namespace App\Listeners;


use App\Events\FixturePublished;

use Illuminate\Support\Facades\Mail;

use App\Mail\FixtureCreated;


class SendFixturePublishedNotification
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
     * @param  FixturePublished  $event
     * @return void
     */
    public function handle(FixturePublished $event)
    
    {
        
        \Mail::to($event->fixture->owner->email)->send(
        
            new FixtureCreated($event->fixture)
        
        );
    }
}
