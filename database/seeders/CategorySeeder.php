<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotel_categories = array(
            array(
                "name" => "Luxury Hotels",
                "description" => "Experience the height of luxury with the finest amenities and world-class service at these top-rated hotels."
            ),
            array(
                "name" => "Boutique Hotels",
                "description" => "Discover unique and stylish accommodations at these intimate and artfully designed hotels."
            ),
            array(
                "name" => "Family-Friendly Hotels",
                "description" => "Find comfort and convenience for the whole family with spacious rooms, child-friendly amenities, and fun activities."
            ),
            array(
                "name" => "Beach Resorts",
                "description" => "Relax in paradise at these stunning resorts located on the world's most beautiful beaches."
            ),
            array(
                "name" => "Mountain Lodges",
                "description" => "Escape to the mountains and enjoy breathtaking views, cozy accommodations, and outdoor adventures."
            ),
            array(
                "name" => "Pet-Friendly Hotels",
                "description" => "Bring your furry friend along for the adventure and stay at these hotels that cater to pets and their owners."
            ),
            array(
                "name" => "Eco-Friendly Hotels",
                "description" => "Stay green and reduce your carbon footprint at these hotels that prioritize sustainability and eco-friendliness."
            ),
            array(
                "name" => "Historic Hotels",
                "description" => "Step back in time and experience the grandeur and elegance of a bygone era at these iconic historic hotels."
            ),
            array(
                "name" => "Budget Hotels",
                "description" => "Save money without sacrificing comfort at these affordable hotels that offer clean rooms and convenient locations."
            ),
            array(
                "name" => "Spa Resorts",
                "description" => "Indulge in relaxation and rejuvenation with luxurious spa treatments and wellness programs at these top-rated resorts."
            )
        );

        foreach ($hotel_categories as $hotel_category) {
            \App\Models\Category::create($hotel_category);
        }
    }
}
