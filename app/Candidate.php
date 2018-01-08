<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'FullName',
        'AccountName',
        'image',
        'Password',
        'Sex',
        'HomeNo',
        'MobileNo',
        'EmailId',
        'NIC',
        'PassportNo',
        'HouseNo',
        'StreetName',
        'City',
        'GSDivision'
    ];
}
