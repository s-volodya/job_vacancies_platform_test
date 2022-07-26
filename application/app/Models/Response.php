<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'vacancy_id',
        'message'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}
