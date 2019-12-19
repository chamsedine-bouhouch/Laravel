<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTechniciensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('techniciens', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('specialite', 191);
			$table->integer('experience');
			$table->string('region', 191);
			$table->string('poste', 191);
			$table->string('disponibilite', 191);
			$table->float('revenue');
			$table->string('age', 191);
			$table->integer('usr_id')->unsigned()->index('techniciens_usr_id_foreign');
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
		Schema::drop('techniciens');
	}

}
