<div class="search-bar">
    <div class="breadcrums"></div>
    <div class="search">
        <div class="search-form">
            <form action="">
                @csrf
                <div class="search-input">
                <button type="submit" aria-label="Search button"><div class="icon"><img src="{{ asset('assets/icons/magnifier.svg') }}" alt="magnifier"></div></button>
                <input type="text" placeholder="{{__('search.search')}}" aria-label="Search Bar">
                
                </div>
            </form>
        </div>
    </div>
</div>