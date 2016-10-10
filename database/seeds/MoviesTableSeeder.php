<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::insert([
			[
				'title' => 'Deepwater Horizon',
				'description' => 'Deepwater Horizon: Based on the true events that occurred on an oil rig in the Gulf of Mexico on April 20, 2010, the story chronicles the courage of those who worked on the Deepwater Horizon and the extreme moments of bravery and survival in the face of what would become one of the biggest man-made disasters in world history.',
				'date_showing' => 'Oct 08, 2016',
				'run_time' => '1hr 47min',
				'director' => 'Peter Berg',
				'rate' => 'PG-13',
				'genre' => 'Drama | Thriller',
				'poster' => 'deepwater_horizon.jpg',
				'category_id' => 1,
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'title' => 'The Hollow',
				'description' => 'When a U.S. congressman\'s daughter, passing through a small town in Mississippi, dies in a mysterious triple homicide, a team of F.B.I. agents investigates. Brilliant but jaded lead agent Vaughn Killinger battles personal demons as his beautiful, tough-as-nails partner, Sarah Desoto, tries to hold him and the case together. They find a struggling and corrupt sheriff\'s department, run by a chief deputy who runs drugs for a shadowy, feared figure, John Dawson, who seems to be pulling all of the town\'s strings from his antebellum mansion on the outskirts of town.',
				'date_showing' => 'Oct 07, 2016',
				'run_time' => '2hrs 8min',
				'director' => 'Miles Doleac',
				'rate' => 'Not Rated',
				'genre' => 'Drama | Thriller | Suspense',
				'poster' => 'the_hollow.jpg',
				'category_id' => 1,
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'title' => 'Spirit of the Game',
				'description' => 'Spirit of the Game: In 1956, a small group of Mormon missionaries make worldwide history when they take on the task of helping the struggling Australian basketball team prepare for the Olympic Games. What unfolds is an electrifying story of sport, spirit, trials and faith and the unification of a nation.',
				'date_showing' => 'Oct 07, 2016',
				'run_time' => '1hr 50min',
				'director' => 'Darran Scott',
				'rate' => 'PG',
				'genre' => 'Drama | Comedy',
				'poster' => 'spirit_of_the_game.jpg',
				'category_id' => 1,
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'title' => 'Passage to Mars',
				'description' => 'Before man makes it to Mars, he must conquer the Arctic. Passage to Mars is the incredible true story of six men who embark on a treacherous, 2,000-mile journey across the forbidding tundra of the Northwest Passage - an alien voyage on planet Earth designed to prepare NASA astronauts for an eventual mission to Mars. But as an expedition that was supposed to take weeks stretches into a two-year odyssey, the crew must overcome seemingly insurmountable challenges and life-threatening conditions',
				'date_showing' => 'Oct 08, 2016',
				'run_time' => '1hr 34min',
				'director' => 'Jean-Christophe Jeauffre',
				'rate' => 'Not Rated',
				'genre' => 'Documentary | Sci-Fi | Action',
				'poster' => 'passage_to_mars.jpg',
				'category_id' => 1,
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			//comming soon
			[
				'title' => 'Max Steel',
				'description' => 'Sixteen year old Max McGrath has just moved to a new town - and is desperately trying to fit in - when he discovers his body can generate the universe\'s most powerful energy. Unbeknown to Max, a slightly rebellious and hilarious techno-organic extraterrestrial named Steel has been keeping an eye on him, hungry for his super-human energy. When they finally meet, they discover that together they form Max Steel, a superhero possessing powerful strength beyond anything in our world. These two unlikely friends soon find themselves hunted by sinister forces who want to control Max\'s powers, as well as an unstoppable enemy from another galaxy.',
				'date_showing' => 'Oct 14, 2016',
				'run_time' => '1hr 34min',
				'director' => 'Stewart Hendler',
				'rate' => 'PG-13',
				'genre' => 'Sci-Fi | Action',
				'poster' => 'max_steel.jpg',
				'category_id' => 2,
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'title' => 'Kevin Hart: What Now?',
				'description' => 'Kevin Hart: What Now?: Hart takes center stage in this groundbreaking, record-setting, sold-out performance of "What Now?" filmed outdoors in front of 50,000 people at Philadelphia\'s Lincoln Financial Field - marking the first time a comedian has ever performed to an at-capacity football stadium.',
				'date_showing' => 'Oct 14, 2016',
				'run_time' => '1hr 36min',
				'director' => 'Leslie Small',
				'rate' => 'R',
				'genre' => 'Comedy | Documentary',
				'poster' => 'kevin_hart_what_now.jpg',
				'category_id' => 2,
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
			[
				'title' => 'Priceless',
				'description' => 'Priceless: There was a time when James Stevens saw himself as a good man. But that seems like a different life - one that vanished somewhere between the day his wife died in his arms and when his young daughter was ripped from those same arms by the child services\' agency.Today, he finds himself with more regrets, more troubles, and more heartbreak than one person should ever face in a lifetime. And he just unknowingly signed up for more.',
				'date_showing' => 'Oct 14, 2016',
				'run_time' => '1hr 36min',
				'director' => 'Ben Smallbone',
				'rate' => 'PG-13',
				'genre' => 'Drama | Romance',
				'poster' => 'priceless.jpg',
				'category_id' => 2,
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			],
		]);
    }
}
