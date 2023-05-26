<?php

namespace App\Notifications;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReservationComplete extends Notification
{
    use Queueable;

    private Reservation $reservation;

    /**
     * Create a new notification instance.
     */
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->greeting('Hello! ' . $this->reservation->first_name)
            ->line('Thank you for making a reservation at ' . $this->reservation->hotel->name . '.')
            ->line('Your reservation details are as follows:')
            ->line('First Name: ' . $this->reservation->first_name)
            ->line('Last Name: ' . $this->reservation->last_name)
            ->line('Email: ' . $this->reservation->email)
            ->line('Phone: ' . $this->reservation->phone)
            ->line('Address: ' . $this->reservation->address.' '.$this->reservation->city.' '.$this->reservation->state.' '.$this->reservation->zip_code)
            ->line('Country: ' . $this->reservation->country)
            ->line('Thank you for your reservation!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
