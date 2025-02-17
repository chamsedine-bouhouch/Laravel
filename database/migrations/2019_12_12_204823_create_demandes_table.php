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
			$table->string('catégorie', 191);
			$table->string('type', 191);
			$table->string('service', 191);
			$table->string('adresse', 191);
			$table->string('région', 191);
			$table->string('horaire', 191);
            $table->date('date_intervention', 191);			
            $table->string('description', 191);
			$table->string('state', 191)->nullable();

			// user contact
			$table->string('name', 191);
			$table->string('phone', 191);
			$table->string('email', 191)->nullable();
			// 
			
			// $table->integer('particulier_id')->unsigned()->index('demandes_particulier_id_foreign');
			// $table->integer('technicien_id')->unsigned()->index('demandes_technicien_id_foreign');
			// $table->integer('admin_id')->unsigned()->index('demandes_admin_id_foreign');
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
