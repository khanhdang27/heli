<?php

use App\Models\Certificate;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Tutor;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
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

        $tutor = User::create([
            'name' => 'Tutor Demo',
            'email' => 'tutor@gmail.com',
            'password' => '123123',
        ]);
        $tutor->assignRole(['tutor']);
        $tutor->save();

        $tutor_info = Tutor::create([
            'user_id'=> 2,
            'full_name' => 'Tutor Demo',
            'day_of_birth' => null,
            'phone_no'=> null
        ]);

        $certificate = Certificate::create([
            'certificate_code'=> "intro",
            'certificate_name' => 'introduce_course'
        ]);

        $subject = Subject::create([
            'certificate_id' => 1,
            'subject_name:en' => 'introduce_course',
            'subject_name:cn' => '介绍',
            'subject_name:sc' => '介绍',
            'subject_color_background' => '#fff',
            'subject_color_text' => '#fff',
        ]);

        $course = Course::create([
            'course_name:en' => 'introduce course',
            'course_name:cn' => '介绍课程',
            'course_name:sc' => '介绍课程',
            'subject_id' => 1,
            'tutor_id' => 1,
            'type' => 2,
            'course_description:en' => 'introduce course',
            'course_description:cn' => '介绍课程',
            'course_description:sc' => '介绍课程',
            'course_overview' => 'introduce course',
            'course_price' => 0,
        ]);

        $certificate = Certificate::create([
            'certificate_code'=> "IGCSE",
            'certificate_name' => 'International General Certificate of Secondary Education'
        ]);
        $certificate = Certificate::create([
            'certificate_code'=> "UKISET",
            'certificate_name' => 'UKISET'
        ]);
        $certificate = Certificate::create([
            'certificate_code'=> "IELTS",
            'certificate_name' => 'International English Language Testing System'
        ]);
        $certificate = Certificate::create([
            'certificate_code'=> "IAL",
            'certificate_name' => 'International Advanced Level'
        ]);
    }
}
