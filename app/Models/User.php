<?php

namespace App\Models;

use App\Jobs\RandUserExp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $table = 'users';
    protected $fillable = ['nickname', 'firstname', 'lastname', 'avatar', 'phone', 'sex', 'is_mail_allowed', 'experience'];


    public function articles() {
        return $this->belongsToMany(Article::class);
    }
}
