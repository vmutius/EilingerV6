<?php

use App\Enums\CivilStatus;
use App\Enums\Salutation;
use App\Enums\Bewilligung;

return [
    'candidate' => 'Gesuchssteller',
    'applicant' => 'Empfänger',
    'subtitle' => 'Angaben über die in Ausbildung stehende Person, welche um Beiträge nachsucht',
    'subtitleOrg' => 'Angaben über die Organisation',
    'subTitleCandidate' => 'Angaben über den Gesuchssteller',
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
    'password' => 'Passwort',
    'password_register' => 'Passwort (Mindestens 8 Zeichen, einen Grossbuchstaben, einen Kleinbuchstaben, eine Zahl und ein Sonderzeichen)',
    'password_confirmation' => 'Passwort Bestätigung',
    'mobile' => 'Mobile',
    'civil_status' => 'Zivilstand',
    'name_inst' => 'Name der Organisation',
    'phone_inst' => 'Telefon der Organisation',
    'email_inst' => 'E-Mail-Adresse der Organisation',
    'contact' => 'der Kontaktperson',
    'website' => 'Webseite der Organisation',
    'soz_vers_nr' => 'Sozialversicherungsnummer',
    'in_ch_since' => 'In der Schweiz seit (für Ausländer)',
    'granting' => 'Bewilligung (für Ausländer)',
    'contact_aboard' => 'Ansprechpartner im Ausland',
    'delAccountConfirmation' => 'Wollen Sie ihren Account wirklich löschen?',
    'usernameUnique' => 'Dieser Benutzername ist bereits vergeben',
    'nameInstUnique' => 'Ihre Organisation ist bereits registriert',
    'emailInstUnique' => 'Diese Email ihrer Organisation ist bereits registriert',
    'passwordRegexp' => 'Das Passwort muss mindestens 8 Zeichen lang sein und muss mindestens 1 Grossbuchstaben,
                    einen Kleinbuchstaben, eine Zahl und ein Sonderzeichen enthalten',
    'deleteAccountText' => 'Bitte beachten Sie, dass die Eilinger Stiftung Ihre Daten nicht umgehend löschen kann. Grund dafür ist, dass wir diese möglicherweise noch für interne Richtlinien, die Jahresberichterstattung oder sonstige rechtliche Anforderungen benötigen. Sobald wir Ihre Daten nicht mehr benötigen, werden diese permanent von unseren Servern gelöscht.',

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

    'permit_name' => [
        Bewilligung::C->name => 'Ausweis C EU/EFTA',
        Bewilligung::B->name => 'Ausweis B EU/EFTA',
        Bewilligung::I->name => 'Ausweis Ci EU/EFTA',
        Bewilligung::G->name => 'Ausweis G EU/EFTA',
        Bewilligung::L->name => 'Ausweis L EU/EFTA',
    ],
];
