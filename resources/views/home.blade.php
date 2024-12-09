@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

<x-layout>
    <div class="main-content">
         <!-- <h1>HOME</h1> -->
    </div>
        <x-hero-banner></x-hero-banner>
    <div class="main-content">    
         <x-cards-view text="Popular searches"></x-cards-view>
    </div>
</x-layout>