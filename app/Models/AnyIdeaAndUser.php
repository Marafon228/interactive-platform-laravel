<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnyIdeaAndUser extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'any_ideas_users';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id_any_idea',
        'id_user',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function any_idea()
    {
        return $this->belongsToMany(User::class);
    }
}
