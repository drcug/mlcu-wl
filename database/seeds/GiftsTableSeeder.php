<?php

use Illuminate\Database\Seeder;

class GiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gifts')->insert([
            'name' => 'Vaporetto',
            'desc' => 'pulisce le cose',
            'photo' => 'vaporetto.jpg',
            'sort' => '1',
            'whole' => false,
            'price' => '100'
        ]);
        DB::table('gifts')->insert([
            'name' => 'Macchina del pane',
            'desc' => 'La macchina del pane ha un buco nella gomma pane',
            'photo' => 'mdp.jpg',
            'sort' => '1',
            'whole' => false,
            'price' => '250'
        ]);
        DB::table('gifts')->insert([
            'name' => 'Cappello Tirolese',
            'desc' => 'Per essere un funzionario di razza',
            'photo' => 'ct.jpg',
            'sort' => '1',
            'whole' => true,
            'price' => '50'
        ]);
        DB::table('gifts')->insert([
            'name' => 'Copriasse WC con scimmia',
            'desc' => 'Ideale per i bagni stile marrakech',
            'photo' => 'simmia.jpg',
            'sort' => '1',
            'whole' => false,
            'price' => '600'
        ]);
        DB::table('gifts')->insert([
            'name' => 'Contributo cose',
            'desc' => 'Per comprare cose (non necessariamente un coniglio robot portasale)',
            'photo' => 'cose.jpg',
            'sort' => '1',
            'whole' => false,
            'price' => '60000'
        ]);        
    }
}
