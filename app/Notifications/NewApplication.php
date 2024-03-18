<?php

namespace App\Notifications;

use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewApplication extends Notification implements ShouldQueue
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
            ->subject(__('notify.new_appl'))
            ->greeting(__('notify.greeting'))
            ->line("Es wurde ein neuer Antrag  {$this->application->name} eingereicht")
            ->action('Zum Gesuch', route('admin_antrag', ['application_id' => $this->application->id, 'locale' => app()->getLocale()]));
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
            'url' => route('admin_antrag', ['application_id' => $this->application->id, 'locale' => app()->getLocale()]),
        ];
    }
}
