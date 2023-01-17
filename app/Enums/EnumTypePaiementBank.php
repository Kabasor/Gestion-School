<?php

namespace App\Enums;

enum EnumTypePaiementBank: string
{
    // case ESPECES = 'Espece';
    case CHEQUE = 'Cheque';
    case BORDEROT = 'Bordereau';
    case VIREMENT = 'Virement';

}