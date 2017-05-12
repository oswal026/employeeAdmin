<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeeTableSeeder extends Seeder {

	public function run(){

		$faker = Faker::create();

		for($i = 0; $i< 15; $i++){
			\DB::table('employee')->insert(
				['documentId' => 'V-'.$faker->randomNumber(8),
				'fullName' => $faker->firstName.' '.$faker->lastName,
				'address' => $faker->address,
				'email' => $faker->email,
				'phone' => $faker->randomNumber(4).'-'.$faker->randomNumber(7),
				'contractDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
				'birthDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
				'isFreelance' => rand(Y,N),
				'hourlyRate' => $faker->randomNumber(2)
				]
			);
		}

		
	}

}