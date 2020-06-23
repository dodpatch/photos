<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'settings',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

public function images()
{
    return $this->hasMany(Image::class);
}

public function getAdminAttribute(){
    return $this->role === 'admin';
}

public function getAdultAttribute()
{
    return $this->settings->adult;
}

public function getSettingsAttribute($value)
{
    return json_decode ($value);

}
/**
     * Set the adult attribute.
     *
     * @param  bool  $value
     * @return void
 */
    public function setAdultAttribute($value)
    {
        $this->attributes['settings'] = json_encode ([
            'adult' => $value,
            'pagination' => $this->settings->pagination
        ]);
    }
}