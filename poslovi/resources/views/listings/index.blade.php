<x-layout>

    @include('partials._hero') <!--Hero prikaz za početnu stranu-->
    @include('partials._search')

    <!--Bolji način kada koristimo blade.php - kao u Angularu pozivamo preko {} da se izvrši odredjeni kod-->

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"> <!--Prosleđena varijabla iz routa-->

        @unless (count($listings) == 0)    <!--Ponaša se kao if-->

            @foreach($listings as $listing)

                <x-listing-card :listing="$listing"/> <!--Prosledjujemo promenljivu-->

            @endforeach

        @else
                <p>Nema pronadjene liste</p>
        @endunless

    </div>

    <div class="mt-6 p-4">
        {{$listings->links()}} <!--Prikaz strana za paginaciju iz kontrolera-->
    </div>

</x-layout>
