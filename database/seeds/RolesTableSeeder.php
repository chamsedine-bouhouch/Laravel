<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=[
        	[
            	'name'=>'superAdmin'
            ],
            [
            	'name'=>'admin'
            ],
            [
            	'name'=>'technicien'
            ],
            [
            	'name'=>'user'
            ],
        ];
        foreach($roles as $role){
    		DB::table('roles')->insert($role);
    		
    	}
    }
}
