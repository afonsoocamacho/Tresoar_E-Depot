@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

<x-layout>
    <div class="main-content">
        <x-search-bar></x-search-bar>
         <h1>HOME</h1>
         <x-card-plus-title text="Recent searches"></x-card-plus-title>
         <x-card-plus-title text="Popular topics"></x-card-plus-title>
        
    </div>
</x-layout>