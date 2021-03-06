<?php

namespace App\Listeners;

use App\Events\ClientAction;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\Activity;
use App\Models\Client;
use Lang;

class ClientActionLog
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

    // /**
    //  * Handle the event.
    //  *
    //  * @param  ClientAction  $event
    //  * @return void
    //  */
    // public function handle(ClientAction $event)
    // {
    //     //
    // }

    /**
     * Handle the event.
     *
     * @param  ClientAction  $event
     * @return void
     */
    public function handle(ClientAction $event)
    {
        $client = $event->getClient();

        switch ($event->getAction()) {
            case 'created':
                $text = __('新建客户 :company 分配给 :assignee', [
                    'company' => $client->company_name,
                    'assignee' => $client->AssignedUser->name,
                ]);
                break;
            case 'updated_assign':
                $text =  __(':username 更新客户分配给 :assignee', [
                    'username' => Auth()->user()->name,
                    'assignee' => $client->AssignedUser->name,
                ]);
                break;
            default:
                break;
        }

        $activityinput = array_merge(
            [
                'text' => $text,
                'user_id' => Auth()->id(),
                'source_type' => Client::class,
                'source_id' =>  $client->id,
                'action' => $event->getAction()
            ]
        );

        Activity::create($activityinput);
    }
}
