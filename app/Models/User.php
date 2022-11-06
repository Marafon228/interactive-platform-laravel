<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fio',
        'date_of_birth',
        'country',
        'city',
        'citizenship',
        'gender',
        'phone',
        'email',
        'education',
        'employment',
        'work_experience',
        'skills',
        'achievements',
        'presence_team',
        'role_team',
        'patent',
        'company',
        'role',
        'password',
        'profile_image',
        'id_team',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*public function currentIdea(){
        return $this->belongsTo(CurrentIdea::class, 'id_current_idea','id');
    }
    public function sciencetIdea(){
        return $this->belongsTo(ScienceIdea::class, 'id_science_idea','id');
    }*/

    public function comments(){
        return $this->hasMany(Comment::class, 'id_user','id');
    }

    public function any_idea()
    {
        return $this->belongsToMany(AnyIdea::class);
    }

}
