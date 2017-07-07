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
        $user = new \App\User();
        $user->name = "Wattana Sittinoy";
        $user->user_type_id = 1;
        $user->username = "Admin";
        $user->email = "wattana@gmail.com";
        $user->password = bcrypt("1234");
        $user->save();

    }
}
