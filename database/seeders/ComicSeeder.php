<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_comics = config('comic');

        foreach($array_comics as $item){

            $comic = new Comic();

            $artists = implode(', ', $item['artists']);
            $writers = implode(', ', $item['writers']);

            $comic->title = $item['title'];
            $comic->description = $item['description'];
            $comic->thumb = $item['thumb'];
            $comic->cover_image = $item['cover_image'];
            $comic->price = $item['price'];
            $comic->series = $item['series'];
            $comic->sale_date = $item['sale_date'];
            $comic->artists = $artists;
            $comic->writers = $writers;

            $comic->save();

        }
    }
}
