<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'liker_id'
    ];

    public function liker_user()
    {
        return $this->belongsTo(User::class, 'liker_id');
    }

    public function liked_user()
    {
        return $this->belongsTo(User::class, 'liked_user_id');
    }

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class, 'liked_vacancy_id');
    }
}
