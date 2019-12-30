<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRégionAndAdresseToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('phone')->nullable()->unsigned()->after('email');
            $table->string('région', 191)->nullable()->after('phone');
            $table->string('adresse', 191)->nullable()->after('région');
            $table->string('spécialité', 191)->nullable()->after('adresse');
            $table->string('disponibilité_week', 191)->nullable()->after('spécialité');
            $table->string('disponibilité_weekend', 191)->nullable()->after('disponibilité_week');
            $table->string('expérience', 191)->nullable()->after('disponibilité_weekend');
            $table->float('revenue')->nullable()->after('expérience');
            $table->float('solde')->nullable()->after('revenue');
            $table->string('image')->nullable()->after('solde');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['phone','région','adresse','spécialité','disponibilité_week','disponibilité_weekend','expérience','revenue','solde','image']);
    });
    }
}
