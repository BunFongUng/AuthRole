<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            "name" => "bunfong",
            "email" => "bun.fong2009@gmail.com",
            "password" => bcrypt("098436723")
        ]);

        $adminRole = \App\Role::where("name", "admin")->first();
        $user->attachRole($adminRole);
    }
}
