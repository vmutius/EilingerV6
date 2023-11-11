<?php

namespace App\Notifications;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MessageAddedAdmin extends Notification implements ShouldQueue
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
            ->subject('Neue Nachricht zu Ihrem Antrag')
            ->greeting('Guten Tag ')
            ->line("Sie haben eine neue Nachricht zum ihren Antrag {$this->message->application->name}")
            ->line("{$this->message->user->username} hat folgende Nachricht hinterlassen")
            ->line("Nachricht: {$this->message->body}")
            ->action('Zur Nachricht', route('user_nachricht', ['application_id' => $this->message->application->id, 'locale' => app()->getLocale()]))
            ->line('Thank you for using our application!');
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
            'url' => route('user_nachricht', ['application_id' => $this->message->application->id, 'locale' => app()->getLocale()]),
        ];
    }
}
