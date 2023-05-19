<?php

namespace App\Http\Livewire;

use App\Models\Hotel;
use Livewire\Component;

class HotelReviews extends Component
{

    public $hotel;

    // refresh the component when reviewCreated event is fired
    protected $listeners = [
        'reviewCreated' => '$refresh'
    ];

    public function mount($hotel)
    {
        $this->hotel = $hotel;
    }

    public function render()
    {
        return view('livewire.hotel-reviews', [
            'reviews' => $this->hotel->reviews()->latest()->get()
        ]);
    }
}
