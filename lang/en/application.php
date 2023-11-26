<?php

use App\Enums\ApplStatus;
use App\Enums\Bereich;
use App\Enums\Form;
use App\Enums\PayoutPlan;

return [
    'name' => 'Name of the application',
    'bereich' => 'Area',
    'form' => 'Form',
    'currency' => 'Curreny',
    'calc_amount' => 'Calculated Amount',
    'req_amount' => 'Required Amount',
    'payout_plan' => 'Payout Plan',
    'start_appl' => 'Start of the application',
    'end_appl' => 'End of the application',
    'no_applications' => 'No application found',

    'status' => [
        ApplStatus::NOT_SEND->name => 'Not send',
        ApplStatus::PENDING->name => 'Pending',
        ApplStatus::WAITING->name => 'Waiting for the user',
        ApplStatus::COMPLETE->name => 'Waiting for the foundation meeting',
        ApplStatus::APPROVED->name => 'Approved',
        ApplStatus::BLOCKED->name => 'Declined',
        ApplStatus::FINISHED->name => 'Finished',
    ],

    'bereichs_name' => [
        Bereich::Bildung->name => 'Education',
        Bereich::Menschen->name => 'People in need',
        Bereich::Menschenrecht->name => 'Human right',
        Bereich::Tierschutz->name => 'Animal welfare',
        Bereich::Umwelt->name => 'Environment',
    ],

    'form_name' => [
        Form::Stipendium->name => 'Stipendium',
        Form::Darlehen->name => 'Loan',
        Form::Spende->name => 'Donation',
    ],

    'payoutplan_name' => [
        PayoutPlan::monthly->name => 'monthly',
        PayoutPlan::oneTime->name => 'one time',
    ],
];
