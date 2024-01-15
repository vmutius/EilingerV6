<?php

use App\Enums\GetAmount;

return [
    'title' => 'Siblings',
    'subtitle' => 'Siblings of the applicant',
    'lastname' => 'Lastname',
    'firstname' => 'Firstname',
    'birthday' => 'Birthday',
    'place_of_residence' => 'Place of residence',
    'education' => 'Education/occupation (school/apprenticeship/apprenticeship year)',
    'graduation_year' => 'Graduation year',
    'get_amount' => 'Receives education contributions',
    'support_site' => 'Supporting office',
    'addSibling' => '+ Additional Siblings',

    'get_amount_name' => [
        GetAmount::Yes->name => 'Yes',
        GetAmount::No->name => 'No',
    ]
];