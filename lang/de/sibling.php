<?php

use App\Enums\GetAmount;

return [
    'title' => 'Geschwister',
    'subtitle' => 'Geschwister der gesuchstellenden Person',
    'lastname' => 'Nachname',
    'firstname' => 'Vorname',
    'birthday' => 'Geburtsdatum',
    'birthyear' => 'Geburtsjahr',
    'place_of_residence' => 'Aufenthaltsadresse',
    'education' => 'Ausbildung/Berufstätigkeit (Schule/Lehre/Lehrjahr)',
    'graduation_year' => 'Abschlussjahr der Ausbildung',
    'get_amount' => 'Bezieht Ausbildungsbeiträge',
    'support_site' => 'Beziehende Stelle',
    'addSibling' => '+ Weitere Geschwister',
    'noSiblings' => 'Keine Geschwister eingetragen',
    'supportedSiteNeeded' => 'Bitte geben sie die beziehende Stelle an, von der sie Beiträge erhalten',

    'get_amount_name' => [
        GetAmount::Yes->name => 'Ja',
        GetAmount::No->name => 'Nein',
    ]
];
