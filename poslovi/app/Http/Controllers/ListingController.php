<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller   //U kontroleru stavljamo naše funckionalnosti
{
    //show all listings
    public function index(){  //Dependency injection
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6) //Paginacija (koliko strana može po stranici)
        ]);
    }

    //Single listings
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //Show create form
    public function create(){
        return view ('listings.create');
    }

    //Store Listing data
    public function store(Request $request){
       // dd($request->all());
       $formFields = $request->validate([
        'title' => 'required',
        'company' => ['required', Rule::unique('listings','company')],
        'location' => 'required',
        'website' => 'required',
        'email' => ['required', 'email'],  //mora biti format email-a
        'tags' => 'required',
        'description' => 'required'
       ]);

       if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public'); //Poslaće ga u storage-app-public-logos //Baza će dobiti put do tog logoa
            // php artisan storage:link    moramo pozvati ovu komandu
       }

       Listing::create($formFields);

       return redirect('/') -> with('message', 'Uspešno ste dodali posao!'); //Šaljemo poruku za uspešno dodavanje
    }

    //Show edit form
    public function edit(Listing $listing){
        return view('listings.edit', ['listing'=>$listing]);
    }
}
