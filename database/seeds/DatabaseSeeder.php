<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\Illuminate\Database\Eloquent\Model::unguard();
		$this->call(CategoriesTableSeeder::class);
		$this->call(SessionsTableSeeder::class);
		$this->call(MoviesTableSeeder::class);
		$this->call(CinemasTableSeeder::class);
		$this->call(CinemasMoviesPivotTableSeeder::class);
		$this->call(MoviesSessionsPivotTableSeeder::class);
    }
}
