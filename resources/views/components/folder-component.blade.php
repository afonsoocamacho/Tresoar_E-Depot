<div class="folder-component" onclick="window.location.href='{{ route('result.page') }}'">
    <div class="folder-img">
        <img src="{{ asset('assets/icons/folder-placeholder.svg') }}" alt="">
    </div>
    <div>
    <div class="folder-info">
        <div class="head">
            <div class="type-of-document">
                <img src="{{ asset('assets/icons/folder.svg') }}" alt="">
                <p class="body2">{{__('all.results.folder')}}</p>

            </div>
            <img src="{{asset('assets/icons/heart.svg') }}" alt="">
        </div>
        <h3>{{ $folderName }}</h3>
    </div>
    <div class="foot">
        
            <p class="period body2">{{__('all.results.period')}}: <span>{{ $period }}</span></p>
            <div class="foot-p2">
            <p class="category body2"> {{__('all.results.category')}}: <span>{{ $category }}</span></p>
        
            <p class="fold-doc body2"><span class="doc">{{ $numDocs }}</span> {{__('all.results.documents')}}, <span class="fold">{{ $numFolders }}</span> {{__('all.results.folders')}} </p>
            </div>
    </div>
</div>
</div>