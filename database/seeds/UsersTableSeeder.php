<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
                'name' => 'YiKe Admin',
                'username' => 'Admin',
                'email' => 'admin@yike.io',
                'password' => bcrypt('yikeio'),
                'is_admin' => true,
            ]);
    }
}
