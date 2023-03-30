<?php

namespace App\Enums;

enum ApplStatus {
    const NOT_SEND = 'Not Send'; // Antrag noch nicht eingereicht
    const PENDING = 'Pending'; // Antrag liegt bei Eilinger zur Bearbeitung
    const WAITING = 'Waiting'; //Antrag liegt wieder beim Benutzer zur Beantwortung der Fragen
    const COMPLETE = 'Complete'; //Angaben im Antrag vollständig. Wartet auf nächste Stiftungsratssitzung
    const APPROVED = 'Approved';
    const BLOCKED = 'Blocked';
    const FINISHED = 'Finished';
}
