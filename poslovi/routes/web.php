<?php

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
#endregion

//All lisitngs
Route::get('/', function(){
    return view('listings', [
        'heading' => 'Latest Listings',  //PRosledjivanje podataka
        'listings' => Listing::all()   //Funckija iz modela //Takodje iz Eloquenta
        /*[
            [
                'id' => 1,
                'title' => 'Listing One',
                'Description' => 'Dobro došli'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'Description' => 'Dobro došli2'
            ]/*
        ]*/
    ]);
});

//Single
Route::get('/listings/{id}', function($id){   //Takodje funckija iz Eloquenta
    return view('listing', [
        'listing' => Listing::find($id)    //Funkcija koja ce se izvršiti za prikaz listinga
    ]);
});
