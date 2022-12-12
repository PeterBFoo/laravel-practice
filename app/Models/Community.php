<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    protected $table = "communities";
    protected $fillable = ['name', 'description', 'membersCount'];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function post() {
        return $this->hasMany(Post::class);
    }
}
