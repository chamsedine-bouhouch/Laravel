<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemoignagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('temoignages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nom', 191);
			$table->string('fonction', 191);
			$table->string('description', 191);
			$table->string('note', 191);
			$table->integer('admin_id')->unsigned()->index('temoignages_admin_id_foreign');
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
		Schema::drop('temoignages');
	}

}
