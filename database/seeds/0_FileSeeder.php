<?php

use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\File::class)->create([
            'source' => '',
            'uploaded_by' => 1,
            'status'=> 0
        ]);
    }
}
