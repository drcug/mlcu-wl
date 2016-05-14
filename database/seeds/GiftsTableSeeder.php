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
            'name' => 'Vaporetto Kaercher Dampfreiniger SC 3',
            'desc' => 'Aiutate Carlo Umberto e Maria Luisa a tenere pulita la loro casa!',
            'photo' => 'vaporetto.jpg',
            'url' => 'https://www.kaercher.com/de/home-garden/dampfreiniger/sc-3-15130000.html',
            'sort' => '1',
            'whole' => true,
            'price' => '160'
        ]);
        DB::table('gifts')->insert([
            'name' => 'Contributo divano',
            'desc' => 'Dobbiamo ancora scegliere il modello e la marca, ma di certo avremo bisogno di un divano!',
            'photo' => 'sofa.jpg',
            'sort' => '1',
            'whole' => false,
            'price' => '1000'
        ]);
        DB::table('gifts')->insert([
            'name' => 'Coltello Global G20',
            'desc' => 'Aiutateci nei nostri esperimenti culinari!',
            'photo' => 'coltello.jpg',
            'sort' => '1',
            'url' => 'http://houseofknives.ca/global-g20-fillet-21cm-8-g-20/',
            'whole' => true,
            'price' => '80'
        ]);
        DB::table('gifts')->insert([
            'name' => 'Contributo Cose di Casa',
            'desc' => 'Tutto quello che ci serve per la casa. Mobili, piatti, bicchieri etc.',
            'photo' => 'arredamento.jpg',
            'sort' => '1',
            'whole' => false,
            'price' => '5000'
        ]);
        DB::table('gifts')->insert([
            'name' => 'Contributo viaggio di nozze',
            'desc' => 'Saremo un po\' stanchini dopo il 3 settembre, aiutateci a fare un bel viaggio per riposarci!',
            'photo' => 'viaggio.jpg',
            'sort' => '1',
            'whole' => false,
            'price' => '2000'
        ]);     
        DB::table('gifts')->insert([
            'name' => 'Pinze da cucina',
            'desc' => 'Aiutateci nei nostri esperimenti culinari!',
            'photo' => 'pinze.jpg',
            'sort' => '1',
            'whole' => true,
            'price' => '25'
        ]);
        DB::table('gifts')->insert([
            'name' => 'Mobile da stiro Foppapedretti Stir8',
            'desc' => 'Aiutateci ad andare al lavoro con i vestiti ben stirati tenendo la casa in ordine!',
            'photo' => 'stiro.jpg',
            'sort' => '1',
            'whole' => true,
            'url' => 'http://shop.foppapedretti.it/casa/lavanderia/stirerie/stir8.html',
            'price' => '200'
        ]);   
        DB::table('gifts')->insert([
            'name' => 'Affettatrice Ritter Duo-Plus E 16',
            'desc' => 'Aiutateci nei nostri esperimenti culinari, soprattutto con mortadella e speck!',
            'photo' => 'affettatrice.jpg',
            'sort' => '1',
            'url'  => 'http://www.amazon.it/gp/product/B000KPW5TY/ref=as_li_ss_tl?ie=UTF8&camp=3370&creative=24114&creativeASIN=B000KPW5TY&linkCode=as2',
            'whole' => true,
            'price' => '110'
        ]);          
    }
}
