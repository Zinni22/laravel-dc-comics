<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// MODEL
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
        $comics = [
            [
                "title" => "Action Comics #1000: The Deluxe Edition",
                "series" => "Action Comics",
                "sale_date" => "2018-10-02",
                "type" => "comic book"
            ],
            [
                "title" => "American Vampire 1976 #1",
                "series" => "American Vampire 1976",
                "sale_date" => "2020-10-06",
                "type" => "comic book"
            ],
            [
                "title" => "Aquaman Vol. 4: Underworld",
                "series" => "Aquaman",
                "sale_date" => "2018-01-24",
                "type" => "graphic novel"
            ],
            [
                "title" => "Batgirl #1",
                "series" => "Batgirl",
                "sale_date" => "2016-07-27",
                "type" => "comic book"
            ],
            [
                "title" => "Batman #56",
                "series" => "Batman",
                "sale_date" => "2018-10-03",
                "type" => "comic book"
            ],
            [
                "title" => "Batman Beyond #1",
                "series" => "Batman Beyond",
                "sale_date" => "2016-10-26",
                "type" => "comic book"
            ],
            [
                "title" => "Batman/Superman #1",
                "series" => "Batman/Superman",
                "sale_date" => "2019-08-28",
                "type" => "comic book"
            ],
            [
                "title" => "Batman/Superman Annual #1",
                "series" => "Batman/Superman Annual",
                "sale_date" => "2020-09-29",
                "type" => "comic book"
            ],
            [
                "title" => "Batman: The Joker War Zone #1",
                "series" => "Batman: The Joker War Zone",
                "sale_date" => "2020-09-29",
                "type" => "comic book"
            ],
            [
                "title" => "Batman: Three Jokers #1",
                "series" => "Batman: Three Jokers",
                "sale_date" => "2020-08-25",
                "type" => "comic book"
            ],
            [
                "title" => "Batman: White Knight Presents: Harley Quinn #1",
                "series" => "Batman: White Knight Presents: Harley Quinn",
                "sale_date" => "2020-10-20",
                "type" => "comic book"
            ],
            [
                "title" => "Catwoman Vol. 1: Copycats",
                "series" => "Catwoman",
                "sale_date" => "2019-04-10",
                "type" => "graphic novel"
            ],
        ];

        foreach($comics as $comic){
            $newComic = new Comic;
            $newComic->title = $comic['title'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $newComic->save();

        };

        dd($comics);
    }
}
