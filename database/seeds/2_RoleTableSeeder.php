<?php

use App\Models\Role;
use App\Models\RoleUser;
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

        $role_super = new Role(['role_name' => 'Super Admin', 'description' => 'Super Admin']);
        $role_super->save();

        $role_admin = new Role(['role_name' => 'Admin', 'description' => 'Admin']);
        $role_admin->save();

        $role_member = new Role(['role_name' => 'Member', 'description' => 'Customer']);
        $role_member->save();
        
        $role_default = new RoleUser([
            'user_id' => 1,
            'role_id' => 1,
        ]);
        $role_default->save();

    }
}
