<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use TypeError;

class Article extends Model
{
    use SoftDeletes;

    protected $table = 'articles';
    protected $fillable = ['text'];


    public function users() {
        return $this->belongsToMany(User::class);
    }


    public function isAuthor(mixed $user) {
        if (!$user instanceof User) {
            throw new TypeError('mismatch');
        }
        if ($this->trashed()) {
            return null;
        }
        return !$this->users()->where('user_id', $user->id)->get()->isEmpty();
        //throw new TypeError('mismacth');
    }
}
