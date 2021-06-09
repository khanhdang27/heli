<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
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
    }
}
