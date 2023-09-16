<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
            {{ __('Admin Dashboard') }}
        </h2>
        
    </x-slot>

    <div class="py-12" x-data="{ open: $persist(true).using(sessionStorage)}">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative">
                <div class="p-6 text-gray-900" x-show="open">
                    {{ __("You're logged in!") }}
                </div>
                <div class="py-2 rounded-full  px-3 absolute top-0 right-0" @click="open = false" x-transition.duration-250>
                    <svg class="close-svg fill-black text-black hover:text-red-700 cursor-pointer" width="24" height="24" viewBox="0 0 24 24"
                        style="transform: ;msFilter:;">
                        <path
                            d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                        </path>
                    </svg>
                </div>
            </div>
            @include('livewire.includes.input')
            <livewire:admin-dashboard :posts="$posts"/>
        </div>
    </div>
</x-app-layout>
