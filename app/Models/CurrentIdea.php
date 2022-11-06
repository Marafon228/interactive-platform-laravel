<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class CurrentIdea extends Model
{

    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;

    protected $table = 'current_idea';

    protected $primaryKey = 'id';

    protected $fillable = [
        'participation_experience_count',
        'id_team_captain',
        'selected_task',
        'summary',
    ];
}
