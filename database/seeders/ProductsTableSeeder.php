<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            [
                'name' => 'โอวัลตินนนน',
                'cost' => 20,
                'price' => 50,
                'qty' => 5,
                'image_path' => '',
                'image_url' => '',
                'product_type_id' => 1,
            ],
            [
                'name' => 'ไมโลลลลล',
                'cost' => 20,
                'price' => 50,
                'qty' => 5,
                'image_path' => '',
                'image_url' => '',
                'product_type_id' => 1,
            ],
        ];


        DB::table('products')->insert($data);
    }
}