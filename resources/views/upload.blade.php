<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline">
            {{ __('Upload your photo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-guest-validation-errors class="mb-4" :errors="$errors"/>

                    <form method="post" action="{{ route('photos.uploadSave') }}" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <x-label for="title" :value="__('Title')"/>

                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus/>
                        </div>

                        <div class="flex m-4 bg-grey-lighter">
                            <label
                                class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue-500 rounded-lg shadow-lg tracking-wide uppercase border border-blue-500 cursor-pointer hover:bg-blue-500 hover:text-white">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path
                                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"/>
                                </svg>
                                <span class="mt-2 text-base leading-normal">Select a file</span>
                                <input name="file" type='file' class="hidden"/>
                            </label>
                        </div>

                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
                                type="submit">
                            Upload
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
