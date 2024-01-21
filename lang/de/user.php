<?php

use App\Enums\CivilStatus;
use App\Enums\Salutation;

return [
    'candidate' => 'Gesuchssteller',
    'applicant' => 'Bewerber',
    'subtitle' => 'Angaben über die in Ausbildung stehende Person, welche um Beiträge nachsucht',
    'username' => 'Benutzername',
    'type' => 'Typ',
    'lastname' => 'Nachname',
    'firstname' => 'Vorname',
    'birthday' => 'Geburtsdatum',
    'salutation' => 'Anrede',
    'country' => 'Land',
    'nationality' => 'Nationalität',
    'phone' => 'Telefon',
    'email' => 'E-Mail-Adresse',
    'password' => 'Password',
    'password_confirmation' => 'Password Bestätigung',
    'mobile' => 'Mobile',
    'civil_status' => 'Zivilstand',
    'name_inst' => 'Name der Organisation',
    'phone_inst' => 'Telefon der Organisation',
    'email_inst' => 'E-Mail-Adresse der Organisation',
    'contact' => 'der Kontaktperson',
    'website' => 'Webseite',
    'soz_vers_nr' => 'Sozialversicherungsnummer',
    'in_ch_since' => 'In der Schweiz seit (für Ausländer)',
    'granting' => 'Bewilligung (für Ausländer)',
    'contact_aboard' => 'Ansprechpartner im Ausland',

    'salutation_name' => [
        Salutation::Divers->name => '--',
        Salutation::Frau->name => 'Frau',
        Salutation::Herr->name => 'Herr',
    ],

    'civil_status_name' => [
        CivilStatus::ledig->name => 'ledig',
        CivilStatus::verheiratet->name => 'verheiratet',
        CivilStatus::geschieden->name => 'geschieden',
        CivilStatus::verwitwet->name => 'verwitwet',
    ],
];
