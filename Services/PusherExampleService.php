<?php

namespace Services;

use Pusher\Pusher;

/**
 * example pusher code snippets
 * @param NULL
 *
 * @return NULL
 */
class PusherExampleService
{
    public function basic()
    {
        $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER' , 'eu'),
            'encrypted' => true
        );
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data['message'] = 'hello world';
        return $pusher->trigger('my-channel', 'my-event', $data);
    }
}
