<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
            "publisher_id" => mt_rand(1,3),
            "title" => "Futo Tantei",
            "author" => "Masasi Sikumuro",
            "year" => "2011",
            "synopsis" => "Lorem Ipsum",
            "image" =>"https://i.redd.it/k5okm1znvxo61.jpg"
        ]);
        DB::table('books')->insert([
            "publisher_id" => mt_rand(1,3),
            "title" => "Indian Historical",
            "author" =>"Krisna Rendi",
            "year" => "2017",
            "synopsis" => "Lorem Ipsum",
            "image" =>"https://images-na.ssl-images-amazon.com/images/I/91mq3UEpjGL.jpg"
        ]);
        DB::table('books')->insert([
            "publisher_id" => mt_rand(1,3),
            "title" => "Me Before You",
            "author" => "Scotnails",
            "year" => "2002",
            "synopsis" => "Lorem Ipsum",
            "image" =>"https://imgix.bustle.com/2017/5/1/40750162-a86c-4708-ab0c-d99415108fc5.jpg?w=646&fit=max&auto=format&q=70"
        ]);
        DB::table('books')->insert([
            "publisher_id" => mt_rand(1,3),
            "title" => "The King of Drugs",
            "author" => "Stuard Stail",
            "year" => "2001",
            "synopsis" => "",
            "image" =>"https://d1csarkz8obe9u.cloudfront.net/posterpreviews/action-thriller-book-cover-design-template-3675ae3e3ac7ee095fc793ab61b812cc_screen.jpg?ts=1637008457"
        ]);
        DB::table('books')->insert([
            "publisher_id" => mt_rand(1,3),
            "title" => "A Rose For Emilly",
            "author" => "Wiliam Faulkner",
            "year" => "2016",
            "synopsis" => "Lorem Ipsum",
            "image" =>"https://onlinereadfreenovel.com/i2/william-faulkner/a_rose_for_emily_and_other_stories.jpg"
        ]);

        DB::table('books')->insert([
            "publisher_id" => mt_rand(1,3),
            "title" => "Battle Through The Heaven",
            "author" => "Suanji",
            "year" => "2020",
            "synopsis" => "Lorem Ipsum",
            "image" =>"https://dynastybook.files.wordpress.com/2019/01/li.el4ob845.png?w=200"
        ]);

    }
}
