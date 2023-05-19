<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateHotelReview extends Component
{
    public $hotel;

    public $rating = 2;

    public $title;

    public $comment;

    // create validations
    protected $rules = [
        'rating' => 'required|integer|min:1|max:5',
        'title' => 'required|min:5',
        'comment' => 'required|min:5'
    ];

    public function mount($hotel)
    {
        $this->hotel = $hotel;
    }

    public function save()
    {
        $this->validate();

        $this->hotel->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $this->rating,
            'title' => $this->title,
            'comment' => $this->comment
        ]);

        $this->emit('reviewCreated');

        $this->reset(['rating', 'title', 'comment']);
    }

    public function render()
    {
        return view('livewire.create-hotel-review');
    }
}
