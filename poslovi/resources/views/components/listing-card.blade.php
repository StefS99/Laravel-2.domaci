@props(['listing'])

<x-card> <!--Ovo je tag koji nam omogućava da povežemo poseban fajl u kome smo definisali neki deo html-a-->
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$listing->logo ? asset('storage/'.$listing->logo):asset('/images/no-image.png')}}"
            alt=""/> <!--Pozvan je ternarni operator da ako je uneta slika nju prikaže, inače će prikazati podrazumevanu-->
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">
                {{$listing->company}}
            </div>
            <x-listing-tags :tagsCsv="$listing->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
            </div>
        </div>
    </div>
</x-card>
