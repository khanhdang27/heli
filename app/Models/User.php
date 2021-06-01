<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use \App\Utilities\MapData;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;


    protected $table = 'users';

    private $_roles = NULL;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     /**
     * Add a mutator to ensure hashed passwords
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * @return bool
     */
    public function isGuest(): bool
    {

        return \Auth::guest();
    }

    /**
     * @return bool
     */
    public function isSuperAdmin(): bool
    {
        if ($this->_roles == NULL) {
            $this->_roles = $this->roles()->first();
        }
        return $this->_roles->isSuperAdmin();
    }

    /**
     * @return bool
     */
    public function isAdmin(): bool
    {
        if ($this->_roles == NULL) {
            $this->_roles = $this->roles()->first();
        }
        return $this->_roles->isAdmin();
    }

    /**
     * @return bool
     */
    public function isMember(): bool
    {
        if ($this->_roles === NULL) {
            $this->_roles = $this->roles()->first();
        }
        return $this->_roles->isMember();
    }

    /**
     * @return bool
     */
    public function isTutor(): bool
    {
        if ($this->_roles == NULL) {
            $this->_roles = $this->roles()->first();
        }
        return $this->_roles->isTutor();
    }

    public function avatar()
    {
        return $this->morphToMany(File::class, 'file_refer');
    }


}
