<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hotels') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="flex justify-end mr-5 mt-5 mb-5">
                    <a href="{{ route('admin.hotels.create') }}"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create New
                        Hotel</a>
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
                                <x-td>{{ $hotel->name }}</x-td>
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
                                <x-td class="flex gap-3">
                                    <a href="{{ route('admin.hotels.edit', $hotel->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                    <form action="{{ route('admin.hotels.destroy', $hotel->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this hotel?')"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
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
    </div>
</x-app-layout>
