<?php


namespace Byscripts\Notifier\Notifier;

use Byscripts\Notifier\Notification\Notification;

interface NotifierInterface
{
    public function notify(Notification $notification);
}