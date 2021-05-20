<?php

use App\Models\Role;
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
        $role_super = new Role(['name' => 'Super Admin', 'description' => 'Super Admin']);
        $role_super->save();

        $role_admin = new Role(['name' => 'Admin', 'description' => 'Admin']);
        $role_admin->save();

        $role_member = new Role(['name' => 'Member', 'description' => 'Customer']);
        $role_member->save();

        factory(\App\Models\RoleUser::class)->create([
            'user_id' => 1,
            'role_id' => 1
        ]);


    }
}
