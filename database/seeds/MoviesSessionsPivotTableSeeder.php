<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesSessionsPivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$movie1 = Movie::find(1);
		$movie1->sessions()->sync([1, 2, 3, 4]);

		$movie2 = Movie::find(2);
		$movie2->sessions()->sync([2, 3, 4, 5]);

		$movie3 = Movie::find(3);
		$movie3->sessions()->sync([3, 4, 5, 6]);

		$movie4 = Movie::find(4);
		$movie4->sessions()->sync([2, 4, 6, 7]);
    }
}
