<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class NoticesTableSeeder extends Seeder {

	public function run()
	{
        Notice::truncate();

		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			Notice::create([
                'title' => $faker->sentence(6),
                'body'  => $faker->realText(200, 2)
			]);
		}
	}

}