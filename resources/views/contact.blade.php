<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline">
            {{ __('Contact') }}
        </h2>
    </x-slot>

    <!-- Session Status -->
    <x-dashboard-session-status class="mb-4" :status="session('status')" />

    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('contact') }}">
            @csrf

                <div>
                    <x-label for="name" :value="__('Name')"/>

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus/>
                </div>

                <div class="mt-4">
                    <x-label for="message" :value="__('Message')"/>

                    <x-textarea id="message" class="block mt-1 w-full"
                             type="textarea"
                             name="message"
                             required/>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-3">
                        {{ __('Send') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
