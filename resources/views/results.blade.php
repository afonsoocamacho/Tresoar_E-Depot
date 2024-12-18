@push('styles')
    <link rel="stylesheet" href="{{ asset('css/results.css') }}">
@endpush

<x-layout>
    <x-search-comp></x-search-comp>

    <section class="main-content">
        <x-document-component docName="Notariaat provincie Friesland" docDescription="Naamljst der predikaten, hervormde gemeenten van Friesland - second part" period="1900-2000" category="Notary, Finances"></x-document-component>
        <div class="division"></div>
        <x-document-component docName="Naamlijst der Predikanten" docDescription="Naamljst der predikaten, hervormde gemeenten van Friesland - second part" period="1900-2000" category="Families and individuals"></x-document-component>
        <div class="division"></div>
        <x-folder-component folderName="Provincie Friesland" period="1800-2000" category="General administration and politics, Families and individuals" numDocs="12" numFolders="3" ></x-folder-component>
        <div class="division"></div>
        <x-document-component docName="Firma G.J. Wester" docDescription="Administration document firma G.J. Wester" period="1900-2000" category="General administration and politics, Business"></x-document-component>
        <div class="division"></div>
        <x-folder-component folderName="Provincie Friesland" period="1800-2000" category="General administration and politics, Families and individuals" numDocs="12" numFolders="3" ></x-folder-component>
        <div class="division"></div>
        <x-document-component docName="Notariaat provincie Friesland" docDescription="Naamljst der predikaten, hervormde gemeenten van Friesland - second part" period="1900-2000" category="Notary, Finances"></x-document-component>
        <div class="division"></div>
        <x-document-component docName="Naamlijst der Predikanten" docDescription="Naamljst der predikaten, hervormde gemeenten van Friesland - second part" period="1900-2000" category="Families and individuals"></x-document-component>
        <div class="division"></div>
        <x-document-component docName="Firma G.J. Wester" docDescription="Administration document firma G.J. Wester" period="1900-2000" category="General administration and politics, Business"></x-document-component>

    </section>
</x-layout>