<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline">
            {{ __('Photos') }}
        </h2>
        @auth
        <a href="{{ route('photos.uploadForm') }}"
           class="float-right bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Upload new</a>
        @endauth
    </x-slot>

    <!-- Session Status -->
    <x-guest-session-status class="mb-4" :status="session('status')" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="max-w-4xl p-8 mx-auto"
                         x-data="alpineLightbox()" x-init="src = pixel" x-on:keydown.escape.window="close()">
                        <!-- Start thumbnail grid -->
                        <div class="grid grid-cols-2 gap-4 sm:gap-8 sm:grid-cols-3 md:grid-cols-4">
                            <!-- Start thumbnail -->
                            @foreach ($photos as $photo)
                                <figure
                                    class="block w-full p-1 transition-shadow duration-200 ease-out bg-white border border-gray-300 rounded cursor-pointer hover:shadow-xl"
                                    data-fullsize="{{ Storage::url($photo->filename) }}"
                                    x-on:click="open($event)">
                                    <img class="block object-fill w-full h-full"
                                         src="{{ Storage::url($photo->filename) }}"
                                         alt="Thumbnail"
                                         data-fullsize="{{ Storage::url($photo->filename) }}"
                                         title="{{ $photo->title }}">
                                    {{ $photo->title }}
                                </figure>
                        @endforeach
                        <!-- End thumbnail -->
                        </div>
                        <!-- End thumbnail grid -->

                        <!-- Start lightbox -->
                        <div
                            class="fixed inset-0 z-50 grid w-screen h-screen gap-2 px-4 bg-black bg-opacity-75 sm:px-12 place-items-center grid-rows-lightbox"
                            x-show="isOpen"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0">

                            <img class="block object-contain w-full h-full row-start-2"
                                 x-bind:src="src"
                                 x-bind:alt="alt"
                                 x-show="isOpen"
                                 x-transition:enter="transition ease-out duration-300 delay-150"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="transition ease-in duration-300"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0">

                            <button class="flex items-center p-2 text-white row-start-3" aria-label="Close"
                                    x-on:click="close()">
                                <svg class="w-8 h-8 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <span class="text-xl font-light uppercase">Close</span>
                            </button>

                        </div>
                        <!-- End lightbox -->
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
