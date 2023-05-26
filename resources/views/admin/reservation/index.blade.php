<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold leading-6 text-gray-900">
                        Reservations
                    </h1>
                    <p class="mt-2 text-sm text-gray-700">
                        A list of all the hotel reservations in the system.
                    </p>
                </div>
            </div>

            <x-table>
                <x-slot name="head">
                    <x-th>Hotel</x-th>
                    <x-th>First Name</x-th>
                    <x-th>Email</x-th>
                    <x-th>Phone</x-th>
                    <x-th>Country</x-th>
                    <x-th>Created At</x-th>
                    <x-th>Actions</x-th>
                </x-slot>
                <x-slot name="body">

                    @foreach ($reservations as $reservation)

                        <x-tr>
                            <x-td class="whitespace-nowrap py-4 pl-3 pr-3 text-sm font-medium text-gray-900">
                                {{ $reservation->hotel->name }}
                            </x-td>

                            <x-td>{{ $reservation->first_name }}</x-td>

                            <x-td>{{ $reservation->email }}</x-td>

                            <x-td>{{ $reservation->phone }}</x-td>

                            <x-td>{{ $reservation->country }}</x-td>

                            <x-td>{{ $reservation->created_at->format('d/m/Y h:ia') }}</x-td>


                            <x-td class="flex gap-3">
                                {{-- <a href="{{ route('admin.hotels.edit', $hotel->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                    <form action="{{ route('admin.hotels.destroy', $hotel->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this hotel?')"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            Delete
                                        </button>
                                    </form> --}}
                            </x-td>
                        </x-tr>
                    @endforeach
                </x-slot>
            </x-table>

        </div>
    </div>
</x-app-layout>
