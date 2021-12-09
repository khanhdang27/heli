<?php

use App\Models\Certificate;
use App\Models\Course;
use App\Models\Examination;
use App\Models\Membership;
use App\Models\Setting;
use App\Models\Subject;
use App\Models\Tutor;
use App\Models\Quiz;
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
        Membership::create(['name' => 'base', 'base_point' => 0]);
        $super_admin = User::create([
            'name' => 'Super admin',
            'email' => 'admin@gmail.com',
            'password' => '123123',
        ]);

        $this->call(RoleSeeder::class);

        $super_admin->assignRole(['super-admin']);
        $super_admin->save();

        $certificate = Certificate::create([
            'certificate_code' => 'IGCSE',
            'certificate_name' => 'International General Certificate of Secondary Education',
        ]);
        $certificate = Certificate::create([
            'certificate_code' => 'UKISET',
            'certificate_name' => 'UKISET',
        ]);
        $certificate = Certificate::create([
            'certificate_code' => 'IELTS',
            'certificate_name' => 'International English Language Testing System',
        ]);
        $certificate = Certificate::create([
            'certificate_code' => 'IAL',
            'certificate_name' => 'International Advanced Level',
        ]);
        $setting = Setting::create([
            'key' => 'token_exchange_rate',
            'value' => '2',
        ]);
        $setting = Setting::create([
            'key' => 'phone_footer',
            'value' => '+852 2602 1668',
        ]);
        $setting = Setting::create([
            'key' => 'whatapp_footer',
            'value' => '+852 2602 1668',
        ]);
        $setting = Setting::create([
            'key' => 'mail_admin_footer',
            'value' => 'adminssions@helios-edu.com',
        ]);
        $setting = Setting::create([
            'key' => 'address_ho_footer',
            'value' => 'Helios Education (Head Office) Room 902, 9th Floor, Yongsheng Centre, 9 Star Street, Causeway Bay',
        ]);
        $setting = Setting::create([
            'key' => 'address_cbs_footer',
            'value' => 'Helios Education (Causeway Bay Store) To Make An Appointment Room 2202, Causeway Bay Plaza 1, 489 Hennessy Road, Causeway Bay',
        ]);

        // create a course for assessment
        $subject = Subject::create([
            'certificate_id' => 1,
            'subject_color_background' => '#fff',
            'subject_color_text' => '#fff',
            'status' => 0
        ]);

        $tutor = Tutor::create([
            "user_id" => $super_admin->id,
            "full_name" => 'Administrator',
        ]);

        $course = Course::create([
            'subject_id' => $subject->id,
            'tutor_id' => $tutor->id,
            'type' => 1,
            'course_overview' => "",
            'level' => 5,
            'type_part' => 1,
            'course_price' => 0
        ]);

        $exams = Examination::create([
            'name' => '',
            'index' => 0,
            'type' => 1,
            'course_id' => $course->id,
        ]);

        $quiz = Quiz::create([
            'exam_id' => $exams->id,
            'set' => 1
        ]);
    }
}
