<?php

namespace App\Enums;

enum ApplStatus: string
{
    case NOTSEND = 'Not Send'; // Antrag noch nicht eingereicht
    case PENDING = 'Pending'; // Antrag liegt bei Eilinger zur Bearbeitung
    case WAITING = 'Waiting'; //Antrag liegt wieder beim Benutzer zur Beantwortung der Fragen
    case COMPLETE = 'Complete'; //Angaben im Antrag vollständig. Wartet auf nächste Stiftungsratssitzung
    case APPROVED = 'Approved';
    case BLOCKED = 'Blocked';
    case FINISHED = 'Finished';
}
