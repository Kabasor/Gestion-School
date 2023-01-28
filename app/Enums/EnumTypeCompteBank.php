<?php

namespace App\Enums;

enum EnumTypeCompteBank: string
{
    case ENTREPRISE = 'Entreprise';
    case EPARGNE = 'Epargne';
    case COURANT = 'Courant';
    
}