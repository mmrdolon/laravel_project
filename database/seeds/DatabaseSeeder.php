<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		Model::unguard();

		$this->call('CandidatesTableSeeder');
		$this->call('VotersTableSeeder');
	}

}
