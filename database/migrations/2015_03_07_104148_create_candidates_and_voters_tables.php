<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesAndVotersTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->default('');
			$table->text('symbol')->default('');
			$table->timestamps();
		});

		Schema::create('tasks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->default('');
			$table->integer('project_id')->unsigned()->default(0);
			$table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

			$table->text('cast')->default('');


			$table->timestamps();		});	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('voters');		Schema::drop('candidates');
	}

}