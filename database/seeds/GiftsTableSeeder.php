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
            'price' => '100'
        ]);
    }
}
