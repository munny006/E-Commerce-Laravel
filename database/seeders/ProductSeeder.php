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

    	
    	DB::table('products')->insert([
    		[
    			'name'=>'LG Mobile',
    			'price'=>'12000',
    			'cateory'=>'Mobile',
    			'description'=>'A Smart Phone with 4GB RAM and much more Feature',
    			'gallery'=>'101-1011997_new-model-lg-mobile.png'

    		],

    		[
    			'name'=>'Oppo Mobile',
    			'price'=>'32000',
    			'cateory'=>'Mobile',
    			'description'=>'A Smart Phone with 8GB RAM and much more Feature',
    			'gallery'=>'oppo-f17-pro-mobile-500x500.jpg'

    		],
    		[
    			'name'=>'Samsung Tv',
    			'price'=>'120000',
    			'cateory'=>'Tv',
    			'description'=>'A tV  much more Feature',
    			'gallery'=>'samsung-32-smart-hd-tv-32t4700-in-bd-at-bdshopcom.jpg'

    		],
    		[
    			'name'=>'SONY Laptop',
    			'price'=>'50000',
    			'cateory'=>'Computer',
    			'description'=>'A Computer much more Feature',
    			'gallery'=>'galaxy_book_2_silver_bdc97b863d4f493ab4236feba2d5b295_master.jpg'

    		],
    			[
    			'name'=>'SONY Fridgee',
    			'price'=>'48000',
    			'cateory'=>'Fridgee',
    			'description'=>'A Fridgee much more Feature',
    			'gallery'=>'danaaz-chest-freezer-dzcf-102pw-price-in-bd-600x600.jpg'

    		],




    	]);

    }
}
