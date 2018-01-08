<?php

namespace App;

class Permission extends \Spatie\Permission\Models\Permission
{
    public static function defaultPermissions()
    {
        return [
            'viewCandidate',
            'addCandidate',
            'editCandidate',
            'deleteInterview',
        ];
    }
}
