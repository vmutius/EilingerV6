<?php

namespace App\Notifications;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MessageAddedUser extends Notification implements ShouldQueue
{
    use Queueable;

    public $message;

    /**
     * Create a new notification instance.
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject(__('notify.new_message'))
            ->greeting(__('notify.greeting'))
            ->line(__('notify.new_message_line1', ['application'=>$this->message->application->name]))
            ->line(__('notify.new_message_line2', ['user' => $this->message->user->username]))
            ->line(__('notify.new_message_line3', ['message' => $this->message->body]))
            ->action(__('notify.new_message_action'), route('admin_antrag', ['application_id' => $this->message->application->id, 'locale' => app()->getLocale()]));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'message_id' => $this->message->id,
            'message_body' => $this->message->body,
            'username' => $this->message->user->username,
            'appl_name' => $this->message->application->name,
            'appl_id' => $this->message->application->id,
            'url' => route('admin_antrag', ['application_id' => $this->message->application->id, 'locale' => app()->getLocale()]),
        ];
    }
}
