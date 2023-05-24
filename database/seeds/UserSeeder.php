<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [  'first_name' => 'user',
                'last_name' => 'one',
                'email' => 'user1@yopmail.com',
                'password' => Hash::make('123456789'),
                'user_type' => 'user',
                'email_verified_at' => date("Y-m-d h:i:s"),
                'created_at' => date("Y-m-d h:i:s")],
            [  'first_name' => 'user',
                'last_name' => 'two',
                'email' => 'user2@yopmail.com',
                'password' => Hash::make('123456789'),
                'user_type' => 'user',
                'email_verified_at' => date("Y-m-d h:i:s"),
                'created_at' => date("Y-m-d h:i:s")],
            [  'first_name' => 'user',
                'last_name' => 'three',
                'email' => 'user3@yopmail.com',
                'password' => Hash::make('123456789'),
                'user_type' => 'user',
                'email_verified_at' => date("Y-m-d h:i:s"),
                'created_at' => date("Y-m-d h:i:s")],
            [  'first_name' => 'user',
                'last_name' => 'four',
                'email' => 'user4@yopmail.com',
                'password' => Hash::make('123456789'),
                'user_type' => 'user',
                'email_verified_at' => date("Y-m-d h:i:s"),
                'created_at' => date("Y-m-d h:i:s")]

        ];
        DB::table('users')->insert($users);

    }
}
