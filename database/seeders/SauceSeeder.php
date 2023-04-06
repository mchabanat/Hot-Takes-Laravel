<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SauceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sauces')->insert([
            'userId' => 1,
            'name' => "KETCHUP",
            'manufacturer' => "Heinz",
            'description' => "La meilleure sauce tomate au monde",
            'mainPepper' => "tomate",
            'heat' => 0,
            'imageUrl' => "https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/610HAoUis4L._AC_SX679_.jpg",
        ]);

        DB::table('sauces')->insert([
            'userId' => 1,
            'name' => "MAYONNAISE",
            'manufacturer' => "Hellmann's",
            'description' => "La meilleure sauce mayonnaise au monde",
            'mainPepper' => "Oeuf",
            'heat' => 0,
            'imageUrl' => "https://th.bing.com/th/id/R.1b0a345c4ccd0474fc7175ab4fca6d11?rik=8ajep3HZsRljkA&pid=ImgRaw&r=0",
        ]);

        DB::table('sauces')->insert([
            'userId' => 1,
            'name' => "HELLFIRE FEAR",
            'manufacturer' => "HELLFIRE",
            'description' => "Sauce piquante de zinzin",
            'mainPepper' => "Pimentos",
            'heat' => 9,
            'imageUrl' => "https://image.jimcdn.com/app/cms/image/transf/none/path/s109b8a775f1b27c8/image/i93e4de500148a072/version/1531237244/image.jpg",
        ]);

        DB::table('sauces')->insert([
            'userId' => 1,
            'name' => "SAUCE BARBECUE",
            'manufacturer' => "Heinz",
            'description' => "La meilleure sauce barbecue au monde",
            'mainPepper' => "Un barbecue",
            'heat' => 0,
            'imageUrl' => "https://www.hotdogworld.fr/708-large_default/sauce-barbecue-bbq-heinz.jpg",
        ]);

        DB::table('sauces')->insert([
            'userId' => 1,
            'name' => "HELLFIRE ELIXIR",
            'manufacturer' => "HELLFIRE",
            'description' => "Sauce au poivre du grand père",
            'mainPepper' => "Poivre",
            'heat' => 9,
            'imageUrl' => "https://cdn11.bigcommerce.com/s-qqb56hyrha/images/stencil/1280x1280/products/2093/7995/7577__53263.1560650472.jpg?c=2&imbypass=on",
        ]);

        DB::table('sauces')->insert([
            'userId' => 1,
            'name' => "JALAPENO FUME",
            'manufacturer' => "Kikkoman",
            'description' => "Incroyable condiment fumé",
            'mainPepper' => "Jalapeno",
            'heat' => 3,
            'imageUrl' => "https://pro.sauce-piquante.fr/2360-large_default/seed-ranch-jalapeno-fume.jpg",
        ]);

        DB::table('sauces')->insert([
            'userId' => 1,
            'name' => "SAUCE AIL NOIR JOLOKIA",
            'manufacturer' => "Jolokia",
            'description' => "Mega sauce à l'ail noir",
            'mainPepper' => "ail noir",
            'heat' => 7,
            'imageUrl' => "https://www.sauce-piquante.fr/826-large_default/sauce-jolokia-ail-noir-cajohns.jpg",
        ]);
    }
}
