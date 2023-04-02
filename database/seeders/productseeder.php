<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        DB::table('products')->insert(
            
            [
                'name'=> 'Whirlpool',
                'price'=> '42000',
                'description'=>'Super Cooling Fridge at low cost',
                'gallery'=>'https://tiimg.tistatic.com/fp/1/007/894/maroon-metal-direct-cool-eletrical-double-door-whirlpool-refrigerator--513.jpg',
                'catagory'=>'Fridge',
    
            ]
         );
        
    }
}
