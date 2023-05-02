<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('publishers')->insert([
            'name' => 'Gramedia',
            'address' => 'Jalan ahmad Yani Kota Kupang',
            'phone' => '081236338640',
            'email' => 'gramedia@gmail.com',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSks9zDz0yNKeP1XFNva-MUhjFv7J7qAWij-3WkPTHl&s'



        ]);
        DB::table('publishers')->insert([
            'name' => 'Toko Buku Suci',
            'address' => 'Jalan Jendral A Yani Kota Kupang',
            'phone' => '081216338640',
            'email' => 'tokobukusuci@gmail.com',
            'image' => 'https://fridemsi.files.wordpress.com/2012/11/fredem03251.jpg?w=600&h=450'



        ]);

        DB::table('publishers')->insert([
            'name' => 'Toko Buku Karunia Jaya',
            'address' => 'Jalan Pasir Panjang Kota Kupang',
            'phone' => '08111240554',
            'email' => 'bukukarunia@gmail.com',
            'image' => 'https://www.parokimbk.or.id/images2/small/2016110702495870370.jpg'



        ]);

    }
}
