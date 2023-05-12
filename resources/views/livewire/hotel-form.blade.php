<div>
    <form wire:submit.prevent="submit" class="p-5">
        <div class="grid grid-cols-6 gap-4">

            <div class="col-span-3">
                <x-label for="category_id" value="{{ __('Category') }}" />
                <select id="category_id"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
                    wire:model="hotel.category_id">
                    <option value="">Select a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <x-input-error for="category_id" class="mt-2" />
            </div>

            <div class="col-span-3">
                <x-label for="sub_categories" value="{{ __('Sub Categories') }}" />
                <select id="sub_categories"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
                    wire:model="sub_categories" multiple>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ in_array($category->id, $hotel->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error for="sub_categories" class="mt-2" />
            </div>

            <div class="col-span-6">
                <x-label for="image" value="{{ __('Image') }}" />
                <x-input id="image" type="file" class="mt-1 block w-full" wire:model="image" />
                <x-input-error for="image" class="mt-2" />
            </div>

            <div class="col-span-6">
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" type="text" class="mt-1 block w-full" wire:model="hotel.name" />
                <x-input-error for="name" class="mt-2" />
            </div>

            <div class="col-span-6">
                <x-label for="description" value="{{ __('Description') }}" />
                <x-textarea id="description" type="text" class="mt-1 block w-full" wire:model="hotel.description" />
                <x-input-error for="description" class="mt-2" />
            </div>

            <div class="col-span-6">
                <x-label for="address" value="{{ __('Address') }}" />
                <x-input id="address" type="text" class="mt-1 block w-full" wire:model="hotel.address" />
                <x-input-error for="address" class="mt-2" />
            </div>

            <div class="col-span-2">
                <x-label for="city" value="{{ __('City') }}" />
                <x-input id="city" type="text" class="mt-1 block w-full" wire:model="hotel.city" />
                <x-input-error for="city" class="mt-2" />
            </div>

            <div class="col-span-2">
                <x-label for="zip_code" value="{{ __('Postal Code') }}" />
                <x-input id="zip_code" type="text" class="mt-1 block w-full" wire:model="hotel.zip_code" />
                <x-input-error for="zip_code" class="mt-2" />
            </div>

            <div class="col-span-2">
                <x-label for="country" value="{{ __('Country') }}" />
                <x-input-country id="country" type="text" class="mt-1 block w-full" wire:model="hotel.country" />
                <x-input-error for="country" class="mt-2" />
            </div>

            <div class="col-span-3">
                <x-label for="latitude" value="{{ __('Latitude') }}" />
                <x-input id="latitude" type="text" class="mt-1 block w-full" wire:model="hotel.latitude" />
                <x-input-error for="latitude" class="mt-2" />
            </div>

            <div class="col-span-3">
                <x-label for="longitude" value="{{ __('Longitude') }}" />
                <x-input id="longitude" type="text" class="mt-1 block w-full" wire:model="hotel.longitude" />
                <x-input-error for="longitude" class="mt-2" />
            </div>

            <div class="col-span-2">
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" type="text" class="mt-1 block w-full" wire:model="hotel.phone" />
                <x-input-error for="phone" class="mt-2" />
            </div>

            <div class="col-span-2">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" type="email" class="mt-1 block w-full" wire:model="hotel.email" />
                <x-input-error for="email" class="mt-2" />
            </div>

            <div class="col-span-2">
                <x-label for="website" value="{{ __('Website') }}" />
                <x-input id="website" type="text" class="mt-1 block w-full" wire:model="hotel.website" />
                <x-input-error for="website" class="mt-2" />
            </div>

            <div class="col-span-2">
                <x-label for="check_in" value="{{ __('Check in') }}" />
                <x-input id="check_in" type="text" class="mt-1 block w-full" wire:model="hotel.check_in" />
                <x-input-error for="check_in" class="mt-2" />
            </div>

            <div class="col-span-2">
                <x-label for="check_out" value="{{ __('Check Out') }}" />
                <x-input id="check_out" type="text" class="mt-1 block w-full" wire:model="hotel.check_out" />
                <x-input-error for="check_out" class="mt-2" />
            </div>

            <div class="col-span-2">
                <x-label for="price" value="{{ __('Price') }}" />
                <x-input id="price" type="text" class="mt-1 block w-full" wire:model="hotel.price" />
                <x-input-error for="price" class="mt-2" />
            </div>

            <div class="col-span-6">
                <x-button type="submit" class="bg-green-500 hover:bg-green-700">
                    {{ __('Save') }}
                </x-button>
            </div>
        </div>
    </form>
</div>
