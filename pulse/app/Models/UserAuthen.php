<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserAuthen extends Authenticatable
{
    protected $table = 'UserAuthen';

    protected $primaryKey = 'userID';

    public $timestamps = false;

    protected $fillable = [
        'userName',
        'userPass',
    ];

    protected $hidden = [
        'userPass',
    ];

    public function getAuthPassword()
    {
        return $this->userPass;
    }
}