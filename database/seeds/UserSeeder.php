<?php

use App\User;
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
        User::updateOrCreate(['email' => 'superadmin@eshop.com'], [
        	'first_name' => 'Admin',
        	'last_name' => 'Admin',
        	'is_superadmin' => 1,
			'is_active' => 1,
			'is_verified' => 1,
        	'password' => bcrypt('123456')
        ]);
    }
}
