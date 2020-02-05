<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Category;

class CategoryTableSeeder extends Seeder {

	/**
	 * Run the Categories table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'name' => 'Amor', 
				'slug' => 'Amor', 
				'description' => 'Amor', 
				'active' => 1
			],
			[
				'name' => 'Cumpleaños', 
				'slug' => 'Cumpleaños', 
				'description' => 'Cumpleaños', 
				'active' => 1
			],
			[
				'name' => 'Para él ', 
				'slug' => 'Para él ', 
				'description' => 'Para él ', 
				'active' => 1
			],
			[
				'name' => 'Para ella', 
				'slug' => 'Para ella', 
				'description' => 'Para ella', 
				'active' => 1
			],
			[
				'name' => 'Felicitaciones', 
				'slug' => 'Felicitaciones', 
				'description' => 'Felicitaciones', 
				'active' => 1
			]
		);

		Category::insert($data);

	}
}