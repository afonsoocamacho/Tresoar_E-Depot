<div class="document-component" onclick="window.location.href='{{ route('result.page') }}'">
    <div class="document-img">
    </div>
    <div>
    <div class="document-info">
        <div class="head">
            <div class="type-of-document">
                <img src="{{ asset('assets/icons/document.svg') }}" alt="">
                <p class="body2">{{__('all.results.document')}}</p>

            </div>
            <img src="{{asset('assets/icons/heart.svg') }}" alt="">
        </div>
        <h3>{{ $docName }}</h3>
        <p class="body2">{{ $docDescription }}</p>
    </div>
    <div class="foot">
        
            <p class="period body2">{{__('all.results.period')}}: <span>{{ $period }}</span></p>
            
            <p class="category body2"> {{__('all.results.category')}}: <span>{{ $category }}</span></p>
    </div>
</div>
</div>