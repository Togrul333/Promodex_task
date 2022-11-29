<?php

namespace App\Observers;

use App\Jobs\NotificationJob;
use App\Models\Notification;

class NotificationObserver
{
    public function updating(Notification $notification)
    {
        $oldStatus = $notification->getOriginal('status');

        if ($oldStatus === 0 && $notification->status === 1) {
            // job  обождет период указанный в  обявление и запустится
            NotificationJob::dispatch($notification->id)->delay($notification->settings);
        }
    }

}
