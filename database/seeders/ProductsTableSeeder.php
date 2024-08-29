<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'fish',
            'cost' => 5000,
            'price' => 50,
            'qty' => 50,
            'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fstock.adobe.com%2Fsearch%3Fk%3Dfish%2Bclipart&psig=AOvVaw0SzTXoJ9p33puV5vjTbAKY&ust=1725012504603000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCPjLgNr6mYgDFQAAAAAdAAAAABAE',
            'product_type_id' => 1],

            ['name' => 'cat',
            'cost' => 5000,
            'price' => 50,
            'qty' => 50,
            'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.nationalgeographic.com%2Fanimals%2Fmammals%2Ffacts%2Fdomestic-cat&psig=AOvVaw0COfuosePA5YouYjVaWfGh&ust=1725012585202000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCJj62uT6mYgDFQAAAAAdAAAAABAE',
            'product_type_id' => 2]
            ];
            DB::table('Products')->insert($data);
    }
}
