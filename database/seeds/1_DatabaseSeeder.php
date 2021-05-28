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
        factory(User::class)->create([
            'name' => 'Super admin',
            'email' => 'admin@gmail.com',
            'password' => '123123',
        ]);
    }
}
