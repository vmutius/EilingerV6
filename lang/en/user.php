<?php

use App\Enums\Salutation;

return [
    'candidate' => 'Candidate',
    'applicant' => 'Applicant',
    'subtitle' => 'Details of the person in education who is applying for contributions',
    'username' => 'Username',
    'type' => 'Type',
    'lastname' => 'Lastname',
    'firstname' => 'Firstname',
    'birthday' => 'Birthday',
    'salutation' => 'Salutation',
    'country' => 'Country',
    'nationality' => 'Nationality',
    'phone' => 'Phonenumber',
    'email' => 'E-Mail-Adress',
    'password' => 'Password',
    'password_confirmation' => 'Password Confirmation',
    'mobile' => 'Mobilenumber',
    'civil_status' => 'Civil State',
    'name_inst' => 'Name of the organisation',
    'phone_inst' => 'Phonenumber of the organisation',
    'email_inst' => 'Email of the organisation',
    'contact' => 'of the contact',
    'website' => 'Website',
    'soz_vers_nr' => 'Social Security Number',
    'in_ch_since' => 'In Switzerland since (as foreigner)',
    'granting' => 'Granting (for foreigner)',
    'contact_aboard' => 'Contact Aboard',

    'salutation_name' => [
        Salutation::Divers->name => '--',
        Salutation::Frau->name => 'Mrs.',
        Salutation::Herr->name => 'Mr.',
    ],
];
