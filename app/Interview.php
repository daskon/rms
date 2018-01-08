<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $fillable = [
        'candidate_id',
        'employer_id',
        'hiring_manager',
        'PostOf',
        'DateTime',
        'Link',
        'Status',
        'Comment'
    ];
}
