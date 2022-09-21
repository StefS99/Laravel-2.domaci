<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Monolog\Handler\RotatingFileHandler;
use App\Http\Controllers\ListingController;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Support\Facades\Route;  //Ovo je namespace koji koristi Laravel za rute

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
Route::get('/listings/create', [ListingController::class,'create'])->middleware('auth'); //Samo ulogovn korisnik može da dodaje
//Middleware se nalazi u app-http-Middleware-Authenticaticate- idemo u redirectTo

//Store - Store new listing (Http-Controlers)
Route::post('/listings',[ListingController::class,'store'])->middleware('auth');

//Edit - Show form to edit listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Manage Listings
//Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Single listings iz kontrolera (Http-Controlers) --OBAVEZNO NA KRAJU
Route::get('/listings/{listing}',[ListingController::class,'show']);

//Show register form
Route::get('/register', [UserController::class, 'register'])->middleware('guest'); //Pokazuje register ako je neko gost, a inače se ne poazuje

//Create New User
Route::post('/users', [UserController::class, 'store']);

//Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest'); //Ruta iz middleware-a
//Ako nismo prijavljeni na name('login') on će nas poslati da se ulogujemo za svaki koji ima ->middleware('auth'). //Middleware('guest') će nam omogućiti da se ovo pojavljuje samo ako neko nije ulogovan
//Važno je da i u RouteServiceProvider-u izmenimo home u /

//Log in User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

