<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $hotel->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            @if (session('message'))
                {{-- <div x-data="{ show: 1 }" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false"
                    x-show="show" id="one"
                    class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" style="display: none;">
                    <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false"
                        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>

                    <div x-show="show"
                        class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6"
                        x-trap.inert.noscroll="show" x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                        <div>
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-100">
                              <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                              </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-5">
                              <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Payment successful</h3>
                              <div class="mt-2">
                                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur amet labore.</p>
                              </div>
                            </div>
                          </div>
                          <div class="mt-5 sm:mt-6">
                            <button type="button" class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back to dashboard</button>
                          </div>
                        </div>
                    </div>
                </div> --}}

                <script>
                    Swal.fire(
                        'Thank you!',
                        '{{ session('message') }}',
                        'success'
                    );
                </script>
            @endif
            <div class="relative">
                <div class="mx-auto max-w-7xl bg-white">
                    <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
                        <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block"
                            viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                            <polygon points="0,0 90,0 50,100 0,100" />
                        </svg>
                        <div class="relative px-6 py-32 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
                            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                                    <span class="block xl:inline">{{ $hotel->name }}</span>
                                </h1>
                                <p class="mt-6 text-lg leading-8 text-gray-600">{{ $hotel->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                    <img class="aspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full"
                        src="{{ $hotel->getFirstMediaUrl('image') }}" alt="">
                </div>
            </div>


            <div class="overflow-hidden bg-white">
                <div class="px-4 py-6 sm:px-6">
                    <h3 class="text-lg font-medium leading-7 text-gray-900">Information</h3>
                    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Hotel details</p>
                </div>
                <div class="border-t border-gray-100">
                    <dl class="divide-y divide-gray-100">
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Name</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $hotel->name }}
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Description</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                {{ $hotel->description }}
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Location</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                {{ $hotel->address }}, {{ $hotel->city }}, {{ $hotel->zip_code }},
                                {{ $hotel->country }}
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Check-in \ Check-out</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                {{ $hotel->check_in }} - {{ $hotel->check_out }}
                            </dd>
                        </div>

                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Category</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                {{ $hotel->category->name }}
                            </dd>
                        </div>

                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Tags</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                @foreach ($hotel->categories as $category)
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        {{ $category->name }}
                                    </span>
                                @endforeach
                            </dd>
                        </div>

                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Price</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                {{ $hotel->price }} €
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Reserve</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                <a href="{{ route('hotel.reservation', $hotel->id) }}"
                                    class="text-indigo-600 hover:text-indigo-900">
                                    Click here to reserve
                                </a>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

            <div class="bg-white">
                <div class="px-6 pt-6">
                    @livewire('hotel-reviews', [
                        'hotel' => $hotel,
                    ])
                    @auth
                        @livewire('create-hotel-review', [
                            'hotel' => $hotel,
                        ])
                    @endauth

                    @guest
                        <div class="my-6">
                            <a href="{{ route('login') }}"
                                class="inline-flex items-center justify-center px-4 py-2 mb-5 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700">
                                Login to leave a review
                            </a>
                        </div>
                    @endguest
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
