@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

<x-layout>
    <div class="main-content">
        <x-search-bar></x-search-bar>
         <!-- <h1>HOME</h1> -->
    </div>
        <x-hero-banner></x-hero-banner>
    <div class="main-content">    
         <x-cards-view text="Recent searches"></x-cards-view>
         <x-cards-view text="Popular topics"></x-cards-view>
        
    </div>
</x-layout>