<?php

namespace App\Notifications;

use App\Channel\SendCloudChannel;
use App\Mailer\UserMailer;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewUserFollowNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', SendCloudChannel::class];
    }

    public function toDatabase($notifiable)
    {
        return [
            'name' => user('api')->name,
            'photos' => user('api')->photos,
            'id' => user('api')->id,
        ];
    }

    public function toSendCloud($notifiable)
    {
        (new UserMailer())->followNotifyEmail($notifiable->email);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
