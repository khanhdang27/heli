<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'banner-list',
            'banner-create',
            'banner-edit',
            'banner-delete',

            'tutor-list',
            'tutor-create',
            'tutor-edit',
            'tutor-delete',

            'moderator-list',
            'moderator-create',
            'moderator-edit',
            'moderator-delete',

            'student-list',
            'student-create',
            'student-edit',
            'student-delete',

            'news-list',
            'news-create',
            'news-edit',
            'news-delete',

            'blog-list',
            'blog-create',
            'blog-edit',
            'blog-delete',

            'forum-list',
            'forum-create',
            'forum-edit',
            'forum-delete',

            'document-list',
            'document-create',
            'document-edit',
            'document-delete',

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

            'study_session-list',
            'study_session-create',
            'study_session-edit',
            'study_session-delete',

            'subscribe-list',
            'subscribe-create',
            'subscribe-edit',
            'subscribe-delete',
            
            'examination-list',
            'examination-create',
            'examination-edit',
            'examination-delete',
            
            'membership-list',
            'membership-create',
            'membership-edit',
            'membership-delete',
            
            'price-list',
            'price-create',
            'price-edit',
            'price-delete',
            
            'discount-list',
            'discount-create',
            'discount-edit',
            'discount-delete',
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
