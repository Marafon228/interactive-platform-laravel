<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AnyIdea extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;

    protected $table = 'any_idea';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'link_project',
        'presentation',
        'participation_experience',
    ];

    public function anyIdeaAndUser(){
        return $this->belongsTo(User::class,'id_user', 'id');
    }

    public function comment(){
        return $this->hasMany(Comment::class, 'id_user','id');
    }

    /*public function comments(){
        return $this->hasMany(Comment::class, 'id_comment','id');
    }*/

    public function __invoke(){
        $comments = auth()->user()->comments;
        return view('any_idea.show');
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }



}
