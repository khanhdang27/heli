<?php

use App\Models\Certificate;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Tutor;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
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
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'tutor-list',
            'tutor-create',
            'tutor-edit',
            'tutor-delete',

            'student-list',
            'student-create',
            'student-edit',
            'student-delete',
            'student-bought',

            'news-list',
            'news-create',
            'news-edit',
            'news-delete',

            'blog-list',
            'blog-create',
            'blog-edit',
            'blog-delete',

            'document-list',
            'document-create',
            'document-edit',
            'document-delete',

            'video-list',
            'video-create',
            'video-edit',
            'video-delete',

            'course-list',
            'course-create',
            'course-edit',
            'course-delete',

            'subject-list',
            'subject-create',
            'subject-edit',
            'subject-delete',

            'certificate-list',
            'certificate-create',
            'certificate-edit',
            'certificate-delete',

            'forum_post-list',
            'forum_post-create',
            'forum_post-edit',
            'forum_post-delete',
            'forum_post-pin',
            'forum_post-block',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $roles = [
            'moderator',
            'tutor',
            'student'
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        $superRole = Role::create(['name' => 'super-admin']);
        $superRole->givePermissionTo(Permission::all());


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
