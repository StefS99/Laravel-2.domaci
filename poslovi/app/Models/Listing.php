<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    //Ovo moramo dodati, jer nam baza ne bi dozvolila //Ali moze da izmenimo tako što stavimo unguard() u AppServiceProvider Model::unguard();
  //  protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];

    public function scopeFilter($query, array $filters){
       // dd($filters['tag']);
       if($filters['tag'] ?? false){  //?? Ako nije netačno, onda idi dalje
            $query -> where('tags','like','%'.request('tag').'%'); //% sve što dolazi posle i pre ?tags=laravel (tag) npr
       }

       if($filters['search'] ?? false){  //?? Ako nije netačno, onda idi dalje
        $query->where('title','like','%'.request('search').'%')
               ->orWhere('description','like','%'.request('search').'%')
               ->orWhere('tags','like','%'.request('search').'%');
        }
    }
}
