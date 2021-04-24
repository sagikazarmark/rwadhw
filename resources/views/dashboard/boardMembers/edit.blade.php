<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Board Members') }} > {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-dashboard-validation-errors class="mb-4" :errors="$errors"/>

                    <form method="POST" action="{{ route('dashboard.boardMember', ['id' => $boardMember->id]) }}">
                        @csrf
                        @method("PUT")

                        <div>
                            <x-label for="name" :value="__('Name')"/>

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                     value="{{ $boardMember->name }}" required autofocus/>
                        </div>

                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')"/>

                            <x-input id="email" class="block mt-1 w-full"
                                     type="email"
                                     name="email"
                                     value="{{ $boardMember->email }}"
                                     required/>
                        </div>

                        <div class="mt-4">
                            <x-label for="address" :value="__('Address')"/>

                            <x-input id="address" class="block mt-1 w-full"
                                     type="text"
                                     name="address"
                                     value="{{ $boardMember->address }}"
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
        </div>
    </div>
</x-app-layout>
