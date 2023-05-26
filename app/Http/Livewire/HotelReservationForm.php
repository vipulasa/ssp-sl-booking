<?php

namespace App\Http\Livewire;

use App\Models\Reservation;
use Livewire\Component;

class HotelReservationForm extends Component
{

    public $hotel;

    public $user;

    public Reservation $reservation;

    protected $rules = [
        'reservation.first_name' => 'required|string',
        'reservation.last_name' => 'required|string',
        'reservation.email' => 'required|email',
        'reservation.phone' => 'required|string',
        'reservation.address' => 'required|string',
        'reservation.country' => 'required|string',
        'reservation.city' => 'required|string',
        'reservation.state' => 'required|string',
        'reservation.zip_code' => 'required|string',
        'reservation.card_number' => 'required|string',
    ];

    public function mount($hotel)
    {
        $this->hotel = $hotel;
        $this->user = auth()->user();
        $this->reservation = new Reservation();
    }

    public function createReservation()
    {

        $this->validate();

        $this->reservation->user_id = $this->user->id;

        $this->reservation->hotel_id = $this->hotel->id;

        $this->reservation->save();

        $this->emit('reservationCreated');

        // show a success message
        session()->flash('message', 'Reservation created successfully!');

        // get the current active user
        $user = auth()->user();

        // notify the user
        $user->notify((new \App\Notifications\ReservationComplete($this->reservation)));

        // redirect the user to the hotel page
        return redirect()->route('hotel.show', $this->hotel->id);
    }

    public function render()
    {
        return view('livewire.hotel-reservation-form');
    }
}
