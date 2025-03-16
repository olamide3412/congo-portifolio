<?php

namespace App\Enums;

enum StatusEnum: string
{
    case Enable = 'enable';
    case Disable = 'disable';
    case Suspendened = 'suspended';
}
