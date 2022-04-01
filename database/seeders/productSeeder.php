<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Redmi',
                'price'=>'8000',
                'description'=>'Smartphone with 8gb ram and 12px rear plus 8px front camera',
                'catagory'=>'mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/61NoYt2pvpS._SX679_.jpg'
            ],
            [
                'name'=>'Realme',
                'price'=>'500',
                'description'=>'Smartphone with 4gb ram and 8px rear plus 8px front camera',
                'catagory'=>'mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/61NoYt2pvpS._SX679_.jpg'
            ],
            [
                'name'=>'Intel',
                'price'=>'10000',
                'description'=>'core i7 16gb processor',
                'catagory'=>'prosessor',
                'gallery'=>'https://m.media-amazon.com/images/I/61NoYt2pvpS._SX679_.jpg'
            ],
            [
                'name'=>'vivo',
                'price'=>'12000',
                'description'=>'Smartphone with 12gb ram and 8px rear plus 8px front camera',
                'catagory'=>'mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/61NoYt2pvpS._SX679_.jpg'
            ],
            [
                'name'=>'huwai',
                'price'=>'7500',
                'description'=>'Smartphone with 4gb ram and 48px rear plus 8px front camera',
                'catagory'=>'mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/61NoYt2pvpS._SX679_.jpg'
            ]
        ]);
    }
}
