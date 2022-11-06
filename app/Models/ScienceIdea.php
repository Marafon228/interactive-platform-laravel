<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ScienceIdea extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;

    protected $table = 'science_idea';

    protected $primaryKey = 'id';

    protected $fillable = [
        'inn',
        'address',
        'nomination',
        'direction',
        'revenue',
        'project_readiness_stage',
        'experience_participation',
        'name',
        'description',
        'link_project',
        'presentation',
        'business_plan',
        'copies_security_documents',
        'confirmation_project_development',
        'media_file',
    ];
}
