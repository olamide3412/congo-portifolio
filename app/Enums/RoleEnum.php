<?php

namespace App\Enums;

enum RoleEnum: string
{
    case Staff = 'staff';
    case Administrator = 'administrator';
    case SuperAdministrator = 'super administrator';
}
