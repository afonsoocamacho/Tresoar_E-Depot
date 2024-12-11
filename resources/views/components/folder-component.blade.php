<div class="folder-component">
    <div class="folder-img">
        <img src="{{ asset('assets/icons/folder-placeholder.svg') }}" alt="">
    </div>
    <div class="folder-info">
        <div class="head">
            <div class="type-of-document">
                <img src="{{ asset('assets/icons/folder.svg') }}" alt="">
                <p>{{__('all.results.folder')}}</p>

            </div>
            <img src="{{asset('assets/icons/heart.svg') }}" alt="">
        </div>
        <h3>DOC NAME WILL BE HERE</h3>
    </div>
    <div class="foot">
        <div>
            <p class="period body2">{{__('all.results.period')}}: <span></span></p>
            <p class="category body2"> {{__('all.results.category')}}: <span></span></p>
        </div>
        <p class="body2"><span></span> {{__('all.results.folders')}}, <span></span> {{__('all.results.documents')}} </p>
    </div>
</div>