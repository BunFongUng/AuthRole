<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                "name" => "admin",
                "display_name" => "administration",
                "description" => "System Administration"
            ],
            [
                "name" => "user",
                "display_name" => "normal user",
                "description" => "Normal user only access for post module"
            ]
        ];

        foreach($roles as $role){
            \App\Role::create($role);
        }
    }
}
