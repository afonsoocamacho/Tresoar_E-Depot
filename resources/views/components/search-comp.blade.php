<div class="search-bar-component main-content">
    <div class="p1">
    <x-search-bar></x-search-bar>
    <button><img src="{{asset('assets/icons/document.svg')}}" alt=""> {{__('all.search.documents')}}</button>
    <button><img src="{{asset('assets/icons/folder.svg')}}" alt=""> {{__('all.search.folders')}}</button>
    <button><img src="{{asset('assets/icons/settings.svg')}}" alt=""> {{__('all.search.other_filters')}}</button>
    </div>
    <button>{{__('all.search.sort_by.sort_by')}} {{__('all.search.sort_by.relevance')}} </button>
</div>

