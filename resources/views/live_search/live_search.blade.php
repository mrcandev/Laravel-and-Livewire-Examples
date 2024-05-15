@extends('system.app')

@section('content')
    <div class="bg-white">

        <!-- Include the header component with the 'liveSearch' page active -->
        {{ view('system.header')->with(['activePage' => 'liveSearch']) }}

        <!-- Include the Livewire component for blog search functionality -->
        @livewire('blog-search')

    </div>

@endsection
