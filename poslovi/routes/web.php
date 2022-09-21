<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;  //Ovo je namespace koji koristi Laravel za rute
use Monolog\Handler\RotatingFileHandler;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#region Vezbe
/*Route::get('/', function () {   //Endpoint (šta gledamo kao putanju) i funckija
    return view('welcome');    //Ovo je naziv Viewa - iz resources-views: welcome.blade.php (ali se navodi samo welcome)
});

Route::get('/hello', function(){
    return response('<h1>Hello World</h1>', 200); //Vraca nam html kao pogled za upisanu putanju
});

Route::get('/posts/{id}', function($id){
    ddd($id);       // -----  Izuzetna za debug kao i dd, koja pokazuje samo grešku, dok ddd pokazuje značajne informacije ---
    return response('Post ' . $id);
});

Route::get('/search', function(Request $request){
    dd($request->name.' '.$request->city); //Ako bi samo bilo dd($request) - mogli bismo da vidimo query,cookie i ostalo na potiv search?name=Stefan&city=Pancevo u Url, što bi se pokazalo u queryiju(npr.)
});*/


//All listings
/*Route::get('/', function(){
    /*return view('listings', [
       //'heading' => 'Latest Listings',  //PRosledjivanje podataka
        'listings' => Listing::all()   //Funckija iz modela //Takodje iz Eloquenta
        [
            [
                'id' => 1,
                'title' => 'Listing One',
                'Description' => 'Dobro došli'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'Description' => 'Dobro došli2'
            ]
        ]
        	]);
});*/

//Single
/*Route::get('/listings/{listing}', function(Listing $listing){   //Route model binding // prosledimo model i varijablu//Takodje funckija iz Eloquenta
    return view('listing', [
        'listing' => $listing
    ]);

    $listing = Listing::find($id);

      if($listing){
        return view('listing', [
            'listing' => $listing
        ]);
    }else {
        abort('404');
    }


    return view('listing', [
        'listing' => Listing::find($id)    //Funkcija koja ce se izvršiti za prikaz listinga
    ]);
});*/
#endregion


// Common Resource Routes:  Routes to the Method that loads the View
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

//Postupak za izgradnju ruta je isti - napišemo putanju ovde za view,
// u kontroleru napišemo funckiju koja će se pozvati na tu rutu
//i na kraju napišemo html da bi mogli da prikažemo podatke

//All Listings iz kontrolera (Http-Controlers)
Route::get('/', [ListingController::class,'index']);

//Show create Form
Route::get('/listings/create', [ListingController::class,'create']);

//Store - Store new listing (Http-Controlers)
Route::post('/listings',[ListingController::class,'store']);

//Edit - Show form to edit listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Single listings iz kontrolera (Http-Controlers) --OBAVEZNO NA KRAJU
Route::get('/listings/{listing}',[ListingController::class,'show']);
