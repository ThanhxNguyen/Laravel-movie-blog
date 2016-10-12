<?php

use Illuminate\Database\Seeder;
use App\TicketType;

class TicketTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TicketType::insert([
        	[
        		'type' => 'Adult',
				'price' => 15.00,
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'type' => 'Children',
				'price' => 12.00,
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'type' => 'Concession',
				'price' => 10.00,
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
		]);
    }
}
