<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(5)->create();

        $user = User::factory()->create([   //
            'name'=> 'Stefan Simić',
            'email' => 'stefan@gmail.com'   //On će sadržati sve unete kolone
        ]);

        Listing::factory(6)->create([ //Poziv klase iz foldera factory - ListingFactory kao Listing::factory (Lisiting je istoimen sa Lisiting modelom u App)
            'user_id' => $user->id    //Povezujemo ih sa migracijama koje se tiču id koji će nam omogućiti da prepoznamo korisnika
        ]);

        /*Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => "Acme Corp",
            'location' => 'Boston, MA',
            'email' => 'email1@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Izuzetna firma'
        ]);

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => "Acme Corp",
            'location' => 'Boston, MA',
            'email' => 'email1@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Izuzetna firma'
        ]);
        */
        //Seeder veštački puni bazu sa korisnicima definisanim u database-factories-UserFacrtories
        //Komande:
        //  php artisan db:seed  //Popunjavanje baze
        //  php artisan migrate:refresh  //Brisanje baze
        //  php artisan migrate:refresh --seed  //Obnavljanje baze sa novim podacima



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
