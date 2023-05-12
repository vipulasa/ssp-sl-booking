<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class HotelForm extends Component
{

    use WithFileUploads;

    public $hotel;

    public $categories;

    public $sub_categories;

    public $image;

    protected $rules = [
        'hotel.category_id' => 'required',
        'hotel.name' => 'required',
        'hotel.description' => 'required',
        'hotel.address' => 'required',
        'hotel.city' => 'required',
        'hotel.country' => 'required',
        'hotel.zip_code' => 'required',
        'hotel.latitude' => 'required',
        'hotel.longitude' => 'required',
        'hotel.phone' => 'required',
        'hotel.email' => 'required',
        'hotel.website' => 'required',
        'hotel.check_in' => 'required',
        'hotel.check_out' => 'required',
        'hotel.price' => 'required',
    ];

    public function mount($hotel)
    {
        $this->hotel = $hotel;

        $this->categories = \App\Models\Category::all();

        $this->sub_categories = $this->hotel->categories()->pluck('id')->toArray();
    }

    public function submit()
    {
        $this->validate();

        $this->hotel->save();

        // check if there are any selected sub_categories
        // if so, sync them with the hotel
        if ($this->sub_categories) {
            $this->hotel->categories()->sync($this->sub_categories);
        }

        // check if there is an image
        // if so, add it to the hotel
        if ($this->image) {

            // clear the media collection
            $this->hotel->clearMediaCollection('image');

            // add the image to the media collection
            $this->hotel->addMedia($this->image->getRealPath())->toMediaCollection('image');
        }

        return redirect()->route('admin.hotels.index');
    }

    public function render()
    {
        return view('livewire.hotel-form');
    }
}
