<?php

use App\Enums\ApplStatus;
use App\Enums\Bereich;
use App\Enums\Form;
use App\Enums\PayoutPlan;

return [
    'name' => 'Name of the application',
    'bereich' => 'Bereich',
    'form' => 'Form',
    'currency' => 'Länderwährung',
    'calc_amount' => 'Errechneter Betrag',
    'req_amount' => 'Gewünschter Betrag',
    'payout_plan' => 'Auszahlungsform',

    'status' => [
        ApplStatus::NOT_SEND->name => 'Nicht eingereicht',
        ApplStatus::PENDING->name => 'Ausstehend',
        ApplStatus::WAITING->name => 'Warten auf Benutzer',
        ApplStatus::COMPLETE->name => 'Warten auf Ratssitzung',
        ApplStatus::APPROVED->name => 'Genehmigt',
        ApplStatus::BLOCKED->name => 'Abgelehnt',
        ApplStatus::FINISHED->name => 'Beendet',
    ],

    'bereichs_name' => [
        Bereich::Bildung->name => 'Bildung',
        Bereich::Menschen->name => 'Menschen in Not',
        Bereich::Menschenrecht->name => 'Menschenrecht',
        Bereich::Tierschutz->name => 'Tierschutz',
        Bereich::Umwelt->name => 'Umwelt',
    ],

    'form_name' => [
        Form::Stipendium->name => 'Stipendium',
        Form::Darlehen->name => 'Darlehen',
        Form::Spende->name => 'Spende',
    ],

    'payoutplan_name' => [
        PayoutPlan::monthly->name => 'monatlich',
        PayoutPlan::oneTime->name => 'einmalig',
    ],
];
