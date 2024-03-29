<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin               = new Role();
        $role_admin->name         = 'admin';
        $role_admin->description  = 'An Admin User';
        $role_admin->save();    
    }
}
