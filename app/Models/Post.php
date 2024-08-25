<?php

namespace App\Models;

use App\Models\User;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, HasApiTokens;
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = ['title', 'user_id', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
