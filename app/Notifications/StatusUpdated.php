<?php

namespace App\Notifications;

use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class StatusUpdated extends Notification implements ShouldQueue
{
    use Queueable;

    private Application $application;

    /**
     * Create a new notification instance.
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
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
            ->subject(__('notify.new_status'))
            ->greeting(__('notify.greeting'))
            ->line(__('notify.new_status_line1', ['application' => $this->application->name]))
            ->line(__('application.status_name.'.$this->application->appl_status->name))
            ->action(__('notify.new_status_action'), route('user_gesuch', ['application_id' => $this->application->id, 'locale' => app()->getLocale()]));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'appl_id' => $this->application->id,
            'appl_name' => $this->application->name,
            'appl_status' => $this->application->appl_status,
            'url' => route('user_gesuch', ['locale' => app()->getLocale()]),
        ];
    }
}
