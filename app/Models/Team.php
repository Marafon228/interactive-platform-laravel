<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'team';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'id_current_idea',
        'id_science_idea',
    ];



    public $timestamps = false;

}
