<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'candidate_id',
        'JobType',
        'CurrentIndustry',
        'CurrentLevel',
        'FunctionalArea',
        'Specialization',
        'KeySkills',
        'Experience',
        'CurrentEmployer',
        'PreviousEmployer',
        'CurrentMonthSal',
        'HighestQua',
        'AreaOfSt',
        'Institution',
        'Completed',
        'Availability',
        'Attachment'
    ];
}
