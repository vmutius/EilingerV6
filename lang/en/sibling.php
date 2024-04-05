<?php

use App\Enums\GetAmount;

return [
    'title' => 'Siblings',
    'subtitle' => 'Siblings of the applicant',
    'lastname' => 'Last name',
    'firstname' => 'First name',
    'birthday' => 'Birthday',
    'birthyear' => 'Birthyear',
    'place_of_residence' => 'Place of residence',
    'education' => 'Education/occupation (school/apprenticeship/apprenticeship year)',
    'graduation_year' => 'Graduation year',
    'get_amount' => 'Receives education contributions',
    'support_site' => 'Supporting office',
    'addSibling' => '+ Additional Sibling',
    'noSiblings' => 'No siblings entered',
    'supportedSiteNeeded' => 'Please enter the supporting office from which you receive contributions',

    'get_amount_name' => [
        GetAmount::Yes->name => 'Yes',
        GetAmount::No->name => 'No',
    ]
];
