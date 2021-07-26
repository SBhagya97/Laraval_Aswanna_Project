<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //hb
        DB::table('products')->insert([
            [
                'name'=>'Pumpkin',
                "price"=>"300",
                "description"=>"Fresh from the garden",
                "category"=>"Vegitable",
                "gallery"=>"https://www.pngfind.com/pngs/m/39-393541_pumpkin-pumpkin-green-png-transparent-png.png"
            ],
            [
                'name'=>'Grapes',
                "price"=>"400",
                "description"=>"from jaffna",
                "category"=>"Fruits",
                "gallery"=>"https://www.nicepng.com/png/full/8-82812_grape-red-grapes-hd.png"
            ],
            [
                'name'=>'Keeri Samba',
                "price"=>"500",
                "description"=>"best of Araliya sahal",
                "category"=>"Rice",
                "gallery"=>"https://www.seekpng.com/png/full/907-9070119_kamal-swarna-masoori-rice-raw-jasmine-rice.png"
            ],
            [
                'name'=>'Capsicum',
                "price"=>"200",
                "description"=>"imported from Malaysia",
                "category"=>"Vegitables",
                "gallery"=>"https://p.kindpng.com/picc/s/715-7150018_peppers-dry-red-peppers-seeds-hd-png-download.png"
             ]
        ]);
    }
}
