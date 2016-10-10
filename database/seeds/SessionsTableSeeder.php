<?php

use Illuminate\Database\Seeder;
use App\Session;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	Session::insert([
     		[
				'slot' => '9:00 - 10:00',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'slot' => '10:00 - 11:00',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'slot' => '11:00 - 12:00',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'slot' => '12:00 - 14:00',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'slot' => '14:00 - 16:00',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'slot' => '16:00 - 18:00',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'slot' => '18:00 - 20:00',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'slot' => '20:00 - 12:00',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'slot' => '22:00 - 24:00',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			]
		]);
    }
}
