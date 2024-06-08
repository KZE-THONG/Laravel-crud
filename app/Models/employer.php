<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    use HasFactory;

    protected $table = 'employers';

    protected $fillable = [
        'name',
        'user_id',
    ];

    // public function job()
    // {
    //     return $this->hasMany(Job::class);
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
