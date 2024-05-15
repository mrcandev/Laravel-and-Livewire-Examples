@extends('system.app')

@section('content')
    <div class="bg-white">

        <!-- Include the header component with the 'loadMore' page active -->
        {{ view('system.header')->with(['activePage' => 'loadMore']) }}

        <!-- Include the Livewire component for blog load more functionality -->
        @livewire('blog-load-more')

    </div>

@endsection
