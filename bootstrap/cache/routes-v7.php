<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stripe/webhook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashier.webhook',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iE90Yo22yjVfmtjc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'file.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wJMvEexpPWkd28Zw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wd3dlRnLTmZnJJGk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QIsj4IH9B8xeq0DC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.backpack.auth.password.reset',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::gchE313oTzGqT36z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.backpack.auth.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/certificate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.certificate.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.certificate.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/certificate/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.certificate.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subject.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subject.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subject/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subject.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tutor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutor.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutor.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tutor/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutor.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/course/query' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.query',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/course/related' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.related',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/course' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/course/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/question/reading/answer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reading.answer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/question/assessment/writing/answer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.writing.assessment.answer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/question/assessment/listening/answer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listening.assessment.answer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/question/assessment/speaking/answer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.speaking.assessment.answer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/passage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.passage.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/course-material' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course-material.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course-material.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/course-material/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course-material.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banner/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile-tutor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutorProfile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile-moderator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.moderatorProfile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile-admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.adminProfile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin-update-owner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.adminOwner',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tag' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tag/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forum' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forum.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forum.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forum/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forum.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.news.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.news.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/news/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.news.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/discount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discount.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discount.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/discount/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discount.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/price-tag' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.price-tag.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.price-tag.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/price-tag/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.price-tag.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/moderator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.moderator.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.moderator.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/moderator/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.moderator.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manager-moderator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-manager.moderator',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manager-student' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-manager.student',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manager-tutor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-manager.tutor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user-subscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-subscribe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user-subscribe/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-subscribe.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user-subscribe/subscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-subscribe.subscribe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user-subscribe/unsubscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-subscribe.unsubscribe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/study-session' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.study-session.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.study-session.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/study-session/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.study-session.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/wallet-manager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet-manager.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet-manager.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/wallet-manager/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet-manager.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/student-examination' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.student-examination.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.student-examination.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/student-examination/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.student-examination.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/audio-listen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.audio-listen.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.faq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.privacy-policy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/terms-conditions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.terms-conditions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.userLogin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.userLogout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.userUpdatePassword',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.backpack.auth.password.reset',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.backpack.auth.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/news/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.news.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.news',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/teams' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.teams',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/subject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.subject.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.subject.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/subject/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.subject.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/certificate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.certificate.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.certificate.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/certificate/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.certificate.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/course/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.course.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/course/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.course.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/blog-view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.blog-view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/blog/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.blog.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/show-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.show-blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/forumAnswer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.forumAnswers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/subscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.customerSubscribe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/payment/add-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.payment.add-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.payment.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.payment.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/payment/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.payment.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/order/addCard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.order.addCard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/order/updateCard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.order.updateCard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.order.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.order.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/order/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.order.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/payment-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.payment-history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/add-visa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.add-visa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/store-card' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.store-card',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.post.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.post.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/post/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.post.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/comment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.comment.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.comment.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/comment/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.comment.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/user-like' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user-like.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.user-like.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/user-like/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user-like.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.profile.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.profile.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/profile/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.profile.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/uploadAvatar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.uploadAvatar',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.rating.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.rating.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/rating/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.rating.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/lecture/showLecture' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.lecture.showLecture',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/lecture' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.lecture.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.lecture.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/lecture/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.lecture.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/exam/handleSubmit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.exam.handleSubmitAnswer',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/token/skipPrice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.token.skipPrice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.token.skipPrice.pay',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/my/course' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.course',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/my/wishlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.wishlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/my/calendar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.calendar',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/my/wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/my/wallet/top-up' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.top-up',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/my/wallet/top-up/top-up-to' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.top-up-to',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/my/wallet/top-up/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.topUp-success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/my/wallet/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.wallet.listHistory',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/my/wallet/list-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.wallet.listPayment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/my/wallet/top-up/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.wallet.redirectSuccess',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/my/paywithpaypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.paywithpaypal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/site/my/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.paypal',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/s(?|tripe/payment/([^/]++)(*:108)|ite/(?|p(?|a(?|ssword/reset/([^/]++)(*:152)|yment/([^/]++)(?|(*:177)|/edit(*:190)|(*:198)))|ost/([^/]++)(?|(*:223)|/edit(*:236)|(*:244))|in\\-comment/([^/]++)/([^/]++)(*:282)|rofile/([^/]++)(?|(*:308)|/edit(*:321)|(*:329)))|l(?|oginby/([^/]++)(?|(*:361)|/callback(*:378))|ecture/(?|([^/]++)(?|(*:408)|/edit(*:421)|(*:429))|lectureRelated(*:452))|ive/([^/]++)(*:473))|news/([^/]++)(*:495)|s(?|ubject/([^/]++)(?|(*:525)|/edit(*:538)|(*:546))|how\\-(?|blog/tag/([^/]++)(*:580)|post/tag/([^/]++)(*:605)))|c(?|ertificate/([^/]++)(?|(*:641)|/edit(*:654)|(*:662))|o(?|urse/(?|lectures/([^/]++)(*:700)|([^/]++)(?|(*:719)|/e(?|dit(*:735)|xam/([^/]++)/quiz/([^/]++)(*:769))|(*:778))|related/([^/]++)(*:803))|mment/([^/]++)(?|(*:829)|/edit(*:842)|(*:850))))|document/([^/]++)(*:878)|blog/tag/([^/]++)(*:903)|view\\-blog/([^/]++)(*:930)|file/download/([^/]++)(*:960)|order/([^/]++)(?|(*:985)|/edit(*:998)|(*:1006))|user\\-like/([^/]++)(?|(*:1038)|/edit(*:1052)|(*:1061))|rating/([^/]++)(?|(*:1089)|/edit(*:1103)|(*:1112))|exam/(?|([^/]++)(*:1138)|viewed/([^/]++)(*:1162)|reading(?|Assessment/([^/]++)(*:1200)|Exercise/([^/]++)(*:1226)|Quiz/([^/]++)(*:1248))|writing(?|Assessment/([^/]++)(*:1287)|Exercise/([^/]++)(*:1313)|Quiz/([^/]++)(*:1335))|listen(?|Assessment/([^/]++)(*:1373)|Exercise/([^/]++)(*:1399)|Quiz/([^/]++)(*:1421))|speaking(?|Assessment/([^/]++)(*:1461)|Exercise/([^/]++)(*:1487)|Quiz/([^/]++)(*:1509)))|my/(?|c(?|alendar/([^/]++)(*:1546)|onfirm\\-payment/(?|([^/]++)/([^/]++)(*:1591)|payment\\-success/([^/]++)/([^/]++)(*:1634)))|wallet/(?|payment\\-history/([^/]++)(*:1680)|top\\-up\\-history/([^/]++)(*:1714))|payment/([^/]++)(*:1740)|success/([^/]++)(*:1765))))|/lang/([^/]++)(*:1791)|/file/([^/]++)(?|(*:1817)|/edit(*:1831)|(*:1840))|/a(?|udio/([^/]++)(*:1868)|dmin/(?|p(?|ass(?|word/reset/([^/]++)(*:1914)|age/([^/]++)(*:1935))|rice\\-tag/([^/]++)(?|(*:1966)|/edit(*:1980)|(*:1989)))|c(?|ertificate/([^/]++)(?|(*:2026)|/edit(*:2040)|(*:2049))|ourse(?|/(?|([^/]++)/(?|rooms(?|(*:2091)|/(?|create(*:2110)|([^/]++)(?|(*:2130)|/schedule(*:2148)))|(*:2159))|lecture(?|(*:2179)|/(?|indexing(*:2200)|create(*:2215)|([^/]++)(?|(*:2235)|/destroy(*:2252)))|(*:2263))|exam(?|ination(?|/(?|create(*:2300)|([^/]++)(?|/edit(*:2325)|(*:2334)))|(*:2345))|/([^/]++)/grade(?|(*:2373)|/(?|create(*:2392)|([^/]++)(?|(*:2412)))|(*:2423))))|related/([^/]++)(*:2451)|([^/]++)(?|(*:2471)|/edit(*:2485)|(*:2494)))|\\-material/([^/]++)(?|(*:2527)|/edit(*:2541)|(*:2550)))|hange\\-status/([^/]++)(*:2583))|s(?|ubject/([^/]++)(?|(*:2615)|/edit(*:2629)|(*:2638))|tud(?|y\\-session/([^/]++)(?|(*:2676)|/edit(*:2690)|(*:2699))|ent\\-examination/(?|student/([^/]++)/course/([^/]++)/exam/([^/]++)/quiz/([^/]++)(?|(*:2792))|comment/([^/]++)(*:2818)|([^/]++)(?|(*:2838)|/edit(*:2852)|(*:2861))))|etting/(?|([^/]++)(?|(*:2894)|/edit(*:2908)|(*:2917))|edit/([^/]++)(*:2940)|update/([^/]++)(*:2964)))|t(?|utor/([^/]++)(?|(*:2995)|/edit(*:3009)|(*:3018))|ag/([^/]++)(?|(*:3042)|/edit(*:3056)|(*:3065)))|qu(?|iz/([^/]++)/question/(?|reading(*:3112)|([^/]++)/reading(?|(*:3140))|assessment/writing(*:3168)|([^/]++)/assessment/writing(?|(*:3207))|quiz/writing(*:3229)|([^/]++)/quiz/writing(?|(*:3262))|assessment/listening(*:3292)|([^/]++)/assessment/listening(?|(*:3333))|assessment/speaking(*:3362)|([^/]++)/assessment/speaking(?|(*:3402))|exercises/speaking(*:3430)|([^/]++)/exercises/speaking(?|(*:3469))|quiz/speaking(*:3492)|([^/]++)/quiz/speaking(?|(*:3526)))|estion/(?|reading/answer/([^/]++)(?|(*:3573))|assessment/(?|writing/answer/([^/]++)(?|(*:3623))|listening/answer/([^/]++)(?|(*:3661))|speaking/answer/([^/]++)(?|(*:3698)))|([^/]++)/answer(?|(*:3727)|/(?|update(*:3746)|([^/]++)(*:3763)))))|b(?|anner/([^/]++)(?|(*:3797)|/edit(*:3811)|(*:3820))|log/([^/]++)(?|(*:3845)|/edit(*:3859)|(*:3868)))|user/([^/]++)(?|(*:3895)|/edit(*:3909)|(*:3918))|forum/(?|re(?|store/([^/]++)(*:3956)|view/([^/]++)(*:3978))|([^/]++)(?|(*:3999)|/edit(*:4013)|(*:4022)))|news/([^/]++)(?|(*:4049)|/edit(*:4063)|(*:4072))|roles/([^/]++)(?|(*:4099)|/edit(*:4113)|(*:4122))|a(?|pply\\-discount/([^/]++)(?|(*:4162))|udio\\-listen/([^/]++)(*:4193))|discount/([^/]++)(?|(*:4223)|/edit(*:4237)|(*:4246))|m(?|embership/([^/]++)(?|(*:4281)|/edit(*:4295)|(*:4304))|oderator/([^/]++)(?|(*:4334)|/edit(*:4348)|(*:4357))|anager\\-(?|moderator/(?|edit/([^/]++)(*:4404)|update/([^/]++)(*:4428))|student/(?|edit/([^/]++)(*:4462)|update/([^/]++)(*:4486)|token/(?|edit/([^/]++)(*:4517)|update/([^/]++)(*:4541))|depositHistory/([^/]++)(*:4574)|paymentHistory/([^/]++)(*:4606))|tutor/(?|edit/([^/]++)(*:4638)|update/([^/]++)(*:4662))))|wallet\\-manager/([^/]++)(?|(*:4701)|/edit(*:4715)|(*:4724))))|/password/reset/([^/]++)(*:4760))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashier.payment',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.backpack.auth.password.reset.token',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      177 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.payment.show',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.payment.edit',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.payment.update',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.payment.destroy',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      223 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.post.show',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      236 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.post.edit',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.post.update',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.post.destroy',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.pinComment',
          ),
          1 => 
          array (
            0 => 'post_id',
            1 => 'comment_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.profile.show',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      321 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.profile.edit',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.profile.update',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.profile.destroy',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.socialLogin',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      378 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.generated::37wFuZ1NFY0kB6Nc',
          ),
          1 => 
          array (
            0 => 'provide',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.lecture.show',
          ),
          1 => 
          array (
            0 => 'lecture',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      421 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.lecture.edit',
          ),
          1 => 
          array (
            0 => 'lecture',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.lecture.update',
          ),
          1 => 
          array (
            0 => 'lecture',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.lecture.destroy',
          ),
          1 => 
          array (
            0 => 'lecture',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.lecture.getLectureRelated',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      473 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.live_show',
          ),
          1 => 
          array (
            0 => 'room_live_course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.news-detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      525 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.subject.show',
          ),
          1 => 
          array (
            0 => 'subject',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.subject.edit',
          ),
          1 => 
          array (
            0 => 'subject',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      546 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.subject.update',
          ),
          1 => 
          array (
            0 => 'subject',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.subject.destroy',
          ),
          1 => 
          array (
            0 => 'subject',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      580 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.show-blog-tag',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      605 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.show-post-tag',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      641 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.certificate.show',
          ),
          1 => 
          array (
            0 => 'certificate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      654 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.certificate.edit',
          ),
          1 => 
          array (
            0 => 'certificate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      662 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.certificate.update',
          ),
          1 => 
          array (
            0 => 'certificate',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.certificate.destroy',
          ),
          1 => 
          array (
            0 => 'certificate',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      700 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.course.lectureList',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.course.show',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      735 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.course.edit',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      769 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.showExam',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'exam',
            2 => 'quiz',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      778 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.course.destroy',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      803 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.course.related.list',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      829 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.comment.show',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      842 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.comment.edit',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      850 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.comment.update',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.comment.destroy',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      878 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.document',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.blog.list.tag',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.view-blog',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      960 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.file.download',
          ),
          1 => 
          array (
            0 => 'file',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      985 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.order.show',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      998 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.order.edit',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1006 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.order.update',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.order.destroy',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1038 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user-like.show',
          ),
          1 => 
          array (
            0 => 'user_like',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1052 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user-like.edit',
          ),
          1 => 
          array (
            0 => 'user_like',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1061 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user-like.update',
          ),
          1 => 
          array (
            0 => 'user_like',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.user-like.destroy',
          ),
          1 => 
          array (
            0 => 'user_like',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1089 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.rating.show',
          ),
          1 => 
          array (
            0 => 'rating',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.rating.edit',
          ),
          1 => 
          array (
            0 => 'rating',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.rating.update',
          ),
          1 => 
          array (
            0 => 'rating',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'site.rating.destroy',
          ),
          1 => 
          array (
            0 => 'rating',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1138 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.exam.showLecture',
          ),
          1 => 
          array (
            0 => 'exams',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.exam.viewedExam',
          ),
          1 => 
          array (
            0 => 'studentExam',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.exam.getReadingAssessmentQuestionsClient',
          ),
          1 => 
          array (
            0 => 'exams',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.exam.getReadingExerciseQuestionsClient',
          ),
          1 => 
          array (
            0 => 'exams',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1248 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.exam.getReadingQuizQuestionsClient',
          ),
          1 => 
          array (
            0 => 'exams',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.exam.getWritingAssessmentQuestionsClient',
          ),
          1 => 
          array (
            0 => 'exams',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1313 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.exam.getWritingExerciseQuestionsClient',
          ),
          1 => 
          array (
            0 => 'exams',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1335 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.exam.getWritingQuizQuestionsClient',
          ),
          1 => 
          array (
            0 => 'exams',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.exam.getListeningAssessmentQuestionsClient',
          ),
          1 => 
          array (
            0 => 'exams',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1399 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.exam.getListeningExerciseQuestionsClient',
          ),
          1 => 
          array (
            0 => 'exams',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1421 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.exam.getListeningQuizQuestionsClient',
          ),
          1 => 
          array (
            0 => 'exams',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.exam.getSpeakingAssessmentQuestionsClient',
          ),
          1 => 
          array (
            0 => 'exams',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1487 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.exam.getSpeakingExerciseQuestionsClient',
          ),
          1 => 
          array (
            0 => 'exams',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1509 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.exam.getSpeakingQuizQuestionsClient',
          ),
          1 => 
          array (
            0 => 'exams',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1546 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.getMonth',
          ),
          1 => 
          array (
            0 => 'month',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.confirm',
          ),
          1 => 
          array (
            0 => 'product_id',
            1 => 'room',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.success',
          ),
          1 => 
          array (
            0 => 'product_id',
            1 => 'room',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.wallet.payment-history',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.top-up-history',
          ),
          1 => 
          array (
            0 => 'transaction',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1740 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.payment',
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1765 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'site.user.pay-success',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1791 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lang.switch',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1817 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.show',
          ),
          1 => 
          array (
            0 => 'file',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1831 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.edit',
          ),
          1 => 
          array (
            0 => 'file',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1840 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'file.update',
          ),
          1 => 
          array (
            0 => 'file',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'file.destroy',
          ),
          1 => 
          array (
            0 => 'file',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1868 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'audio',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1914 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.backpack.auth.password.reset.token',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1935 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.passage.update',
          ),
          1 => 
          array (
            0 => 'passage',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.price-tag.show',
          ),
          1 => 
          array (
            0 => 'price_tag',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.price-tag.edit',
          ),
          1 => 
          array (
            0 => 'price_tag',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1989 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.price-tag.update',
          ),
          1 => 
          array (
            0 => 'price_tag',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.price-tag.destroy',
          ),
          1 => 
          array (
            0 => 'price_tag',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2026 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.certificate.show',
          ),
          1 => 
          array (
            0 => 'certificate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2040 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.certificate.edit',
          ),
          1 => 
          array (
            0 => 'certificate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2049 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.certificate.update',
          ),
          1 => 
          array (
            0 => 'certificate',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.certificate.destroy',
          ),
          1 => 
          array (
            0 => 'certificate',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2091 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.room.list',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.room.create',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.room.edit',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'room',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.room.update',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'room',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.room.destroy',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'room',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.room.scheduler',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'room',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2159 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.room.store',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.lecture.list',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.lecture.indexing',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.lecture.create',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2235 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.lecture.edit',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'lecture',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.lecture.update',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'lecture',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.lecture.destroy',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'lecture',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.lecture.store',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2300 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.examination.create',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.examination.edit',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'exam',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.examination.update',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'exam',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.examination.destroy',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'exam',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.examination.store',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.grade.list',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'exam',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2392 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.grade.create',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'exam',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.grade.edit',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'exam',
            2 => 'grade',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.grade.update',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'exam',
            2 => 'grade',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.grade.destroy',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'exam',
            2 => 'grade',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.grade.store',
          ),
          1 => 
          array (
            0 => 'course',
            1 => 'exam',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.related.list',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.show',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.edit',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.update',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course.destroy',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2527 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course-material.show',
          ),
          1 => 
          array (
            0 => 'course_material',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2541 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course-material.edit',
          ),
          1 => 
          array (
            0 => 'course_material',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course-material.update',
          ),
          1 => 
          array (
            0 => 'course_material',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.course-material.destroy',
          ),
          1 => 
          array (
            0 => 'course_material',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2583 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-manager.change-status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2615 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subject.show',
          ),
          1 => 
          array (
            0 => 'subject',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2629 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subject.edit',
          ),
          1 => 
          array (
            0 => 'subject',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2638 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subject.update',
          ),
          1 => 
          array (
            0 => 'subject',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subject.destroy',
          ),
          1 => 
          array (
            0 => 'subject',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2676 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.study-session.show',
          ),
          1 => 
          array (
            0 => 'study_session',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.study-session.edit',
          ),
          1 => 
          array (
            0 => 'study_session',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2699 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.study-session.update',
          ),
          1 => 
          array (
            0 => 'study_session',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.study-session.destroy',
          ),
          1 => 
          array (
            0 => 'study_session',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2792 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.student-examination.grade',
          ),
          1 => 
          array (
            0 => 'student',
            1 => 'course',
            2 => 'exam',
            3 => 'quiz',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.student-examination.handleGrade',
          ),
          1 => 
          array (
            0 => 'student',
            1 => 'course',
            2 => 'exam',
            3 => 'quiz',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2818 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.student-examination.comment',
          ),
          1 => 
          array (
            0 => 'studentExam',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2838 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.student-examination.show',
          ),
          1 => 
          array (
            0 => 'student_examination',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2852 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.student-examination.edit',
          ),
          1 => 
          array (
            0 => 'student_examination',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2861 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.student-examination.update',
          ),
          1 => 
          array (
            0 => 'student_examination',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.student-examination.destroy',
          ),
          1 => 
          array (
            0 => 'student_examination',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2894 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.show',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2908 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.edit',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.update',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.destroy',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2940 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::viTJnoRNXSjDteHI',
          ),
          1 => 
          array (
            0 => 'key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::K9WFsmILgnQCOdfh',
          ),
          1 => 
          array (
            0 => 'key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2995 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutor.show',
          ),
          1 => 
          array (
            0 => 'tutor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3009 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutor.edit',
          ),
          1 => 
          array (
            0 => 'tutor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3018 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutor.update',
          ),
          1 => 
          array (
            0 => 'tutor',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tutor.destroy',
          ),
          1 => 
          array (
            0 => 'tutor',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.show',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3056 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.edit',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3065 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.update',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.destroy',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.reading.store',
          ),
          1 => 
          array (
            0 => 'quiz',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.reading.update',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.reading.destroy',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.reading.setAnswerTrue',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3168 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.writing.assessment.store',
          ),
          1 => 
          array (
            0 => 'quiz',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3207 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.writing.assessment.update',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.writing.assessment.destroy',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.writing.assessment.setAnswerTrue',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3229 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.writing.quiz.store',
          ),
          1 => 
          array (
            0 => 'quiz',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3262 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.writing.quiz.update',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.writing.quiz.destroy',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.listening.assessment.store',
          ),
          1 => 
          array (
            0 => 'quiz',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3333 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.listening.assessment.update',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.listening.assessment.destroy',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.listening.assessment.setAnswerTrue',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.speaking.assessment.store',
          ),
          1 => 
          array (
            0 => 'quiz',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3402 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.speaking.assessment.update',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.speaking.assessment.destroy',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.speaking.assessment.setAnswerTrue',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3430 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.speaking.exercises.store',
          ),
          1 => 
          array (
            0 => 'quiz',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.speaking.exercises.update',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.speaking.exercises.destroy',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.speaking.quiz.store',
          ),
          1 => 
          array (
            0 => 'quiz',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3526 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.speaking.quiz.update',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quiz.question.speaking.quiz.destroy',
          ),
          1 => 
          array (
            0 => 'quiz',
            1 => 'question',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reading.answer.update',
          ),
          1 => 
          array (
            0 => 'answer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reading.answer.destroy',
          ),
          1 => 
          array (
            0 => 'answer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.writing.assessment.answer.update',
          ),
          1 => 
          array (
            0 => 'answer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.writing.assessment.answer.destroy',
          ),
          1 => 
          array (
            0 => 'answer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3661 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listening.assessment.answer.update',
          ),
          1 => 
          array (
            0 => 'answer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listening.assessment.answer.destroy',
          ),
          1 => 
          array (
            0 => 'answer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.speaking.assessment.answer.update',
          ),
          1 => 
          array (
            0 => 'answer',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.speaking.assessment.answer.destroy',
          ),
          1 => 
          array (
            0 => 'answer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3727 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.answer.store',
          ),
          1 => 
          array (
            0 => 'question',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3746 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.answer.update',
          ),
          1 => 
          array (
            0 => 'question',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3763 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.answer.destroy',
          ),
          1 => 
          array (
            0 => 'question',
            1 => 'answer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3797 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.show',
          ),
          1 => 
          array (
            0 => 'banner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3811 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.edit',
          ),
          1 => 
          array (
            0 => 'banner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.update',
          ),
          1 => 
          array (
            0 => 'banner',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.destroy',
          ),
          1 => 
          array (
            0 => 'banner',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3845 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.show',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3859 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.edit',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3868 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.update',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.destroy',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3895 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3909 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3918 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3956 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forum.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3978 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forum.review',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3999 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forum.show',
          ),
          1 => 
          array (
            0 => 'forum',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4013 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forum.edit',
          ),
          1 => 
          array (
            0 => 'forum',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4022 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forum.update',
          ),
          1 => 
          array (
            0 => 'forum',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forum.destroy',
          ),
          1 => 
          array (
            0 => 'forum',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4049 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.news.show',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4063 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.news.edit',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4072 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.news.update',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.news.destroy',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4099 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discount.apply',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discount.apply-courses',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.audio-listen.update',
          ),
          1 => 
          array (
            0 => 'audioListen',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4223 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discount.show',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4237 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discount.edit',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4246 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discount.update',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discount.destroy',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.show',
          ),
          1 => 
          array (
            0 => 'membership',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4295 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.edit',
          ),
          1 => 
          array (
            0 => 'membership',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.update',
          ),
          1 => 
          array (
            0 => 'membership',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.membership.destroy',
          ),
          1 => 
          array (
            0 => 'membership',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.moderator.show',
          ),
          1 => 
          array (
            0 => 'moderator',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.moderator.edit',
          ),
          1 => 
          array (
            0 => 'moderator',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4357 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.moderator.update',
          ),
          1 => 
          array (
            0 => 'moderator',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.moderator.destroy',
          ),
          1 => 
          array (
            0 => 'moderator',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-manager.moderator.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-manager.moderator.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-manager.student.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4486 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-manager.student.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4517 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-manager.student.editToken',
          ),
          1 => 
          array (
            0 => 'wallet',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4541 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-manager.student.updateToken',
          ),
          1 => 
          array (
            0 => 'wallet',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-manager.student.depositHistory',
          ),
          1 => 
          array (
            0 => 'wallet',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4606 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-manager.student.paymentHistory',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4638 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-manager.tutor.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4662 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user-manager.tutor.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet-manager.show',
          ),
          1 => 
          array (
            0 => 'wallet_manager',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4715 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet-manager.edit',
          ),
          1 => 
          array (
            0 => 'wallet_manager',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4724 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet-manager.update',
          ),
          1 => 
          array (
            0 => 'wallet_manager',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wallet-manager.destroy',
          ),
          1 => 
          array (
            0 => 'wallet_manager',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cashier.payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stripe/payment/{id}',
      'action' => 
      array (
        'uses' => 'Laravel\\Cashier\\Http\\Controllers\\PaymentController@show',
        'controller' => 'Laravel\\Cashier\\Http\\Controllers\\PaymentController@show',
        'as' => 'cashier.payment',
        'namespace' => 'Laravel\\Cashier\\Http\\Controllers',
        'prefix' => 'stripe',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cashier.webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stripe/webhook',
      'action' => 
      array (
        'uses' => 'Laravel\\Cashier\\Http\\Controllers\\WebhookController@handleWebhook',
        'controller' => 'Laravel\\Cashier\\Http\\Controllers\\WebhookController@handleWebhook',
        'as' => 'cashier.webhook',
        'namespace' => 'Laravel\\Cashier\\Http\\Controllers',
        'prefix' => 'stripe',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iE90Yo22yjVfmtjc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\RedirectController@__invoke',
        'controller' => '\\Illuminate\\Routing\\RedirectController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::iE90Yo22yjVfmtjc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'destination' => 'site/',
        'status' => 301,
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'lang.switch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'lang.switch',
        'uses' => 'App\\Http\\Controllers\\LanguageController@switchLang',
        'controller' => 'App\\Http\\Controllers\\LanguageController@switchLang',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'file.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'file.index',
        'uses' => 'App\\Http\\Controllers\\FileController@index',
        'controller' => 'App\\Http\\Controllers\\FileController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'file.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'file.create',
        'uses' => 'App\\Http\\Controllers\\FileController@create',
        'controller' => 'App\\Http\\Controllers\\FileController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'file.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'file.store',
        'uses' => 'App\\Http\\Controllers\\FileController@store',
        'controller' => 'App\\Http\\Controllers\\FileController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'file.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'file.show',
        'uses' => 'App\\Http\\Controllers\\FileController@show',
        'controller' => 'App\\Http\\Controllers\\FileController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'file.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'file/{file}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'file.edit',
        'uses' => 'App\\Http\\Controllers\\FileController@edit',
        'controller' => 'App\\Http\\Controllers\\FileController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'file.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'file/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'file.update',
        'uses' => 'App\\Http\\Controllers\\FileController@update',
        'controller' => 'App\\Http\\Controllers\\FileController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'file.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'file/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'file.destroy',
        'uses' => 'App\\Http\\Controllers\\FileController@destroy',
        'controller' => 'App\\Http\\Controllers\\FileController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'audio' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'audio/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\AudioFileController@getByCode',
        'controller' => 'App\\Http\\Controllers\\AudioFileController@getByCode',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'audio',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wJMvEexpPWkd28Zw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::wJMvEexpPWkd28Zw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Wd3dlRnLTmZnJJGk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Wd3dlRnLTmZnJJGk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QIsj4IH9B8xeq0DC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::QIsj4IH9B8xeq0DC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@login',
        'as' => 'admin.login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'throttle:15,10',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@actionLogin',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@actionLogin',
        'as' => 'admin.',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@logout',
        'as' => 'admin.logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.backpack.auth.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\ForgotPasswordController@showLinkRequestForm',
        'as' => 'admin.backpack.auth.password.reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.generated::gchE313oTzGqT36z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Admin\\ResetPasswordController@reset',
        'as' => 'admin.generated::gchE313oTzGqT36z',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.backpack.auth.password.reset.token' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\ResetPasswordController@showResetForm',
        'as' => 'admin.backpack.auth.password.reset.token',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.backpack.auth.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Admin\\ForgotPasswordController@sendResetLinkEmail',
        'as' => 'admin.backpack.auth.password.email',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@dashboard',
        'as' => 'admin.dashboard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.certificate.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/certificate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.certificate.index',
        'uses' => 'App\\Http\\Controllers\\CertificateController@index',
        'controller' => 'App\\Http\\Controllers\\CertificateController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.certificate.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/certificate/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.certificate.create',
        'uses' => 'App\\Http\\Controllers\\CertificateController@create',
        'controller' => 'App\\Http\\Controllers\\CertificateController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.certificate.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/certificate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.certificate.store',
        'uses' => 'App\\Http\\Controllers\\CertificateController@store',
        'controller' => 'App\\Http\\Controllers\\CertificateController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.certificate.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/certificate/{certificate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.certificate.show',
        'uses' => 'App\\Http\\Controllers\\CertificateController@show',
        'controller' => 'App\\Http\\Controllers\\CertificateController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.certificate.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/certificate/{certificate}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.certificate.edit',
        'uses' => 'App\\Http\\Controllers\\CertificateController@edit',
        'controller' => 'App\\Http\\Controllers\\CertificateController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.certificate.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/certificate/{certificate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.certificate.update',
        'uses' => 'App\\Http\\Controllers\\CertificateController@update',
        'controller' => 'App\\Http\\Controllers\\CertificateController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.certificate.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/certificate/{certificate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.certificate.destroy',
        'uses' => 'App\\Http\\Controllers\\CertificateController@destroy',
        'controller' => 'App\\Http\\Controllers\\CertificateController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.subject.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.subject.index',
        'uses' => 'App\\Http\\Controllers\\SubjectController@index',
        'controller' => 'App\\Http\\Controllers\\SubjectController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.subject.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subject/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.subject.create',
        'uses' => 'App\\Http\\Controllers\\SubjectController@create',
        'controller' => 'App\\Http\\Controllers\\SubjectController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.subject.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.subject.store',
        'uses' => 'App\\Http\\Controllers\\SubjectController@store',
        'controller' => 'App\\Http\\Controllers\\SubjectController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.subject.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subject/{subject}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.subject.show',
        'uses' => 'App\\Http\\Controllers\\SubjectController@show',
        'controller' => 'App\\Http\\Controllers\\SubjectController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.subject.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subject/{subject}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.subject.edit',
        'uses' => 'App\\Http\\Controllers\\SubjectController@edit',
        'controller' => 'App\\Http\\Controllers\\SubjectController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.subject.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/subject/{subject}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.subject.update',
        'uses' => 'App\\Http\\Controllers\\SubjectController@update',
        'controller' => 'App\\Http\\Controllers\\SubjectController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.subject.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/subject/{subject}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.subject.destroy',
        'uses' => 'App\\Http\\Controllers\\SubjectController@destroy',
        'controller' => 'App\\Http\\Controllers\\SubjectController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tutor.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tutor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.tutor.index',
        'uses' => 'App\\Http\\Controllers\\TutorController@index',
        'controller' => 'App\\Http\\Controllers\\TutorController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tutor.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tutor/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.tutor.create',
        'uses' => 'App\\Http\\Controllers\\TutorController@create',
        'controller' => 'App\\Http\\Controllers\\TutorController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tutor.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tutor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.tutor.store',
        'uses' => 'App\\Http\\Controllers\\TutorController@store',
        'controller' => 'App\\Http\\Controllers\\TutorController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tutor.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tutor/{tutor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.tutor.show',
        'uses' => 'App\\Http\\Controllers\\TutorController@show',
        'controller' => 'App\\Http\\Controllers\\TutorController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tutor.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tutor/{tutor}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.tutor.edit',
        'uses' => 'App\\Http\\Controllers\\TutorController@edit',
        'controller' => 'App\\Http\\Controllers\\TutorController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tutor.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/tutor/{tutor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.tutor.update',
        'uses' => 'App\\Http\\Controllers\\TutorController@update',
        'controller' => 'App\\Http\\Controllers\\TutorController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tutor.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/tutor/{tutor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.tutor.destroy',
        'uses' => 'App\\Http\\Controllers\\TutorController@destroy',
        'controller' => 'App\\Http\\Controllers\\TutorController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.room.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/{course}/rooms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@rooms',
        'controller' => 'App\\Http\\Controllers\\CourseController@rooms',
        'as' => 'admin.course.room.list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.room.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/{course}/rooms/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@createRoom',
        'controller' => 'App\\Http\\Controllers\\CourseController@createRoom',
        'as' => 'admin.course.room.create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.room.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/course/{course}/rooms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@storeRoom',
        'controller' => 'App\\Http\\Controllers\\CourseController@storeRoom',
        'as' => 'admin.course.room.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.room.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/{course}/rooms/{room}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@editRoom',
        'controller' => 'App\\Http\\Controllers\\CourseController@editRoom',
        'as' => 'admin.course.room.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.room.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/course/{course}/rooms/{room}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@updateRoom',
        'controller' => 'App\\Http\\Controllers\\CourseController@updateRoom',
        'as' => 'admin.course.room.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.room.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/course/{course}/rooms/{room}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@destroyRoom',
        'controller' => 'App\\Http\\Controllers\\CourseController@destroyRoom',
        'as' => 'admin.course.room.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.room.scheduler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/{course}/rooms/{room}/schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@listScheduleByRoom',
        'controller' => 'App\\Http\\Controllers\\CourseController@listScheduleByRoom',
        'as' => 'admin.course.room.scheduler',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.lecture.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/{course}/lecture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@lectures',
        'controller' => 'App\\Http\\Controllers\\CourseController@lectures',
        'as' => 'admin.course.lecture.list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.lecture.indexing' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/course/{course}/lecture/indexing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@lectureIndexing',
        'controller' => 'App\\Http\\Controllers\\CourseController@lectureIndexing',
        'as' => 'admin.course.lecture.indexing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.lecture.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/{course}/lecture/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@createLecture',
        'controller' => 'App\\Http\\Controllers\\CourseController@createLecture',
        'as' => 'admin.course.lecture.create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.lecture.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/course/{course}/lecture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@storeLecture',
        'controller' => 'App\\Http\\Controllers\\CourseController@storeLecture',
        'as' => 'admin.course.lecture.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.lecture.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/{course}/lecture/{lecture}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@editLecture',
        'controller' => 'App\\Http\\Controllers\\CourseController@editLecture',
        'as' => 'admin.course.lecture.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.lecture.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/course/{course}/lecture/{lecture}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@updateLecture',
        'controller' => 'App\\Http\\Controllers\\CourseController@updateLecture',
        'as' => 'admin.course.lecture.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.lecture.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/course/{course}/lecture/{lecture}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@destroyLecture',
        'controller' => 'App\\Http\\Controllers\\CourseController@destroyLecture',
        'as' => 'admin.course.lecture.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.examination.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/{course}/examination/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@create',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@create',
        'as' => 'admin.course.examination.create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.examination.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/course/{course}/examination',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@store',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@store',
        'as' => 'admin.course.examination.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.examination.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/{course}/examination/{exam}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@edit',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@edit',
        'as' => 'admin.course.examination.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.examination.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/course/{course}/examination/{exam}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@update',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@update',
        'as' => 'admin.course.examination.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.examination.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/course/{course}/examination/{exam}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@destroy',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@destroy',
        'as' => 'admin.course.examination.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.grade.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/{course}/exam/{exam}/grade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PassGradeController@index',
        'controller' => 'App\\Http\\Controllers\\PassGradeController@index',
        'as' => 'admin.course.grade.list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.grade.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/{course}/exam/{exam}/grade/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PassGradeController@create',
        'controller' => 'App\\Http\\Controllers\\PassGradeController@create',
        'as' => 'admin.course.grade.create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.grade.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/course/{course}/exam/{exam}/grade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PassGradeController@store',
        'controller' => 'App\\Http\\Controllers\\PassGradeController@store',
        'as' => 'admin.course.grade.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.grade.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/{course}/exam/{exam}/grade/{grade}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PassGradeController@edit',
        'controller' => 'App\\Http\\Controllers\\PassGradeController@edit',
        'as' => 'admin.course.grade.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.grade.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/course/{course}/exam/{exam}/grade/{grade}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PassGradeController@update',
        'controller' => 'App\\Http\\Controllers\\PassGradeController@update',
        'as' => 'admin.course.grade.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.grade.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/course/{course}/exam/{exam}/grade/{grade}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PassGradeController@destroy',
        'controller' => 'App\\Http\\Controllers\\PassGradeController@destroy',
        'as' => 'admin.course.grade.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.query' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/query',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@courseListQuery',
        'controller' => 'App\\Http\\Controllers\\CourseController@courseListQuery',
        'as' => 'admin.course.query',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.related.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/related/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@courseListRelated',
        'controller' => 'App\\Http\\Controllers\\CourseController@courseListRelated',
        'as' => 'admin.course.related.list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.related' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/course/related',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@updateRelated',
        'controller' => 'App\\Http\\Controllers\\CourseController@updateRelated',
        'as' => 'admin.course.related',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.course.index',
        'uses' => 'App\\Http\\Controllers\\CourseController@index',
        'controller' => 'App\\Http\\Controllers\\CourseController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.course.create',
        'uses' => 'App\\Http\\Controllers\\CourseController@create',
        'controller' => 'App\\Http\\Controllers\\CourseController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/course',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.course.store',
        'uses' => 'App\\Http\\Controllers\\CourseController@store',
        'controller' => 'App\\Http\\Controllers\\CourseController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.course.show',
        'uses' => 'App\\Http\\Controllers\\CourseController@show',
        'controller' => 'App\\Http\\Controllers\\CourseController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course/{course}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.course.edit',
        'uses' => 'App\\Http\\Controllers\\CourseController@edit',
        'controller' => 'App\\Http\\Controllers\\CourseController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/course/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.course.update',
        'uses' => 'App\\Http\\Controllers\\CourseController@update',
        'controller' => 'App\\Http\\Controllers\\CourseController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/course/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.course.destroy',
        'uses' => 'App\\Http\\Controllers\\CourseController@destroy',
        'controller' => 'App\\Http\\Controllers\\CourseController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.reading.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/quiz/{quiz}/question/reading',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReadingQuestionController@store',
        'controller' => 'App\\Http\\Controllers\\ReadingQuestionController@store',
        'as' => 'admin.quiz.question.reading.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.reading.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/reading',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReadingQuestionController@update',
        'controller' => 'App\\Http\\Controllers\\ReadingQuestionController@update',
        'as' => 'admin.quiz.question.reading.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.reading.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/reading',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReadingQuestionController@destroy',
        'controller' => 'App\\Http\\Controllers\\ReadingQuestionController@destroy',
        'as' => 'admin.quiz.question.reading.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.reading.setAnswerTrue' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/reading',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReadingQuestionController@setAnswerTrue',
        'controller' => 'App\\Http\\Controllers\\ReadingQuestionController@setAnswerTrue',
        'as' => 'admin.quiz.question.reading.setAnswerTrue',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.reading.answer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/question/reading/answer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReadingAnswerController@store',
        'controller' => 'App\\Http\\Controllers\\ReadingAnswerController@store',
        'as' => 'admin.reading.answer.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.reading.answer.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/question/reading/answer/{answer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReadingAnswerController@update',
        'controller' => 'App\\Http\\Controllers\\ReadingAnswerController@update',
        'as' => 'admin.reading.answer.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.reading.answer.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/question/reading/answer/{answer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ReadingAnswerController@destroy',
        'controller' => 'App\\Http\\Controllers\\ReadingAnswerController@destroy',
        'as' => 'admin.reading.answer.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.writing.assessment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/quiz/{quiz}/question/assessment/writing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WritingAssessmentQuestionController@store',
        'controller' => 'App\\Http\\Controllers\\WritingAssessmentQuestionController@store',
        'as' => 'admin.quiz.question.writing.assessment.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.writing.assessment.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/assessment/writing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WritingAssessmentQuestionController@update',
        'controller' => 'App\\Http\\Controllers\\WritingAssessmentQuestionController@update',
        'as' => 'admin.quiz.question.writing.assessment.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.writing.assessment.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/assessment/writing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WritingAssessmentQuestionController@destroy',
        'controller' => 'App\\Http\\Controllers\\WritingAssessmentQuestionController@destroy',
        'as' => 'admin.quiz.question.writing.assessment.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.writing.assessment.setAnswerTrue' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/assessment/writing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WritingAssessmentQuestionController@setAnswerTrue',
        'controller' => 'App\\Http\\Controllers\\WritingAssessmentQuestionController@setAnswerTrue',
        'as' => 'admin.quiz.question.writing.assessment.setAnswerTrue',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.writing.assessment.answer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/question/assessment/writing/answer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WritingAssessmentAnswerController@store',
        'controller' => 'App\\Http\\Controllers\\WritingAssessmentAnswerController@store',
        'as' => 'admin.writing.assessment.answer.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.writing.assessment.answer.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/question/assessment/writing/answer/{answer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WritingAssessmentAnswerController@update',
        'controller' => 'App\\Http\\Controllers\\WritingAssessmentAnswerController@update',
        'as' => 'admin.writing.assessment.answer.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.writing.assessment.answer.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/question/assessment/writing/answer/{answer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WritingAssessmentAnswerController@destroy',
        'controller' => 'App\\Http\\Controllers\\WritingAssessmentAnswerController@destroy',
        'as' => 'admin.writing.assessment.answer.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.writing.quiz.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/quiz/{quiz}/question/quiz/writing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WritingQuizQuestionController@store',
        'controller' => 'App\\Http\\Controllers\\WritingQuizQuestionController@store',
        'as' => 'admin.quiz.question.writing.quiz.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.writing.quiz.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/quiz/writing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WritingQuizQuestionController@update',
        'controller' => 'App\\Http\\Controllers\\WritingQuizQuestionController@update',
        'as' => 'admin.quiz.question.writing.quiz.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.writing.quiz.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/quiz/writing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WritingQuizQuestionController@destroy',
        'controller' => 'App\\Http\\Controllers\\WritingQuizQuestionController@destroy',
        'as' => 'admin.quiz.question.writing.quiz.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.listening.assessment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/quiz/{quiz}/question/assessment/listening',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ListenAssessmentQuestionController@store',
        'controller' => 'App\\Http\\Controllers\\ListenAssessmentQuestionController@store',
        'as' => 'admin.quiz.question.listening.assessment.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.listening.assessment.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/assessment/listening',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ListenAssessmentQuestionController@update',
        'controller' => 'App\\Http\\Controllers\\ListenAssessmentQuestionController@update',
        'as' => 'admin.quiz.question.listening.assessment.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.listening.assessment.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/assessment/listening',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ListenAssessmentQuestionController@destroy',
        'controller' => 'App\\Http\\Controllers\\ListenAssessmentQuestionController@destroy',
        'as' => 'admin.quiz.question.listening.assessment.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.listening.assessment.setAnswerTrue' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/assessment/listening',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ListenAssessmentQuestionController@setAnswerTrue',
        'controller' => 'App\\Http\\Controllers\\ListenAssessmentQuestionController@setAnswerTrue',
        'as' => 'admin.quiz.question.listening.assessment.setAnswerTrue',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.listening.assessment.answer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/question/assessment/listening/answer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ListenAssessmentAnswerController@store',
        'controller' => 'App\\Http\\Controllers\\ListenAssessmentAnswerController@store',
        'as' => 'admin.listening.assessment.answer.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.listening.assessment.answer.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/question/assessment/listening/answer/{answer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ListenAssessmentAnswerController@update',
        'controller' => 'App\\Http\\Controllers\\ListenAssessmentAnswerController@update',
        'as' => 'admin.listening.assessment.answer.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.listening.assessment.answer.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/question/assessment/listening/answer/{answer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ListenAssessmentAnswerController@destroy',
        'controller' => 'App\\Http\\Controllers\\ListenAssessmentAnswerController@destroy',
        'as' => 'admin.listening.assessment.answer.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.speaking.assessment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/quiz/{quiz}/question/assessment/speaking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SpeakAssessmentQuestionController@store',
        'controller' => 'App\\Http\\Controllers\\SpeakAssessmentQuestionController@store',
        'as' => 'admin.quiz.question.speaking.assessment.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.speaking.assessment.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/assessment/speaking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SpeakAssessmentQuestionController@update',
        'controller' => 'App\\Http\\Controllers\\SpeakAssessmentQuestionController@update',
        'as' => 'admin.quiz.question.speaking.assessment.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.speaking.assessment.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/assessment/speaking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SpeakAssessmentQuestionController@destroy',
        'controller' => 'App\\Http\\Controllers\\SpeakAssessmentQuestionController@destroy',
        'as' => 'admin.quiz.question.speaking.assessment.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.speaking.assessment.setAnswerTrue' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/assessment/speaking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SpeakAssessmentQuestionController@setAnswerTrue',
        'controller' => 'App\\Http\\Controllers\\SpeakAssessmentQuestionController@setAnswerTrue',
        'as' => 'admin.quiz.question.speaking.assessment.setAnswerTrue',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.speaking.assessment.answer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/question/assessment/speaking/answer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SpeakAssessmentAnswerController@store',
        'controller' => 'App\\Http\\Controllers\\SpeakAssessmentAnswerController@store',
        'as' => 'admin.speaking.assessment.answer.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.speaking.assessment.answer.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/question/assessment/speaking/answer/{answer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SpeakAssessmentAnswerController@update',
        'controller' => 'App\\Http\\Controllers\\SpeakAssessmentAnswerController@update',
        'as' => 'admin.speaking.assessment.answer.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.speaking.assessment.answer.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/question/assessment/speaking/answer/{answer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SpeakAssessmentAnswerController@destroy',
        'controller' => 'App\\Http\\Controllers\\SpeakAssessmentAnswerController@destroy',
        'as' => 'admin.speaking.assessment.answer.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.speaking.exercises.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/quiz/{quiz}/question/exercises/speaking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SpeakExercisesQuestionController@store',
        'controller' => 'App\\Http\\Controllers\\SpeakExercisesQuestionController@store',
        'as' => 'admin.quiz.question.speaking.exercises.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.speaking.exercises.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/exercises/speaking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SpeakExercisesQuestionController@update',
        'controller' => 'App\\Http\\Controllers\\SpeakExercisesQuestionController@update',
        'as' => 'admin.quiz.question.speaking.exercises.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.speaking.exercises.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/exercises/speaking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SpeakExercisesQuestionController@destroy',
        'controller' => 'App\\Http\\Controllers\\SpeakExercisesQuestionController@destroy',
        'as' => 'admin.quiz.question.speaking.exercises.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.speaking.quiz.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/quiz/{quiz}/question/quiz/speaking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SpeakQuizQuestionController@store',
        'controller' => 'App\\Http\\Controllers\\SpeakQuizQuestionController@store',
        'as' => 'admin.quiz.question.speaking.quiz.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.speaking.quiz.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/quiz/speaking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SpeakQuizQuestionController@update',
        'controller' => 'App\\Http\\Controllers\\SpeakQuizQuestionController@update',
        'as' => 'admin.quiz.question.speaking.quiz.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.quiz.question.speaking.quiz.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/quiz/{quiz}/question/{question}/quiz/speaking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SpeakQuizQuestionController@destroy',
        'controller' => 'App\\Http\\Controllers\\SpeakQuizQuestionController@destroy',
        'as' => 'admin.quiz.question.speaking.quiz.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.passage.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/passage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PassageController@store',
        'controller' => 'App\\Http\\Controllers\\PassageController@store',
        'as' => 'admin.passage.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.passage.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/passage/{passage}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PassageController@update',
        'controller' => 'App\\Http\\Controllers\\PassageController@update',
        'as' => 'admin.passage.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course-material.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course-material',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.course-material.index',
        'uses' => 'App\\Http\\Controllers\\CourseMaterialController@index',
        'controller' => 'App\\Http\\Controllers\\CourseMaterialController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course-material.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course-material/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.course-material.create',
        'uses' => 'App\\Http\\Controllers\\CourseMaterialController@create',
        'controller' => 'App\\Http\\Controllers\\CourseMaterialController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course-material.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/course-material',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.course-material.store',
        'uses' => 'App\\Http\\Controllers\\CourseMaterialController@store',
        'controller' => 'App\\Http\\Controllers\\CourseMaterialController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course-material.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course-material/{course_material}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.course-material.show',
        'uses' => 'App\\Http\\Controllers\\CourseMaterialController@show',
        'controller' => 'App\\Http\\Controllers\\CourseMaterialController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course-material.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/course-material/{course_material}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.course-material.edit',
        'uses' => 'App\\Http\\Controllers\\CourseMaterialController@edit',
        'controller' => 'App\\Http\\Controllers\\CourseMaterialController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course-material.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/course-material/{course_material}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.course-material.update',
        'uses' => 'App\\Http\\Controllers\\CourseMaterialController@update',
        'controller' => 'App\\Http\\Controllers\\CourseMaterialController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.course-material.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/course-material/{course_material}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.course-material.destroy',
        'uses' => 'App\\Http\\Controllers\\CourseMaterialController@destroy',
        'controller' => 'App\\Http\\Controllers\\CourseMaterialController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.answer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/question/{question}/answer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnswerController@store',
        'controller' => 'App\\Http\\Controllers\\AnswerController@store',
        'as' => 'admin.answer.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.answer.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/question/{question}/answer/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnswerController@update',
        'controller' => 'App\\Http\\Controllers\\AnswerController@update',
        'as' => 'admin.answer.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.answer.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/question/{question}/answer/{answer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AnswerController@destroy',
        'controller' => 'App\\Http\\Controllers\\AnswerController@destroy',
        'as' => 'admin.answer.destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.banner.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.banner.index',
        'uses' => 'App\\Http\\Controllers\\BannerController@index',
        'controller' => 'App\\Http\\Controllers\\BannerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.banner.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.banner.create',
        'uses' => 'App\\Http\\Controllers\\BannerController@create',
        'controller' => 'App\\Http\\Controllers\\BannerController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.banner.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.banner.store',
        'uses' => 'App\\Http\\Controllers\\BannerController@store',
        'controller' => 'App\\Http\\Controllers\\BannerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.banner.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/{banner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.banner.show',
        'uses' => 'App\\Http\\Controllers\\BannerController@show',
        'controller' => 'App\\Http\\Controllers\\BannerController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.banner.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/{banner}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.banner.edit',
        'uses' => 'App\\Http\\Controllers\\BannerController@edit',
        'controller' => 'App\\Http\\Controllers\\BannerController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.banner.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/banner/{banner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.banner.update',
        'uses' => 'App\\Http\\Controllers\\BannerController@update',
        'controller' => 'App\\Http\\Controllers\\BannerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.banner.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/banner/{banner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.banner.destroy',
        'uses' => 'App\\Http\\Controllers\\BannerController@destroy',
        'controller' => 'App\\Http\\Controllers\\BannerController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tutorProfile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile-tutor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@tutorProfile',
        'controller' => 'App\\Http\\Controllers\\UserController@tutorProfile',
        'as' => 'admin.tutorProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.moderatorProfile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile-moderator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@moderatorProfile',
        'controller' => 'App\\Http\\Controllers\\UserController@moderatorProfile',
        'as' => 'admin.moderatorProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.adminProfile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile-admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@adminProfile',
        'controller' => 'App\\Http\\Controllers\\UserController@adminProfile',
        'as' => 'admin.adminProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.adminOwner' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin-update-owner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@adminOwner',
        'controller' => 'App\\Http\\Controllers\\UserController@adminOwner',
        'as' => 'admin.adminOwner',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.user.index',
        'uses' => 'App\\Http\\Controllers\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\UserController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.user.create',
        'uses' => 'App\\Http\\Controllers\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\UserController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.user.store',
        'uses' => 'App\\Http\\Controllers\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\UserController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.user.show',
        'uses' => 'App\\Http\\Controllers\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\UserController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.user.edit',
        'uses' => 'App\\Http\\Controllers\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\UserController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.user.update',
        'uses' => 'App\\Http\\Controllers\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\UserController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.user.destroy',
        'uses' => 'App\\Http\\Controllers\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\UserController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tag.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.tag.index',
        'uses' => 'App\\Http\\Controllers\\TagController@index',
        'controller' => 'App\\Http\\Controllers\\TagController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tag.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tag/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.tag.create',
        'uses' => 'App\\Http\\Controllers\\TagController@create',
        'controller' => 'App\\Http\\Controllers\\TagController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tag.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.tag.store',
        'uses' => 'App\\Http\\Controllers\\TagController@store',
        'controller' => 'App\\Http\\Controllers\\TagController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tag.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tag/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.tag.show',
        'uses' => 'App\\Http\\Controllers\\TagController@show',
        'controller' => 'App\\Http\\Controllers\\TagController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tag.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tag/{tag}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.tag.edit',
        'uses' => 'App\\Http\\Controllers\\TagController@edit',
        'controller' => 'App\\Http\\Controllers\\TagController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tag.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/tag/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.tag.update',
        'uses' => 'App\\Http\\Controllers\\TagController@update',
        'controller' => 'App\\Http\\Controllers\\TagController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.tag.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/tag/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.tag.destroy',
        'uses' => 'App\\Http\\Controllers\\TagController@destroy',
        'controller' => 'App\\Http\\Controllers\\TagController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.forum.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forum/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ManagePostController@restore',
        'controller' => 'App\\Http\\Controllers\\ManagePostController@restore',
        'as' => 'admin.forum.restore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.forum.review' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forum/review/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ManagePostController@review',
        'controller' => 'App\\Http\\Controllers\\ManagePostController@review',
        'as' => 'admin.forum.review',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.forum.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forum',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.forum.index',
        'uses' => 'App\\Http\\Controllers\\ManagePostController@index',
        'controller' => 'App\\Http\\Controllers\\ManagePostController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.forum.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forum/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.forum.create',
        'uses' => 'App\\Http\\Controllers\\ManagePostController@create',
        'controller' => 'App\\Http\\Controllers\\ManagePostController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.forum.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forum',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.forum.store',
        'uses' => 'App\\Http\\Controllers\\ManagePostController@store',
        'controller' => 'App\\Http\\Controllers\\ManagePostController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.forum.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forum/{forum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.forum.show',
        'uses' => 'App\\Http\\Controllers\\ManagePostController@show',
        'controller' => 'App\\Http\\Controllers\\ManagePostController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.forum.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forum/{forum}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.forum.edit',
        'uses' => 'App\\Http\\Controllers\\ManagePostController@edit',
        'controller' => 'App\\Http\\Controllers\\ManagePostController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.forum.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/forum/{forum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.forum.update',
        'uses' => 'App\\Http\\Controllers\\ManagePostController@update',
        'controller' => 'App\\Http\\Controllers\\ManagePostController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.forum.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/forum/{forum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.forum.destroy',
        'uses' => 'App\\Http\\Controllers\\ManagePostController@destroy',
        'controller' => 'App\\Http\\Controllers\\ManagePostController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.blog.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.blog.index',
        'uses' => 'App\\Http\\Controllers\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\BlogController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.blog.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.blog.create',
        'uses' => 'App\\Http\\Controllers\\BlogController@create',
        'controller' => 'App\\Http\\Controllers\\BlogController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.blog.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.blog.store',
        'uses' => 'App\\Http\\Controllers\\BlogController@store',
        'controller' => 'App\\Http\\Controllers\\BlogController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.blog.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.blog.show',
        'uses' => 'App\\Http\\Controllers\\BlogController@show',
        'controller' => 'App\\Http\\Controllers\\BlogController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/{blog}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.blog.edit',
        'uses' => 'App\\Http\\Controllers\\BlogController@edit',
        'controller' => 'App\\Http\\Controllers\\BlogController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/blog/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.blog.update',
        'uses' => 'App\\Http\\Controllers\\BlogController@update',
        'controller' => 'App\\Http\\Controllers\\BlogController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.blog.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/blog/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.blog.destroy',
        'uses' => 'App\\Http\\Controllers\\BlogController@destroy',
        'controller' => 'App\\Http\\Controllers\\BlogController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.news.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.news.index',
        'uses' => 'App\\Http\\Controllers\\NewsController@index',
        'controller' => 'App\\Http\\Controllers\\NewsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.news.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.news.create',
        'uses' => 'App\\Http\\Controllers\\NewsController@create',
        'controller' => 'App\\Http\\Controllers\\NewsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.news.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.news.store',
        'uses' => 'App\\Http\\Controllers\\NewsController@store',
        'controller' => 'App\\Http\\Controllers\\NewsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.news.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.news.show',
        'uses' => 'App\\Http\\Controllers\\NewsController@show',
        'controller' => 'App\\Http\\Controllers\\NewsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.news.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/news/{news}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.news.edit',
        'uses' => 'App\\Http\\Controllers\\NewsController@edit',
        'controller' => 'App\\Http\\Controllers\\NewsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.news.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.news.update',
        'uses' => 'App\\Http\\Controllers\\NewsController@update',
        'controller' => 'App\\Http\\Controllers\\NewsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.news.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.news.destroy',
        'uses' => 'App\\Http\\Controllers\\NewsController@destroy',
        'controller' => 'App\\Http\\Controllers\\NewsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.roles.index',
        'uses' => 'App\\Http\\Controllers\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\RoleController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.roles.create',
        'uses' => 'App\\Http\\Controllers\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\RoleController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.roles.store',
        'uses' => 'App\\Http\\Controllers\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\RoleController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.roles.show',
        'uses' => 'App\\Http\\Controllers\\RoleController@show',
        'controller' => 'App\\Http\\Controllers\\RoleController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.roles.edit',
        'uses' => 'App\\Http\\Controllers\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\RoleController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.roles.update',
        'uses' => 'App\\Http\\Controllers\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\RoleController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.roles.destroy',
        'uses' => 'App\\Http\\Controllers\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\RoleController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.discount.apply' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/apply-discount/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DiscountController@apply',
        'controller' => 'App\\Http\\Controllers\\DiscountController@apply',
        'as' => 'admin.discount.apply',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.discount.apply-courses' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/apply-discount/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DiscountController@storeApply',
        'controller' => 'App\\Http\\Controllers\\DiscountController@storeApply',
        'as' => 'admin.discount.apply-courses',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.discount.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/discount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.discount.index',
        'uses' => 'App\\Http\\Controllers\\DiscountController@index',
        'controller' => 'App\\Http\\Controllers\\DiscountController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.discount.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/discount/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.discount.create',
        'uses' => 'App\\Http\\Controllers\\DiscountController@create',
        'controller' => 'App\\Http\\Controllers\\DiscountController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.discount.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/discount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.discount.store',
        'uses' => 'App\\Http\\Controllers\\DiscountController@store',
        'controller' => 'App\\Http\\Controllers\\DiscountController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.discount.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/discount/{discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.discount.show',
        'uses' => 'App\\Http\\Controllers\\DiscountController@show',
        'controller' => 'App\\Http\\Controllers\\DiscountController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.discount.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/discount/{discount}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.discount.edit',
        'uses' => 'App\\Http\\Controllers\\DiscountController@edit',
        'controller' => 'App\\Http\\Controllers\\DiscountController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.discount.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/discount/{discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.discount.update',
        'uses' => 'App\\Http\\Controllers\\DiscountController@update',
        'controller' => 'App\\Http\\Controllers\\DiscountController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.discount.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/discount/{discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.discount.destroy',
        'uses' => 'App\\Http\\Controllers\\DiscountController@destroy',
        'controller' => 'App\\Http\\Controllers\\DiscountController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.price-tag.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/price-tag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.price-tag.index',
        'uses' => 'App\\Http\\Controllers\\CourseMembershipDiscountController@index',
        'controller' => 'App\\Http\\Controllers\\CourseMembershipDiscountController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.price-tag.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/price-tag/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.price-tag.create',
        'uses' => 'App\\Http\\Controllers\\CourseMembershipDiscountController@create',
        'controller' => 'App\\Http\\Controllers\\CourseMembershipDiscountController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.price-tag.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/price-tag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.price-tag.store',
        'uses' => 'App\\Http\\Controllers\\CourseMembershipDiscountController@store',
        'controller' => 'App\\Http\\Controllers\\CourseMembershipDiscountController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.price-tag.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/price-tag/{price_tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.price-tag.show',
        'uses' => 'App\\Http\\Controllers\\CourseMembershipDiscountController@show',
        'controller' => 'App\\Http\\Controllers\\CourseMembershipDiscountController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.price-tag.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/price-tag/{price_tag}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.price-tag.edit',
        'uses' => 'App\\Http\\Controllers\\CourseMembershipDiscountController@edit',
        'controller' => 'App\\Http\\Controllers\\CourseMembershipDiscountController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.price-tag.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/price-tag/{price_tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.price-tag.update',
        'uses' => 'App\\Http\\Controllers\\CourseMembershipDiscountController@update',
        'controller' => 'App\\Http\\Controllers\\CourseMembershipDiscountController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.price-tag.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/price-tag/{price_tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.price-tag.destroy',
        'uses' => 'App\\Http\\Controllers\\CourseMembershipDiscountController@destroy',
        'controller' => 'App\\Http\\Controllers\\CourseMembershipDiscountController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.membership.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.membership.index',
        'uses' => 'App\\Http\\Controllers\\MembershipController@index',
        'controller' => 'App\\Http\\Controllers\\MembershipController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.membership.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.membership.create',
        'uses' => 'App\\Http\\Controllers\\MembershipController@create',
        'controller' => 'App\\Http\\Controllers\\MembershipController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.membership.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/membership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.membership.store',
        'uses' => 'App\\Http\\Controllers\\MembershipController@store',
        'controller' => 'App\\Http\\Controllers\\MembershipController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.membership.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/{membership}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.membership.show',
        'uses' => 'App\\Http\\Controllers\\MembershipController@show',
        'controller' => 'App\\Http\\Controllers\\MembershipController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.membership.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/membership/{membership}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.membership.edit',
        'uses' => 'App\\Http\\Controllers\\MembershipController@edit',
        'controller' => 'App\\Http\\Controllers\\MembershipController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.membership.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/membership/{membership}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.membership.update',
        'uses' => 'App\\Http\\Controllers\\MembershipController@update',
        'controller' => 'App\\Http\\Controllers\\MembershipController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.membership.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/membership/{membership}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.membership.destroy',
        'uses' => 'App\\Http\\Controllers\\MembershipController@destroy',
        'controller' => 'App\\Http\\Controllers\\MembershipController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.moderator.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/moderator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.moderator.index',
        'uses' => 'App\\Http\\Controllers\\ModeratorController@index',
        'controller' => 'App\\Http\\Controllers\\ModeratorController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.moderator.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/moderator/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.moderator.create',
        'uses' => 'App\\Http\\Controllers\\ModeratorController@create',
        'controller' => 'App\\Http\\Controllers\\ModeratorController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.moderator.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/moderator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.moderator.store',
        'uses' => 'App\\Http\\Controllers\\ModeratorController@store',
        'controller' => 'App\\Http\\Controllers\\ModeratorController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.moderator.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/moderator/{moderator}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.moderator.show',
        'uses' => 'App\\Http\\Controllers\\ModeratorController@show',
        'controller' => 'App\\Http\\Controllers\\ModeratorController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.moderator.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/moderator/{moderator}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.moderator.edit',
        'uses' => 'App\\Http\\Controllers\\ModeratorController@edit',
        'controller' => 'App\\Http\\Controllers\\ModeratorController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.moderator.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/moderator/{moderator}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.moderator.update',
        'uses' => 'App\\Http\\Controllers\\ModeratorController@update',
        'controller' => 'App\\Http\\Controllers\\ModeratorController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.moderator.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/moderator/{moderator}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.moderator.destroy',
        'uses' => 'App\\Http\\Controllers\\ModeratorController@destroy',
        'controller' => 'App\\Http\\Controllers\\ModeratorController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-manager.moderator' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manager-moderator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagerController@moderatorIndex',
        'controller' => 'App\\Http\\Controllers\\UserManagerController@moderatorIndex',
        'as' => 'admin.user-manager.moderator',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-manager.moderator.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manager-moderator/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagerController@moderatorEdit',
        'controller' => 'App\\Http\\Controllers\\UserManagerController@moderatorEdit',
        'as' => 'admin.user-manager.moderator.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-manager.moderator.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/manager-moderator/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagerController@moderatorUpdate',
        'controller' => 'App\\Http\\Controllers\\UserManagerController@moderatorUpdate',
        'as' => 'admin.user-manager.moderator.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-manager.student' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manager-student',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagerController@studentIndex',
        'controller' => 'App\\Http\\Controllers\\UserManagerController@studentIndex',
        'as' => 'admin.user-manager.student',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-manager.student.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manager-student/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagerController@studentEdit',
        'controller' => 'App\\Http\\Controllers\\UserManagerController@studentEdit',
        'as' => 'admin.user-manager.student.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-manager.student.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/manager-student/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagerController@studentUpdate',
        'controller' => 'App\\Http\\Controllers\\UserManagerController@studentUpdate',
        'as' => 'admin.user-manager.student.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-manager.student.editToken' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manager-student/token/edit/{wallet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagerController@editToken',
        'controller' => 'App\\Http\\Controllers\\UserManagerController@editToken',
        'as' => 'admin.user-manager.student.editToken',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-manager.student.updateToken' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/manager-student/token/update/{wallet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagerController@updateToken',
        'controller' => 'App\\Http\\Controllers\\UserManagerController@updateToken',
        'as' => 'admin.user-manager.student.updateToken',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-manager.student.depositHistory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manager-student/depositHistory/{wallet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagerController@depositHistory',
        'controller' => 'App\\Http\\Controllers\\UserManagerController@depositHistory',
        'as' => 'admin.user-manager.student.depositHistory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-manager.student.paymentHistory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manager-student/paymentHistory/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagerController@paymentHistory',
        'controller' => 'App\\Http\\Controllers\\UserManagerController@paymentHistory',
        'as' => 'admin.user-manager.student.paymentHistory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-manager.tutor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manager-tutor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagerController@tutorIndex',
        'controller' => 'App\\Http\\Controllers\\UserManagerController@tutorIndex',
        'as' => 'admin.user-manager.tutor',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-manager.tutor.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manager-tutor/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagerController@tutorEdit',
        'controller' => 'App\\Http\\Controllers\\UserManagerController@tutorEdit',
        'as' => 'admin.user-manager.tutor.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-manager.tutor.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/manager-tutor/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagerController@tutorUpdate',
        'controller' => 'App\\Http\\Controllers\\UserManagerController@tutorUpdate',
        'as' => 'admin.user-manager.tutor.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-manager.change-status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/change-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserManagerController@changeStatusUser',
        'controller' => 'App\\Http\\Controllers\\UserManagerController@changeStatusUser',
        'as' => 'admin.user-manager.change-status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user-subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserSubscribeController@listSubscribe',
        'controller' => 'App\\Http\\Controllers\\UserSubscribeController@listSubscribe',
        'as' => 'admin.user-subscribe',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-subscribe.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user-subscribe/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserSubscribeController@create',
        'controller' => 'App\\Http\\Controllers\\UserSubscribeController@create',
        'as' => 'admin.user-subscribe.create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-subscribe.subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user-subscribe/subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserSubscribeController@addSubscribe',
        'controller' => 'App\\Http\\Controllers\\UserSubscribeController@addSubscribe',
        'as' => 'admin.user-subscribe.subscribe',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user-subscribe.unsubscribe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user-subscribe/unsubscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserSubscribeController@unsubscribe',
        'controller' => 'App\\Http\\Controllers\\UserSubscribeController@unsubscribe',
        'as' => 'admin.user-subscribe.unsubscribe',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.study-session.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/study-session',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.study-session.index',
        'uses' => 'App\\Http\\Controllers\\StudySessionController@index',
        'controller' => 'App\\Http\\Controllers\\StudySessionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.study-session.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/study-session/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.study-session.create',
        'uses' => 'App\\Http\\Controllers\\StudySessionController@create',
        'controller' => 'App\\Http\\Controllers\\StudySessionController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.study-session.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/study-session',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.study-session.store',
        'uses' => 'App\\Http\\Controllers\\StudySessionController@store',
        'controller' => 'App\\Http\\Controllers\\StudySessionController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.study-session.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/study-session/{study_session}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.study-session.show',
        'uses' => 'App\\Http\\Controllers\\StudySessionController@show',
        'controller' => 'App\\Http\\Controllers\\StudySessionController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.study-session.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/study-session/{study_session}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.study-session.edit',
        'uses' => 'App\\Http\\Controllers\\StudySessionController@edit',
        'controller' => 'App\\Http\\Controllers\\StudySessionController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.study-session.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/study-session/{study_session}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.study-session.update',
        'uses' => 'App\\Http\\Controllers\\StudySessionController@update',
        'controller' => 'App\\Http\\Controllers\\StudySessionController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.study-session.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/study-session/{study_session}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.study-session.destroy',
        'uses' => 'App\\Http\\Controllers\\StudySessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\StudySessionController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.wallet-manager.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/wallet-manager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.wallet-manager.index',
        'uses' => 'App\\Http\\Controllers\\WalletManagerController@index',
        'controller' => 'App\\Http\\Controllers\\WalletManagerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.wallet-manager.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/wallet-manager/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.wallet-manager.create',
        'uses' => 'App\\Http\\Controllers\\WalletManagerController@create',
        'controller' => 'App\\Http\\Controllers\\WalletManagerController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.wallet-manager.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/wallet-manager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.wallet-manager.store',
        'uses' => 'App\\Http\\Controllers\\WalletManagerController@store',
        'controller' => 'App\\Http\\Controllers\\WalletManagerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.wallet-manager.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/wallet-manager/{wallet_manager}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.wallet-manager.show',
        'uses' => 'App\\Http\\Controllers\\WalletManagerController@show',
        'controller' => 'App\\Http\\Controllers\\WalletManagerController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.wallet-manager.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/wallet-manager/{wallet_manager}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.wallet-manager.edit',
        'uses' => 'App\\Http\\Controllers\\WalletManagerController@edit',
        'controller' => 'App\\Http\\Controllers\\WalletManagerController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.wallet-manager.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/wallet-manager/{wallet_manager}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.wallet-manager.update',
        'uses' => 'App\\Http\\Controllers\\WalletManagerController@update',
        'controller' => 'App\\Http\\Controllers\\WalletManagerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.wallet-manager.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/wallet-manager/{wallet_manager}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.wallet-manager.destroy',
        'uses' => 'App\\Http\\Controllers\\WalletManagerController@destroy',
        'controller' => 'App\\Http\\Controllers\\WalletManagerController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.student-examination.grade' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/student-examination/student/{student}/course/{course}/exam/{exam}/quiz/{quiz}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentExaminationController@grade',
        'controller' => 'App\\Http\\Controllers\\StudentExaminationController@grade',
        'as' => 'admin.student-examination.grade',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.student-examination.handleGrade' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/student-examination/student/{student}/course/{course}/exam/{exam}/quiz/{quiz}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentExaminationController@handleGrade',
        'controller' => 'App\\Http\\Controllers\\StudentExaminationController@handleGrade',
        'as' => 'admin.student-examination.handleGrade',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.student-examination.comment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/student-examination/comment/{studentExam}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentExaminationController@comment',
        'controller' => 'App\\Http\\Controllers\\StudentExaminationController@comment',
        'as' => 'admin.student-examination.comment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.student-examination.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/student-examination',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.student-examination.index',
        'uses' => 'App\\Http\\Controllers\\StudentExaminationController@index',
        'controller' => 'App\\Http\\Controllers\\StudentExaminationController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.student-examination.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/student-examination/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.student-examination.create',
        'uses' => 'App\\Http\\Controllers\\StudentExaminationController@create',
        'controller' => 'App\\Http\\Controllers\\StudentExaminationController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.student-examination.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/student-examination',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.student-examination.store',
        'uses' => 'App\\Http\\Controllers\\StudentExaminationController@store',
        'controller' => 'App\\Http\\Controllers\\StudentExaminationController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.student-examination.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/student-examination/{student_examination}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.student-examination.show',
        'uses' => 'App\\Http\\Controllers\\StudentExaminationController@show',
        'controller' => 'App\\Http\\Controllers\\StudentExaminationController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.student-examination.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/student-examination/{student_examination}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.student-examination.edit',
        'uses' => 'App\\Http\\Controllers\\StudentExaminationController@edit',
        'controller' => 'App\\Http\\Controllers\\StudentExaminationController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.student-examination.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/student-examination/{student_examination}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.student-examination.update',
        'uses' => 'App\\Http\\Controllers\\StudentExaminationController@update',
        'controller' => 'App\\Http\\Controllers\\StudentExaminationController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.student-examination.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/student-examination/{student_examination}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.student-examination.destroy',
        'uses' => 'App\\Http\\Controllers\\StudentExaminationController@destroy',
        'controller' => 'App\\Http\\Controllers\\StudentExaminationController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.audio-listen.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/audio-listen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AudioListenController@store',
        'controller' => 'App\\Http\\Controllers\\AudioListenController@store',
        'as' => 'admin.audio-listen.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.audio-listen.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/audio-listen/{audioListen}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AudioListenController@update',
        'controller' => 'App\\Http\\Controllers\\AudioListenController@update',
        'as' => 'admin.audio-listen.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.setting.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.setting.index',
        'uses' => 'App\\Http\\Controllers\\SettingController@index',
        'controller' => 'App\\Http\\Controllers\\SettingController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.setting.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.setting.create',
        'uses' => 'App\\Http\\Controllers\\SettingController@create',
        'controller' => 'App\\Http\\Controllers\\SettingController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.setting.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.setting.store',
        'uses' => 'App\\Http\\Controllers\\SettingController@store',
        'controller' => 'App\\Http\\Controllers\\SettingController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.setting.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.setting.show',
        'uses' => 'App\\Http\\Controllers\\SettingController@show',
        'controller' => 'App\\Http\\Controllers\\SettingController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.setting.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/{setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.setting.edit',
        'uses' => 'App\\Http\\Controllers\\SettingController@edit',
        'controller' => 'App\\Http\\Controllers\\SettingController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.setting.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/setting/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.setting.update',
        'uses' => 'App\\Http\\Controllers\\SettingController@update',
        'controller' => 'App\\Http\\Controllers\\SettingController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.setting.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/setting/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'as' => 'admin.setting.destroy',
        'uses' => 'App\\Http\\Controllers\\SettingController@destroy',
        'controller' => 'App\\Http\\Controllers\\SettingController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.generated::viTJnoRNXSjDteHI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/edit/{key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@edit',
        'controller' => 'App\\Http\\Controllers\\SettingController@edit',
        'as' => 'admin.generated::viTJnoRNXSjDteHI',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.generated::K9WFsmILgnQCOdfh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/update/{key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@update',
        'controller' => 'App\\Http\\Controllers\\SettingController@update',
        'as' => 'admin.generated::K9WFsmILgnQCOdfh',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'as' => 'site.home',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@faq',
        'controller' => 'App\\Http\\Controllers\\HomeController@faq',
        'as' => 'site.faq',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.privacy-policy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@privacy',
        'controller' => 'App\\Http\\Controllers\\HomeController@privacy',
        'as' => 'site.privacy-policy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.terms-conditions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/terms-conditions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@terms',
        'controller' => 'App\\Http\\Controllers\\HomeController@terms',
        'as' => 'site.terms-conditions',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'as' => 'site.register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.userLogin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'throttle:30,10',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'as' => 'site.userLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.userLogout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'as' => 'site.userLogout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.userUpdatePassword' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ChangePasswordController@update',
        'controller' => 'App\\Http\\Controllers\\Auth\\ChangePasswordController@update',
        'as' => 'site.userUpdatePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.backpack.auth.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'as' => 'site.backpack.auth.password.reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'as' => 'site.',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.backpack.auth.password.reset.token' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'as' => 'site.backpack.auth.password.reset.token',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.backpack.auth.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'as' => 'site.backpack.auth.password.email',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.socialLogin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/loginby/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialAccountController@redirectToProvider',
        'controller' => 'App\\Http\\Controllers\\SocialAccountController@redirectToProvider',
        'as' => 'site.socialLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.generated::37wFuZ1NFY0kB6Nc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/loginby/{provide}/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialAccountController@handleProviderCallback',
        'controller' => 'App\\Http\\Controllers\\SocialAccountController@handleProviderCallback',
        'as' => 'site.generated::37wFuZ1NFY0kB6Nc',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.news.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/news/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\NewsController@list',
        'controller' => 'App\\Http\\Controllers\\NewsController@list',
        'as' => 'site.news.list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.news' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\NewsController@show',
        'controller' => 'App\\Http\\Controllers\\NewsController@show',
        'as' => 'site.news',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.news-detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/news/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\NewsController@newsDetail',
        'controller' => 'App\\Http\\Controllers\\NewsController@newsDetail',
        'as' => 'site.news-detail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.teams' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/teams',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@team',
        'controller' => 'App\\Http\\Controllers\\HomeController@team',
        'as' => 'site.teams',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.subject.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.subject.index',
        'uses' => 'App\\Http\\Controllers\\SubjectController@index',
        'controller' => 'App\\Http\\Controllers\\SubjectController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.subject.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/subject/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.subject.create',
        'uses' => 'App\\Http\\Controllers\\SubjectController@create',
        'controller' => 'App\\Http\\Controllers\\SubjectController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.subject.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.subject.store',
        'uses' => 'App\\Http\\Controllers\\SubjectController@store',
        'controller' => 'App\\Http\\Controllers\\SubjectController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.subject.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/subject/{subject}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.subject.show',
        'uses' => 'App\\Http\\Controllers\\SubjectController@show',
        'controller' => 'App\\Http\\Controllers\\SubjectController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.subject.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/subject/{subject}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.subject.edit',
        'uses' => 'App\\Http\\Controllers\\SubjectController@edit',
        'controller' => 'App\\Http\\Controllers\\SubjectController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.subject.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'site/subject/{subject}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.subject.update',
        'uses' => 'App\\Http\\Controllers\\SubjectController@update',
        'controller' => 'App\\Http\\Controllers\\SubjectController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.subject.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'site/subject/{subject}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.subject.destroy',
        'uses' => 'App\\Http\\Controllers\\SubjectController@destroy',
        'controller' => 'App\\Http\\Controllers\\SubjectController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.certificate.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/certificate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.certificate.index',
        'uses' => 'App\\Http\\Controllers\\CertificateController@index',
        'controller' => 'App\\Http\\Controllers\\CertificateController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.certificate.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/certificate/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.certificate.create',
        'uses' => 'App\\Http\\Controllers\\CertificateController@create',
        'controller' => 'App\\Http\\Controllers\\CertificateController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.certificate.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/certificate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.certificate.store',
        'uses' => 'App\\Http\\Controllers\\CertificateController@store',
        'controller' => 'App\\Http\\Controllers\\CertificateController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.certificate.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/certificate/{certificate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.certificate.show',
        'uses' => 'App\\Http\\Controllers\\CertificateController@show',
        'controller' => 'App\\Http\\Controllers\\CertificateController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.certificate.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/certificate/{certificate}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.certificate.edit',
        'uses' => 'App\\Http\\Controllers\\CertificateController@edit',
        'controller' => 'App\\Http\\Controllers\\CertificateController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.certificate.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'site/certificate/{certificate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.certificate.update',
        'uses' => 'App\\Http\\Controllers\\CertificateController@update',
        'controller' => 'App\\Http\\Controllers\\CertificateController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.certificate.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'site/certificate/{certificate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.certificate.destroy',
        'uses' => 'App\\Http\\Controllers\\CertificateController@destroy',
        'controller' => 'App\\Http\\Controllers\\CertificateController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.document' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/document/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\CertificateController@documentDetail',
        'controller' => 'App\\Http\\Controllers\\CertificateController@documentDetail',
        'as' => 'site.document',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.course.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/course/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@search',
        'controller' => 'App\\Http\\Controllers\\CourseController@search',
        'as' => 'site.course.search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.course.lectureList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/course/lectures/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@lectureList',
        'controller' => 'App\\Http\\Controllers\\CourseController@lectureList',
        'as' => 'site.course.lectureList',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.course.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/course/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.course.create',
        'uses' => 'App\\Http\\Controllers\\CourseController@create',
        'controller' => 'App\\Http\\Controllers\\CourseController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.course.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/course/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.course.show',
        'uses' => 'App\\Http\\Controllers\\CourseController@show',
        'controller' => 'App\\Http\\Controllers\\CourseController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.course.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/course/{course}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.course.edit',
        'uses' => 'App\\Http\\Controllers\\CourseController@edit',
        'controller' => 'App\\Http\\Controllers\\CourseController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.course.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'site/course/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'as' => 'site.course.destroy',
        'uses' => 'App\\Http\\Controllers\\CourseController@destroy',
        'controller' => 'App\\Http\\Controllers\\CourseController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.blog-view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/blog-view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@blog',
        'controller' => 'App\\Http\\Controllers\\HomeController@blog',
        'as' => 'site.blog-view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.blog.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/blog/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@list',
        'controller' => 'App\\Http\\Controllers\\BlogController@list',
        'as' => 'site.blog.list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.show-blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/show-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@showBlogPage',
        'controller' => 'App\\Http\\Controllers\\BlogController@showBlogPage',
        'as' => 'site.show-blog',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.show-blog-tag' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/show-blog/tag/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@showBlogPageByTag',
        'controller' => 'App\\Http\\Controllers\\BlogController@showBlogPageByTag',
        'as' => 'site.show-blog-tag',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.blog.list.tag' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/blog/tag/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@listByTag',
        'controller' => 'App\\Http\\Controllers\\BlogController@listByTag',
        'as' => 'site.blog.list.tag',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.view-blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/view-blog/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@viewBlog',
        'controller' => 'App\\Http\\Controllers\\BlogController@viewBlog',
        'as' => 'site.view-blog',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.forumAnswers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/forumAnswer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@forumAnswers',
        'controller' => 'App\\Http\\Controllers\\HomeController@forumAnswers',
        'as' => 'site.forumAnswers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.customerSubscribe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
        ),
        'uses' => 'App\\Http\\Controllers\\UserSubscribeController@customerSubscribe',
        'controller' => 'App\\Http\\Controllers\\UserSubscribeController@customerSubscribe',
        'as' => 'site.customerSubscribe',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.file.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/file/download/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FileController@download',
        'controller' => 'App\\Http\\Controllers\\FileController@download',
        'as' => 'site.file.download',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.payment.add-payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/payment/add-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@addPayment',
        'controller' => 'App\\Http\\Controllers\\PaymentController@addPayment',
        'as' => 'site.payment.add-payment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.payment.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'as' => 'site.payment.index',
        'uses' => 'App\\Http\\Controllers\\PaymentController@index',
        'controller' => 'App\\Http\\Controllers\\PaymentController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.payment.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/payment/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'as' => 'site.payment.create',
        'uses' => 'App\\Http\\Controllers\\PaymentController@create',
        'controller' => 'App\\Http\\Controllers\\PaymentController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.payment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'as' => 'site.payment.store',
        'uses' => 'App\\Http\\Controllers\\PaymentController@store',
        'controller' => 'App\\Http\\Controllers\\PaymentController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.payment.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/payment/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'as' => 'site.payment.show',
        'uses' => 'App\\Http\\Controllers\\PaymentController@show',
        'controller' => 'App\\Http\\Controllers\\PaymentController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.payment.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/payment/{payment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'as' => 'site.payment.edit',
        'uses' => 'App\\Http\\Controllers\\PaymentController@edit',
        'controller' => 'App\\Http\\Controllers\\PaymentController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.payment.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'site/payment/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'as' => 'site.payment.update',
        'uses' => 'App\\Http\\Controllers\\PaymentController@update',
        'controller' => 'App\\Http\\Controllers\\PaymentController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.payment.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'site/payment/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'as' => 'site.payment.destroy',
        'uses' => 'App\\Http\\Controllers\\PaymentController@destroy',
        'controller' => 'App\\Http\\Controllers\\PaymentController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.order.addCard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/order/addCard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@addCard',
        'controller' => 'App\\Http\\Controllers\\OrderController@addCard',
        'as' => 'site.order.addCard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.order.updateCard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/order/updateCard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@updateCard',
        'controller' => 'App\\Http\\Controllers\\OrderController@updateCard',
        'as' => 'site.order.updateCard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.order.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'as' => 'site.order.index',
        'uses' => 'App\\Http\\Controllers\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\OrderController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.order.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/order/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'as' => 'site.order.create',
        'uses' => 'App\\Http\\Controllers\\OrderController@create',
        'controller' => 'App\\Http\\Controllers\\OrderController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.order.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'as' => 'site.order.store',
        'uses' => 'App\\Http\\Controllers\\OrderController@store',
        'controller' => 'App\\Http\\Controllers\\OrderController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.order.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/order/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'as' => 'site.order.show',
        'uses' => 'App\\Http\\Controllers\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\OrderController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.order.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/order/{order}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'as' => 'site.order.edit',
        'uses' => 'App\\Http\\Controllers\\OrderController@edit',
        'controller' => 'App\\Http\\Controllers\\OrderController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.order.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'site/order/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'as' => 'site.order.update',
        'uses' => 'App\\Http\\Controllers\\OrderController@update',
        'controller' => 'App\\Http\\Controllers\\OrderController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.order.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'site/order/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'as' => 'site.order.destroy',
        'uses' => 'App\\Http\\Controllers\\OrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\OrderController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.payment-history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/payment-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@paymentHistory',
        'controller' => 'App\\Http\\Controllers\\OrderController@paymentHistory',
        'as' => 'site.payment-history',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.add-visa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/add-visa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@addVisa',
        'controller' => 'App\\Http\\Controllers\\WalletController@addVisa',
        'as' => 'site.add-visa',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.store-card' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/store-card',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@storeCard',
        'controller' => 'App\\Http\\Controllers\\WalletController@storeCard',
        'as' => 'site.store-card',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.post.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.post.index',
        'uses' => 'App\\Http\\Controllers\\PostController@index',
        'controller' => 'App\\Http\\Controllers\\PostController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.post.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/post/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.post.create',
        'uses' => 'App\\Http\\Controllers\\PostController@create',
        'controller' => 'App\\Http\\Controllers\\PostController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.post.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.post.store',
        'uses' => 'App\\Http\\Controllers\\PostController@store',
        'controller' => 'App\\Http\\Controllers\\PostController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.post.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/post/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.post.show',
        'uses' => 'App\\Http\\Controllers\\PostController@show',
        'controller' => 'App\\Http\\Controllers\\PostController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.post.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/post/{post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.post.edit',
        'uses' => 'App\\Http\\Controllers\\PostController@edit',
        'controller' => 'App\\Http\\Controllers\\PostController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.post.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'site/post/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.post.update',
        'uses' => 'App\\Http\\Controllers\\PostController@update',
        'controller' => 'App\\Http\\Controllers\\PostController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.post.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'site/post/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.post.destroy',
        'uses' => 'App\\Http\\Controllers\\PostController@destroy',
        'controller' => 'App\\Http\\Controllers\\PostController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.pinComment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/pin-comment/{post_id}/{comment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PostController@pinComment',
        'controller' => 'App\\Http\\Controllers\\PostController@pinComment',
        'as' => 'site.pinComment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.show-post-tag' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/show-post/tag/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PostController@showPostByTag',
        'controller' => 'App\\Http\\Controllers\\PostController@showPostByTag',
        'as' => 'site.show-post-tag',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.comment.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.comment.index',
        'uses' => 'App\\Http\\Controllers\\CommentController@index',
        'controller' => 'App\\Http\\Controllers\\CommentController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.comment.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/comment/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.comment.create',
        'uses' => 'App\\Http\\Controllers\\CommentController@create',
        'controller' => 'App\\Http\\Controllers\\CommentController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.comment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.comment.store',
        'uses' => 'App\\Http\\Controllers\\CommentController@store',
        'controller' => 'App\\Http\\Controllers\\CommentController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.comment.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/comment/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.comment.show',
        'uses' => 'App\\Http\\Controllers\\CommentController@show',
        'controller' => 'App\\Http\\Controllers\\CommentController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.comment.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/comment/{comment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.comment.edit',
        'uses' => 'App\\Http\\Controllers\\CommentController@edit',
        'controller' => 'App\\Http\\Controllers\\CommentController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.comment.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'site/comment/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.comment.update',
        'uses' => 'App\\Http\\Controllers\\CommentController@update',
        'controller' => 'App\\Http\\Controllers\\CommentController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.comment.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'site/comment/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.comment.destroy',
        'uses' => 'App\\Http\\Controllers\\CommentController@destroy',
        'controller' => 'App\\Http\\Controllers\\CommentController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user-like.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/user-like',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.user-like.index',
        'uses' => 'App\\Http\\Controllers\\UserLikeController@index',
        'controller' => 'App\\Http\\Controllers\\UserLikeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user-like.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/user-like/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.user-like.create',
        'uses' => 'App\\Http\\Controllers\\UserLikeController@create',
        'controller' => 'App\\Http\\Controllers\\UserLikeController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user-like.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/user-like',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.user-like.store',
        'uses' => 'App\\Http\\Controllers\\UserLikeController@store',
        'controller' => 'App\\Http\\Controllers\\UserLikeController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user-like.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/user-like/{user_like}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.user-like.show',
        'uses' => 'App\\Http\\Controllers\\UserLikeController@show',
        'controller' => 'App\\Http\\Controllers\\UserLikeController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user-like.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/user-like/{user_like}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.user-like.edit',
        'uses' => 'App\\Http\\Controllers\\UserLikeController@edit',
        'controller' => 'App\\Http\\Controllers\\UserLikeController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user-like.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'site/user-like/{user_like}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.user-like.update',
        'uses' => 'App\\Http\\Controllers\\UserLikeController@update',
        'controller' => 'App\\Http\\Controllers\\UserLikeController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user-like.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'site/user-like/{user_like}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.user-like.destroy',
        'uses' => 'App\\Http\\Controllers\\UserLikeController@destroy',
        'controller' => 'App\\Http\\Controllers\\UserLikeController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.profile.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.profile.index',
        'uses' => 'App\\Http\\Controllers\\ProfileController@index',
        'controller' => 'App\\Http\\Controllers\\ProfileController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.profile.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/profile/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.profile.create',
        'uses' => 'App\\Http\\Controllers\\ProfileController@create',
        'controller' => 'App\\Http\\Controllers\\ProfileController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.profile.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.profile.store',
        'uses' => 'App\\Http\\Controllers\\ProfileController@store',
        'controller' => 'App\\Http\\Controllers\\ProfileController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.profile.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/profile/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.profile.show',
        'uses' => 'App\\Http\\Controllers\\ProfileController@show',
        'controller' => 'App\\Http\\Controllers\\ProfileController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/profile/{profile}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.profile.edit',
        'uses' => 'App\\Http\\Controllers\\ProfileController@edit',
        'controller' => 'App\\Http\\Controllers\\ProfileController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'site/profile/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.profile.update',
        'uses' => 'App\\Http\\Controllers\\ProfileController@update',
        'controller' => 'App\\Http\\Controllers\\ProfileController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.profile.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'site/profile/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.profile.destroy',
        'uses' => 'App\\Http\\Controllers\\ProfileController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProfileController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.uploadAvatar' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'site/uploadAvatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@uploadAvatar',
        'controller' => 'App\\Http\\Controllers\\ProfileController@uploadAvatar',
        'as' => 'site.uploadAvatar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.rating.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.rating.index',
        'uses' => 'App\\Http\\Controllers\\RatingController@index',
        'controller' => 'App\\Http\\Controllers\\RatingController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.rating.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/rating/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.rating.create',
        'uses' => 'App\\Http\\Controllers\\RatingController@create',
        'controller' => 'App\\Http\\Controllers\\RatingController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.rating.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.rating.store',
        'uses' => 'App\\Http\\Controllers\\RatingController@store',
        'controller' => 'App\\Http\\Controllers\\RatingController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.rating.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/rating/{rating}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.rating.show',
        'uses' => 'App\\Http\\Controllers\\RatingController@show',
        'controller' => 'App\\Http\\Controllers\\RatingController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.rating.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/rating/{rating}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.rating.edit',
        'uses' => 'App\\Http\\Controllers\\RatingController@edit',
        'controller' => 'App\\Http\\Controllers\\RatingController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.rating.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'site/rating/{rating}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.rating.update',
        'uses' => 'App\\Http\\Controllers\\RatingController@update',
        'controller' => 'App\\Http\\Controllers\\RatingController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.rating.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'site/rating/{rating}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.rating.destroy',
        'uses' => 'App\\Http\\Controllers\\RatingController@destroy',
        'controller' => 'App\\Http\\Controllers\\RatingController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.lecture.showLecture' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/lecture/showLecture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LectureController@showLecture',
        'controller' => 'App\\Http\\Controllers\\LectureController@showLecture',
        'as' => 'site.lecture.showLecture',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.lecture.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/lecture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.lecture.index',
        'uses' => 'App\\Http\\Controllers\\LectureController@index',
        'controller' => 'App\\Http\\Controllers\\LectureController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.lecture.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/lecture/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.lecture.create',
        'uses' => 'App\\Http\\Controllers\\LectureController@create',
        'controller' => 'App\\Http\\Controllers\\LectureController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.lecture.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/lecture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.lecture.store',
        'uses' => 'App\\Http\\Controllers\\LectureController@store',
        'controller' => 'App\\Http\\Controllers\\LectureController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.lecture.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/lecture/{lecture}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.lecture.show',
        'uses' => 'App\\Http\\Controllers\\LectureController@show',
        'controller' => 'App\\Http\\Controllers\\LectureController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.lecture.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/lecture/{lecture}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.lecture.edit',
        'uses' => 'App\\Http\\Controllers\\LectureController@edit',
        'controller' => 'App\\Http\\Controllers\\LectureController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.lecture.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'site/lecture/{lecture}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.lecture.update',
        'uses' => 'App\\Http\\Controllers\\LectureController@update',
        'controller' => 'App\\Http\\Controllers\\LectureController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.lecture.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'site/lecture/{lecture}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'as' => 'site.lecture.destroy',
        'uses' => 'App\\Http\\Controllers\\LectureController@destroy',
        'controller' => 'App\\Http\\Controllers\\LectureController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.exam.handleSubmitAnswer' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/exam/handleSubmit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentExaminationController@handleSubmitAnswer',
        'controller' => 'App\\Http\\Controllers\\StudentExaminationController@handleSubmitAnswer',
        'as' => 'site.exam.handleSubmitAnswer',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.exam.showLecture' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/exam/{exams}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LectureController@showExam',
        'controller' => 'App\\Http\\Controllers\\LectureController@showExam',
        'as' => 'site.exam.showLecture',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.exam.viewedExam' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/exam/viewed/{studentExam}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentExaminationController@viewedExam',
        'controller' => 'App\\Http\\Controllers\\StudentExaminationController@viewedExam',
        'as' => 'site.exam.viewedExam',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.exam.getReadingAssessmentQuestionsClient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/exam/readingAssessment/{exams}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@getReadingAssessmentQuestionsClient',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@getReadingAssessmentQuestionsClient',
        'as' => 'site.exam.getReadingAssessmentQuestionsClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.exam.getReadingExerciseQuestionsClient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/exam/readingExercise/{exams}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@getReadingExerciseQuestionsClient',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@getReadingExerciseQuestionsClient',
        'as' => 'site.exam.getReadingExerciseQuestionsClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.exam.getReadingQuizQuestionsClient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/exam/readingQuiz/{exams}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@getReadingQuizQuestionsClient',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@getReadingQuizQuestionsClient',
        'as' => 'site.exam.getReadingQuizQuestionsClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.exam.getWritingAssessmentQuestionsClient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/exam/writingAssessment/{exams}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@getWritingAssessmentQuestionsClient',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@getWritingAssessmentQuestionsClient',
        'as' => 'site.exam.getWritingAssessmentQuestionsClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.exam.getWritingExerciseQuestionsClient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/exam/writingExercise/{exams}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@getWritingExerciseQuestionsClient',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@getWritingExerciseQuestionsClient',
        'as' => 'site.exam.getWritingExerciseQuestionsClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.exam.getWritingQuizQuestionsClient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/exam/writingQuiz/{exams}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@getWritingQuizQuestionsClient',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@getWritingQuizQuestionsClient',
        'as' => 'site.exam.getWritingQuizQuestionsClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.exam.getListeningAssessmentQuestionsClient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/exam/listenAssessment/{exams}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@getListeningAssessmentQuestionsClient',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@getListeningAssessmentQuestionsClient',
        'as' => 'site.exam.getListeningAssessmentQuestionsClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.exam.getListeningExerciseQuestionsClient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/exam/listenExercise/{exams}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@getListeningExerciseQuestionsClient',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@getListeningExerciseQuestionsClient',
        'as' => 'site.exam.getListeningExerciseQuestionsClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.exam.getListeningQuizQuestionsClient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/exam/listenQuiz/{exams}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@getListeningQuizQuestionsClient',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@getListeningQuizQuestionsClient',
        'as' => 'site.exam.getListeningQuizQuestionsClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.showExam' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/course/{course}/exam/{exam}/quiz/{quiz}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@showExam',
        'controller' => 'App\\Http\\Controllers\\CourseController@showExam',
        'as' => 'site.showExam',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.exam.getSpeakingAssessmentQuestionsClient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/exam/speakingAssessment/{exams}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@getSpeakingAssessmentQuestionsClient',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@getSpeakingAssessmentQuestionsClient',
        'as' => 'site.exam.getSpeakingAssessmentQuestionsClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.exam.getSpeakingExerciseQuestionsClient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/exam/speakingExercise/{exams}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@getSpeakingExerciseQuestionsClient',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@getSpeakingExerciseQuestionsClient',
        'as' => 'site.exam.getSpeakingExerciseQuestionsClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.exam.getSpeakingQuizQuestionsClient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/exam/speakingQuiz/{exams}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ExaminationController@getSpeakingQuizQuestionsClient',
        'controller' => 'App\\Http\\Controllers\\ExaminationController@getSpeakingQuizQuestionsClient',
        'as' => 'site.exam.getSpeakingQuizQuestionsClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.live_show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/live/{room_live_course_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LiveController@show',
        'controller' => 'App\\Http\\Controllers\\LiveController@show',
        'as' => 'site.live_show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.course.related.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/course/related/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@courseListRelatedClient',
        'controller' => 'App\\Http\\Controllers\\CourseController@courseListRelatedClient',
        'as' => 'site.course.related.list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.token.skipPrice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/token/skipPrice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SkipLevelController@skipPrice',
        'controller' => 'App\\Http\\Controllers\\SkipLevelController@skipPrice',
        'as' => 'site.token.skipPrice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.token.skipPrice.pay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/token/skipPrice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SkipLevelController@paymentSkipLevel',
        'controller' => 'App\\Http\\Controllers\\SkipLevelController@paymentSkipLevel',
        'as' => 'site.token.skipPrice.pay',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.lecture.getLectureRelated' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/lecture/lectureRelated',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LectureController@getLectureRelated',
        'controller' => 'App\\Http\\Controllers\\LectureController@getLectureRelated',
        'as' => 'site.lecture.getLectureRelated',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.course' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/course',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@my',
        'controller' => 'App\\Http\\Controllers\\CourseController@my',
        'as' => 'site.user.course',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.wishlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@wishlist',
        'controller' => 'App\\Http\\Controllers\\HomeController@wishlist',
        'as' => 'site.user.wishlist',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.calendar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/calendar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@index',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@index',
        'as' => 'site.user.calendar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.getMonth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/calendar/{month}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@getMonth',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@getMonth',
        'as' => 'site.user.getMonth',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@index',
        'controller' => 'App\\Http\\Controllers\\WalletController@index',
        'as' => 'site.user.wallet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.top-up' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/wallet/top-up',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@topUpIndex',
        'controller' => 'App\\Http\\Controllers\\WalletController@topUpIndex',
        'as' => 'site.user.top-up',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.top-up-to' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/my/wallet/top-up/top-up-to',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@topUpToWallet',
        'controller' => 'App\\Http\\Controllers\\WalletController@topUpToWallet',
        'as' => 'site.user.top-up-to',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.topUp-success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/wallet/top-up/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@topUpSuccess',
        'controller' => 'App\\Http\\Controllers\\WalletController@topUpSuccess',
        'as' => 'site.user.topUp-success',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.wallet.listHistory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/wallet/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@listTopUp',
        'controller' => 'App\\Http\\Controllers\\WalletController@listTopUp',
        'as' => 'site.user.wallet.listHistory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.wallet.listPayment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/wallet/list-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@listPayment',
        'controller' => 'App\\Http\\Controllers\\WalletController@listPayment',
        'as' => 'site.user.wallet.listPayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.wallet.payment-history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/wallet/payment-history/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@paymentHistory',
        'controller' => 'App\\Http\\Controllers\\WalletController@paymentHistory',
        'as' => 'site.user.wallet.payment-history',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.top-up-history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/wallet/top-up-history/{transaction}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@topUpHistory',
        'controller' => 'App\\Http\\Controllers\\WalletController@topUpHistory',
        'as' => 'site.user.top-up-history',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.wallet.redirectSuccess' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/wallet/top-up/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@redirectSuccess',
        'controller' => 'App\\Http\\Controllers\\WalletController@redirectSuccess',
        'as' => 'site.user.wallet.redirectSuccess',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/payment/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@payment',
        'controller' => 'App\\Http\\Controllers\\WalletController@payment',
        'as' => 'site.user.payment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/confirm-payment/{product_id}/{room}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@confirmPayment',
        'controller' => 'App\\Http\\Controllers\\WalletController@confirmPayment',
        'as' => 'site.user.confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/confirm-payment/payment-success/{product_id}/{room}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@paymentSuccess',
        'controller' => 'App\\Http\\Controllers\\WalletController@paymentSuccess',
        'as' => 'site.user.success',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.pay-success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/success/{course_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\WalletController@success',
        'controller' => 'App\\Http\\Controllers\\WalletController@success',
        'as' => 'site.user.pay-success',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.paywithpaypal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/paywithpaypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\PaypalController@payWithPaypal',
        'controller' => 'App\\Http\\Controllers\\PaypalController@payWithPaypal',
        'as' => 'site.user.paywithpaypal',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.paypal' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'site/my/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\PaypalController@postPaymentWithpaypal',
        'controller' => 'App\\Http\\Controllers\\PaypalController@postPaymentWithpaypal',
        'as' => 'site.user.paypal',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'site.user.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'site/my/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'language',
          2 => 'auth',
          3 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\PaypalController@getPaymentStatus',
        'controller' => 'App\\Http\\Controllers\\PaypalController@getPaymentStatus',
        'as' => 'site.user.status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'site/my',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
