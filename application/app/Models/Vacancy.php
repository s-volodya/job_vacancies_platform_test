<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacancy extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'creator_id',
        'title',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function responses()
    {
        return $this->hasMany(Response::class);
    }

    public function likes()
    {
        return $this->hasMany(VacancyLike::class);
    }

    public static function createNew($data)
    {
        $creator = User::find($data['creator_id']);

        if ($creator->coins >= 2) {
            $creator->decrement('coins', 2);

            return self::create($data);
        }

        return [];
    }
}
