<?php
namespace App\Listeners\Backend;

/**
 * Class Test88EventListener.
 */
/**
 * Class Test88Created.
 */
class Test88EventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Test88 Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Test88  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Test88 Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Test88\Test88Created::class,
            'App\Listeners\Backend\Test88EventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Test88\Test88Updated::class,
            'App\Listeners\Backend\Test88EventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Test88\Test88Deleted::class,
            'App\Listeners\Backend\Test88EventListener@onDeleted'
        );
    }
}
