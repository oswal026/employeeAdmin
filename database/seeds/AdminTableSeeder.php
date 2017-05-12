<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AdminTableSeeder extends Seeder {

	public function run(){

		$faker = Faker::create();

		for($i = 0; $i< 15; $i++){
			\DB::table('admin')->insert(
				['fullName' => $faker->firstName.' '.$faker->lastName,
				'user' => $faker->userName,
				'password' =>  \Hash::make('123456')
				]
			);
		}

		
	}

}