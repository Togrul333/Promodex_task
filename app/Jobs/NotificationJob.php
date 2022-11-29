<?php

namespace App\Jobs;

use App\Lib\Helpers\SmsHelper;
use App\Mail\NotificationMail;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class NotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $id_notification;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id_notification = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $notification = Notification::find($this->id_notification);

        //  всем ползователям на почту
         $users= User::get();
        foreach ($users as $user){
            Mail::to($user->email)->send(new NotificationMail($notification));
        }

        // отправить определенному ползователю под input1 должен быть номер а под input2 содержимое Уведомления
//        SmsHelper::sendSms($notification->input1, $notification->input2);



    }
}
