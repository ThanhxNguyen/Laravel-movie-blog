<?php

use Illuminate\Database\Seeder;
use App\Movie;

class CinemasMoviesPivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie1 = Movie::find(1);
		$movie1->cinemas()->sync([1, 2]);

		$movie2 = Movie::find(2);
		$movie2->cinemas()->sync([2, 3]);

		$movie3 = Movie::find(3);
		$movie3->cinemas()->sync([3, 4]);

		$movie4 = Movie::find(4);
		$movie4->cinemas()->sync([2, 4]);

		$movie5 = Movie::find(5);
		$movie5->cinemas()->sync([3, 4]);

		$movie6 = Movie::find(6);
		$movie6->cinemas()->sync([1, 4]);
    }
}
