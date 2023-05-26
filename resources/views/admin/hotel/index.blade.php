<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hotels') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold leading-6 text-gray-900">Hotels</h1>
                    <p class="mt-2 text-sm text-gray-700">
                        A list of all the hotels in the system.
                    </p>
                </div>
                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                    <a href="{{ route('admin.hotels.create') }}"
                        class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Create Hotel
                    </a>
                </div>
            </div>
            <x-table>
                <x-slot name="head">
                    <x-th>Hotel</x-th>
                    <x-th>Image</x-th>
                    <x-th>Category</x-th>
                    {{-- <x-th>Address</x-th> --}}
                    <x-th>City</x-th>
                    <x-th>Country</x-th>
                    <x-th>Phone</x-th>
                    <x-th>Website</x-th>
                    <x-th>Actions</x-th>
                </x-slot>
                <x-slot name="body">
                    @foreach ($hotels as $hotel)
                        <x-tr>
                            <x-td class="whitespace-nowrap py-4 pl-3 pr-3 text-sm font-medium text-gray-900">
                                {{ $hotel->name }}</x-td>
                            <x-td>
                                @if ($hotel->hasMedia('image'))
                                    <img src="{{ $hotel->getFirstMediaUrl('image') }}" alt="{{ $hotel->name }}" />
                                @else
                                    -
                                @endif
                            </x-td>
                            <x-td>{{ $hotel->category->name }}</x-td>
                            {{-- <x-td>{{ $hotel->address }}</x-td> --}}
                            <x-td>{{ $hotel->city }}</x-td>
                            <x-td>{{ $hotel->country }}</x-td>
                            <x-td>{{ $hotel->phone }}</x-td>
                            <x-td>
                                <a href="{{ $hotel->website }}" target="_blank">
                                    Website
                                </a>
                            </x-td>
                            <x-td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm font-medium sm:pr-6 flex gap-3">
                                <a href="{{ route('admin.hotels.edit', $hotel->id) }}"
                                    class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                <form action="{{ route('admin.hotels.destroy', $hotel->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this hotel?')"
                                        class="text-indigo-600 hover:text-indigo-900">
                                        Delete
                                    </button>
                                </form>
                            </x-td>
                        </x-tr>
                    @endforeach
                </x-slot>
            </x-table>
        </div>
    </div>
</x-app-layout>
