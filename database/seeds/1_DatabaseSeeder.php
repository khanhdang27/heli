<?php

use App\Models\User;
use App\Models\File;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = User::create([
            'name' => 'Super admin',
            'email' => 'admin@gmail.com',
            'password' => '123123',
        ]);

        $super_admin->assignRole(['super-admin']);
        $super_admin->save();
    }
}
