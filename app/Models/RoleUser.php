<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{

    protected $table = 'role_user';

    public $timestamps = TRUE;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'id');
    }

    public function isSuperAdmin()
    {
        return $this->role_id == Role::$SUPPER_ADMIN_TYPE;
    }

    public function isAdmin()
    {
        return $this->role_id == Role::$ADMIN_TYPE;
    }

    public function isMember()
    {
        return $this->role_id == Role::$MEMBER_TYPE;
    }

}
