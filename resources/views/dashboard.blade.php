<x-app-layout>
    <x-slot name="header">
            {{ __('Dashboard') }}
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            {{ __('Welcome back,') }} {{ auth()->user()->name }}!
        </div>
    </div>
</x-app-layout>
