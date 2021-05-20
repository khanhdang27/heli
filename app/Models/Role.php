<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $primaryKey = 'id';

    public $timestamps = TRUE;

    protected $guarded = [];

    static $SUPPER_ADMIN_TYPE = 1;
    static $ADMIN_TYPE = 2;
    static $MEMBER_TYPE = 3;
    static $TUTOR_TYPE = 4;

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_users');
    }

    /**
     * @return bool
     */
    public function isSuperAdmin(): bool
    {
        return $this->id == self::$SUPPER_ADMIN_TYPE;
    }

    /**
     * @return bool
     */
    public function isAdmin(): bool
    {

        return $this->id == self::$ADMIN_TYPE;
    }

    /**
     * @return bool
     */
    public function isMember(): bool
    {
        return $this->id == self::$MEMBER_TYPE;
    }

    /**
     * @return bool
     */
    public function isTutor(): bool
    {
        return $this->id == self::$TUTOR_TYPE;
    }


}
