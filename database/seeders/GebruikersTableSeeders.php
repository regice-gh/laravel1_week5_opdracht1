<?php

namespace Database\Seeders;

use App\Http\Controllers\GebruikersController as ControllersGebruikersController;
use App\Models\Gebruiker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Http\Controllers\GebruikersController;

class GebruikersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gebruiker::create([
            'id' => 1,
            'naam' => 'Piet',
            'woonplaats' => 'Breda'
        ]);
        Gebruiker::create([
            'id' => 2,
            'naam' => 'Klaas',
            'woonplaats' => 'Breda'
        ]);
        Gebruiker::create([
            'id' => 3,
            'naam' => 'Jan',
            'woonplaats' => 'Tilburg'
        ]);
        Gebruiker::create([
            'id' => 4,
            'naam' => 'Kees',
            'woonplaats' => 'Tilburg'
        ]);
        Gebruiker::create([
            'id' => 5,
            'naam' => 'Henk',
            'woonplaats' => 'Breda'
        ]);
        Gebruiker::create([
            'id' => 6,
            'naam' => 'Piet',
            'woonplaats' => 'Tilburg'
        ]);
        Gebruiker::create([
            'id' => 7,
            'naam' => 'Klaas',
            'woonplaats' => 'Tilburg'
        ]);
        Gebruiker::create([
            'id' => 8,
            'naam' => 'Jan',
            'woonplaats' => 'Breda'
        ]);
        Gebruiker::create([
            'id' => 9,
            'naam' => 'Kees',
            'woonplaats' => 'Breda'
        ]);
        Gebruiker::create([
            'id' => 10,
            'naam' => 'Henk',
            'woonplaats' => 'Tilburg'
        ]);
    }
}
