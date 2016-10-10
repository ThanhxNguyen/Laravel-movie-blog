<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
//use DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \DB::table('categories')->delete();
		\App\Category::create(array(
			'name' => 'Now Showing'
		));
		\App\Category::create(array(
			'name' => 'Comming Soon'
		));
    }
}
