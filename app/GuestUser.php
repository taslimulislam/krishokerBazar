<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestUser extends Model
{
    public $timestamps = false;
    protected $table = 'guest_user';
}
