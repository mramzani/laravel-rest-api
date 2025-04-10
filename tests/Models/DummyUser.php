<?php

namespace Mramzani\RestAPI\Tests\Models;

use Mramzani\RestAPI\ApiModel;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DummyUser extends ApiModel
{

    protected $table = 'dummy_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'age',
    ];

    protected $filterable = [
        'name', 'email', 'age',
    ];


    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function phone()
    {
        return $this->hasOne('Mramzani\RestAPI\Tests\Models\DummyPhone', 'user_id', 'id');
    }

    /**
     * The posts that belong to the user.
     */
    public function posts()
    {
        return $this->hasMany('Mramzani\RestAPI\Tests\Models\DummyPost', 'user_id', 'id');
    }

    /**
     * The comments that belong to the user.
     */
    public function comments()
    {
        return $this->hasMany('Mramzani\RestAPI\Tests\Models\DummyComment', 'user_id', 'id');
    }
}
