<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticuliersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('particuliers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('nb_intervention');
			$table->integer('user_id')->unsigned()->index('particuliers_user_id_foreign');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('particuliers');
	}

}
