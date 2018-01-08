<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Employer extends Model
{
    use HasRoles;
    protected $guard_name = 'web';

    protected $fillable = [
        'CompanyName',
        'CompanyType',
        'CPerson',
        'Designation',
        'AccountName',
        'Password',
        'OfficeNo',
        'MobileNo',
        'FaxNo',
        'EmailId',
        'CRNo',
        'MailboxNo',
        'StreetName',
        'City'
    ];
}
