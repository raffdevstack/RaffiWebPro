
{{-- test route parameters and constraints. --}}

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <h1>User ID: {{ $id }} </h1>

</x-app-layout>
