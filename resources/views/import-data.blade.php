<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Import Data') }}
        </h2>
    </x-slot>

    <div class="p-4" id="form_container">
        <form class="w-full mx-auto max-w-sm " >
            <x-input-label>Place your file below</x-input-label>
            <div class="flex items-center border-b border-teal-500 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="file" placeholder="Jane Doe" aria-label="Full name">
                <x-primary-button class="w-48">Click Me</x-primary-button>
            </div>
        </form>
    </div>

</x-app-layout>
