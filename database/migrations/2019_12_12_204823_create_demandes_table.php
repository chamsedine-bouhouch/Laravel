<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDemandesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('demandes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('categorie', 191);
			$table->string('type', 191);
			$table->string('adresse', 191);
			$table->string('horaire', 191);
			$table->string('description', 191);
			$table->string('date_intervention', 191);
			$table->string('state', 191);
			$table->integer('particulier_id')->unsigned()->index('demandes_particulier_id_foreign');
			$table->integer('technicien_id')->unsigned()->index('demandes_technicien_id_foreign');
			$table->integer('admin_id')->unsigned()->index('demandes_admin_id_foreign');
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
		Schema::drop('demandes');
	}

}
