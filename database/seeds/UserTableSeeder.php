<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin_role = Role::where("name","parish priest")->first();


        User::create([
        	"name" => "Admin",
        	"email" => "admin@sample.com",
        	"password" => Hash::make("admin123"),
            "role_id" => $admin_role->id
        ]);
    }
}
