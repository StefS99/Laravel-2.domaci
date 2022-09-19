
<!--<h1><?php echo $heading ?>
<?php foreach($listings as $listing):?>
    <h2> <?php echo $listing['title'];?></h2>
    <p><?php echo $listing['description']; ?></p>
<?php endforeach; ?>-->
<!--Prosleđena varijabla iz routa-->

<!--Bolji način kada koristimo blade.php - kao u Angularu pozivamo preko {} da se izvrši odredjeni kod-->

@php    //Moze da i na ovaj nacin pozovemo php i da u njemu napravimo varijablu
$test = 1;
@endphp
{{$test}}

@if(count($listings) == 0)
<p>Nema listings</p>
@endif


<h1>{{$heading}}</h1> <!--Prosleđena varijabla iz routa-->
@unless (count($listings) == 0)    <!--Ponaša se kao if-->
    @foreach($listings as $listing)
        <h2>
            <a href="/listings/{{$listing['id']}}">
                {{$listing['title']}}
            </a>
        </h2>
        <p>
            {{$listing['description']}}
        </p>
    @endforeach

@else
        <p>Nema pronadjene liste</p>
@endunless
