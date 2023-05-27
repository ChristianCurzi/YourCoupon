<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Utente;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */


    public function run() {


        DB::table('utente')->insert ([
            ['Username' => 'Persona1', 'Password' => 'Passwordd', 'Livello' => 2, 'Nome' => 'Christian', 'Cognome' => 'Curzi', 'Email' => 'chricurz@gmail.com', 'Nascita' => '2002/03/09', 'Genere' => 'Uomo', 'Telefono' => '3913913913', 'ProPic' => 'img/user/Chri.jpeg'],
            ['Username' => 'Persona2', 'Password' => 'Passwordd', 'Livello' => 2, 'Nome' => 'Ludovico', 'Cognome' => 'Gorgoglione', 'Email' => 'hjkvabauovs@gmail.com', 'Nascita' => '2002/03/09', 'Genere' => 'Uomo', 'Telefono' => '3913913913', 'ProPic' => 'img/user/default.jpg'],
            ['Username' => 'Persona3', 'Password' => 'Passwordd', 'Livello' => 2, 'Nome' => 'Francesco', 'Cognome' => 'Finizii', 'Email' => 'vSVKLEr@gmail.com', 'Nascita' => '2002/03/09', 'Genere' => 'Uomo', 'Telefono' => '3913913913', 'ProPic' => 'img/user/default.jpg'],
            ['Username' => 'Persona4', 'Password' => 'Passwordd', 'Livello' => 2, 'Nome' => 'Kristian', 'Cognome' => 'Likaj', 'Email' => 'nsbvudvbiau@gmail.com', 'Nascita' => '2002/03/09', 'Genere' => 'Uomo', 'Telefono' => '3913913913', 'ProPic' => 'img/user/default.jpg'],
            ['Username' => 'Persona5', 'Password' => 'Passwordd', 'Livello' => 1, 'Nome' => 'Luca', 'Cognome' => 'Rossi', 'Email' => 'svkbrevfsvd@gmail.com', 'Nascita' => '2002/03/09', 'Genere' => 'Uomo', 'Telefono' => '3913913913', 'ProPic' => 'img/user/default.jpg'],
            ['Username' => 'Persona6', 'Password' => 'Passwordd', 'Livello' => 1, 'Nome' => 'Mario', 'Cognome' => 'Bianchi', 'Email' => 'vretbrbv@gmail.com', 'Nascita' => '2002/03/09', 'Genere' => 'Uomo', 'Telefono' => '3913913913', 'ProPic' => 'img/user/default.jpg'],
            ['Username' => 'Persona7', 'Password' => 'Passwordd', 'Livello' => 1, 'Nome' => 'Antonio', 'Cognome' => 'Verdi', 'Email' => 'sfbvasfnbadg@gmail.com', 'Nascita' => '2002/03/09', 'Genere' => 'Uomo', 'Telefono' => '3913913913', 'ProPic' => 'img/user/default.jpg'],
            ['Username' => 'Persona8', 'Password' => 'Passwordd', 'Livello' => 1, 'Nome' => 'Marco', 'Cognome' => 'Neri', 'Email' => 'badgndgbdg@gmail.com', 'Nascita' => '2002/03/09', 'Genere' => 'Uomo', 'Telefono' => '3913913913', 'ProPic' => 'img/user/default.jpg'],
            ['Username' => 'Persona9', 'Password' => 'Passwordd', 'Livello' => 1, 'Nome' => 'Laura', 'Cognome' => 'Rossi', 'Email' => 'bdgbgrh@gmail.com', 'Nascita' => '2002/03/09', 'Genere' => 'Donna', 'Telefono' => '3913913913', 'ProPic' => 'img/user/default.jpg']
        ]);

    }

}
