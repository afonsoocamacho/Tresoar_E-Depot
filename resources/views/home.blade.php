@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

<x-layout>
    <div class="main-content">
         <!-- <h1>HOME</h1> -->
    </div>
        <x-hero-banner></x-hero-banner>
    <div class="main-content">    
         <x-cards-view text="{{__('all.home.popular_searches')}}"></x-cards-view>
         <x-map-view text="{{__('all.home.search_by_map')}}"></x-maps-view>
    </div>
</x-layout>