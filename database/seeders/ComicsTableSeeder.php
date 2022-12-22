<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsFromConfig = config('comics');
        foreach ($comicsFromConfig as  $comicConfig) {
            $newComic = new Comic();
            // aggingere il fill se e solo se i nomi delle colonne della tabella corrispondono a alle chiavi nominative del file 
            // bisogna però aggiungere un file fillable nel Model Comic 
            // $newComic->fill($comicConfig);

            $newComic->title = $comicConfig['title'];
            $newComic->description = $comicConfig['description'];
            $newComic->thumb = $comicConfig['thumb'];
            $newComic->price = $comicConfig['price'];
            $newComic->series = $comicConfig['series'];
            $newComic->sale_date = $comicConfig['sale_date'];
            $newComic->type = $comicConfig['type'];
            $newComic->sale_date = $comicConfig['sale_date'];
            $newComic->save();
        }
    }
}
