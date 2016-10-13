<?php

use Illuminate\Database\Seeder;
use App\Cinema;

class CinemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cinema::insert([
        	[
        		'name' => 'Melbourne Central Cinema',
				'description' => 'Cinema chain offering blockbusters and indie films, plus kids\' programs and live music screenings.',
				'address' => 'Melbourne Central Shopping Centre, 211 LaTrobe Street, Melbourne Victoria 3000',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'name' => 'Rooftop Cinema',
				'description' => 'Seasonal screenings of films old and new, on a hip rooftop with deckchairs, cocktails and burgers.',
				'address' => '252 Swanston St, Melbourne VIC 3000',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'name' => '4D Dynamic Cinema',
				'description' => 'Cinema with interactive sense-based effects and moving seats, showing exclusive short films.',
				'address' => '126 Russell St, Melbourne VIC 3000',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'name' => 'Carlton Cinema',
				'description' => 'Long-running arthouse movie theatre with in-cinema dining and a stylish terrace cocktail bar.',
				'address' => '380 Lygon St, Carlton VIC 3053',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			]
		]);
    }
}
