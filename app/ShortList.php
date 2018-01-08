<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortList extends Model
{
    protected $fillable = [
        'employer_id',
        'interview_id',
        'candidate_id',
        'result'
    ];
}
