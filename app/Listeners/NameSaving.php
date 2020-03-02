<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Event\NameSaving\ as EventNameSaving;

class NameSaving
{
    use SerializeModels;
    public $model;
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
     * @param  object  $event
     * @return void
     */
    public function handle(EventNameSaving $event)
    {
        $event->model->slug = str_slug($event->model->name, '-');
    }
}
