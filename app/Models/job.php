<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    protected $table = 'job_listings';

    protected $fillable = [
        'title',
        'salary',
        'employer_id'
    ];

    public function employer()
    {
        return $this->belongsTo(employer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
