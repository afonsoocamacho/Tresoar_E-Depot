@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

<x-layout>
    <div class="main-content">
        <x-search-bar></x-search-bar>
         <h1>HOME</h1>
         <p class="suggested-search-filters">Recent searches</p>
         <x-card></x-card>
    </div>
</x-layout>