<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titre', 191);
			$table->string('description', 191);
			$table->string('region', 191);
			$table->string('date_realisation', 191);
			$table->string('image', 191);
			$table->string('note', 191);
			$table->integer('admin_id')->unsigned()->index('projets_admin_id_foreign');
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
		Schema::drop('projets');
	}

}
