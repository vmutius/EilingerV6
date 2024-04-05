<?php

use App\Enums\CivilStatus;
use App\Enums\Salutation;
use App\Enums\Bewilligung;

return [
    'candidate' => 'Requester',
    'applicant' => 'Recipient',
    'subtitle' => 'Details of the person in education who is applying for contributions',
    'subtitleOrg' => 'Details of the organisation',
    'subTitleCandidate' => 'Details of the candidate',
    'username' => 'Username',
    'type' => 'Type',
    'lastname' => 'Last name',
    'firstname' => 'First name',
    'birthday' => 'Birthday',
    'salutation' => 'Salutation',
    'country' => 'Country',
    'nationality' => 'Nationality',
    'phone' => 'Phone number',
    'email' => 'E-Mail-Address',
    'password' => 'Password',
    'password_register' => 'Password (At least 8 characters, one upper case letter, one lower case letter, one number and one special character)',
    'password_confirmation' => 'Password Confirmation',
    'mobile' => 'Mobile number',
    'civil_status' => 'Civil State',
    'name_inst' => 'Name of the organisation',
    'phone_inst' => 'Phone number of the organisation',
    'email_inst' => 'E-Mail-Address of the organisation',
    'contact' => 'of the contact',
    'website' => 'Website of the organisation',
    'soz_vers_nr' => 'Social Security Number',
    'in_ch_since' => 'In Switzerland since (as foreigner)',
    'granting' => 'Granting (for foreigner)',
    'contact_aboard' => 'Contact Aboard',
    'delAccountConfirmation' => 'Do you really want to delete your account?',
    'usernameUnique' => 'This username is already taken',
    'nameInstUnique' => 'Your organization is already registered',
    'emailInstUnique' => 'This email of your organization is already registered',
    'passwordRegexp' => 'The password must be at least 8 characters long and must contain at least 1 uppercase letter,
                    one lower case letter, one number and one special character',
    'deleteAccountText' => 'Please note that the Eilinger Foundation may not be able to delete your data immediately. This is because we may still need it for internal policies, annual reporting, or other legal requirements. Once we no longer need your data, it will be permanently deleted from our servers. ',

    'salutation_name' => [
        Salutation::Divers->name => '--',
        Salutation::Frau->name => 'Mrs.',
        Salutation::Herr->name => 'Mr.',
    ],

    'civil_status_name' => [
        CivilStatus::ledig->name => 'single',
        CivilStatus::verheiratet->name => 'married',
        CivilStatus::geschieden->name => 'divorced',
        CivilStatus::verwitwet->name => 'widowed',
    ],

    'permit_name' => [
        Bewilligung::C->name => 'Permit C EU/EFTA',
        Bewilligung::B->name => 'Permit B EU/EFTA',
        Bewilligung::I->name => 'Permit Ci EU/EFTA',
        Bewilligung::G->name => 'Permit G EU/EFTA',
        Bewilligung::L->name => 'Permit L EU/EFTA',
    ],

];
