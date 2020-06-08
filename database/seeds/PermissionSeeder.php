<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::updateOrCreate(['identifier' => 'users'], ['name' => 'User Management']);
		Permission::updateOrCreate(['identifier' => 'categories'], ['name' => 'Categories']);
		Permission::updateOrCreate(['identifier' => 'products'], ['name' => 'Products']);
		Permission::updateOrCreate(['identifier' => 'clients'], ['name' => 'Clients']);
		Permission::updateOrCreate(['identifier' => 'orders'], ['name' => 'Orders']);
    }
}
