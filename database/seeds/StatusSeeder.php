<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Status::create([
			'name' => 'Order Place',
			'percent' => 10,
		]);
		Status::create([
			'name' => 'Prep',
			'percent' => 30,
		]);
		Status::create([
			'name' => 'Bake',
			'percent' => 50,
		]);
		Status::create([
			'name' => 'Quality Check',
			'percent' => 70,
		]);
		Status::create([
			'name' => 'Out for Delivery',
			'percent' => 100,
		]);
	}
}
