<?php

use App\Enums\JobType;
use App\Enums\ParentType;

return [
    'title' => 'Eltern',
    'subtitle' => 'Leibliche Eltern der gesuchstellenden Person',
    'parent_type' => 'Elternteil',
    'lastname' => 'Nachname',
    'firstname' => 'Vorname',
    'birthday' => 'Geburtsdatum',
    'phone' => 'Telefonnummer',
    'address' => 'Strasse und Hausnummer',
    'plz_ort' => 'PLZ und Ort',
    'since' => 'Wohnhaft seit',
    'job_type' => 'Arbeitsverhältnis',
    'job' => 'Beruf',
    'employer' => 'Arbeitgeber',
    'married_since' => 'Verheiratet seit',
    'separated_since' => 'Getrennt seit',
    'divorced_since' => 'Geschieden seit',
    'death' => 'Todesjahr',
    'addParents' => '+ Weitere Elternteile',
    'noParents' => 'Keine Eltern eingetragen',

    'parent_type_name' => [
        ParentType::father->name => 'Vater',
        ParentType::mother->name => 'Mutter',
        ParentType::stepfather->name => 'Stiefvater',
        ParentType::stepmother->name => 'Stiefmutter',
    ],

    'job_type_name' => [
        JobType::selbststaendig->name => 'selbstständig',
        JobType::angestellt->name => 'angestellt',
    ]
];
