@extends('system.app')

@section('content')
    <div class="bg-white">

        <!-- Include the header component with the 'counter' page active -->
        {{ view('system.header')->with(['activePage' => 'counter']) }}

        <!-- Livewire Counter component -->
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col items-start max-w-screen-sm md:flex-row sm:mx-auto">
                <a href="/" class="mb-4 mr-8">
                    <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
                        <svg class="w-12 h-12 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                        </svg>
                    </div>
                </a>

                <!-- Include the Livewire Counter component -->
                @livewire('counter')
            </div>
        </div>

    </div>

@endsection
