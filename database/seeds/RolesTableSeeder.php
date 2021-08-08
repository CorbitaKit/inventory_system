<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['encoder','accounting','assistant parish priest','parish priest'];


        for($i = 0; $i  < count($roles); $i++){

        	Role::create([
        		"name" => $roles[$i],
        		"approvement_level" => $i+1
        	]);
        }
    }
}
