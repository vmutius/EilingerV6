<?php

use App\Enums\ApplStatus;
use App\Enums\Bereich;
use App\Enums\Form;
use App\Enums\PayoutPlan;
use App\Enums\Time;

return [
    'name' => 'Name des Antrags',
    'application' => 'Antrag',
    'applications' => 'Anträge',
    'newApplication' => 'Neuen Antrag erstellen',
    'createdAt' => 'Erstellt am',
    'updatedAt' => 'Zuletzt geändert am',
    'area' => 'Bereich',
    'desiredForm' => 'Gewünschte Form des Antrags',
    'desiredCurrency' => 'Gewünschte Auszahlungswährung',
    'startDate' => 'Startdatum',
    'endDate' => 'Enddatum',
    'firstAppl' => 'Erstantrag',
    'followAppl' => 'Folgeantrag',
    'form' => 'Form',
    'currency' => 'Länderwährung',
    'calc_amount' => 'Errechneter Betrag',
    'req_amount' => 'Gewünschter Betrag',
    'payout_plan' => 'Auszahlungsform',
    'start_appl' => 'Startdatum',
    'end_appl' => 'Enddatum',
    'no_applications' => 'Keine Anträge gefunden',
    'reason_rejected' => 'Ablehngrund',
    'appl_overview' => 'Antragsübersicht',
    'appl_overview_text' => 'Status Ausstehend, Warten auf Benutzer und Warten auf Ratssitzung',
    'proj_overview' => 'Projektübersicht',
    'proj_overview_text' => 'Laufende Projekte (bewilligte Anträge)',
    'no_projects' => 'Keine Projekte gefunden',
    'bereich' => 'Bereich',
    'requests' => 'Gesuche',
    'no_requests' => 'Keine Gesuche gefunden',
    'status' => 'Status',
    'is_first' => 'Erstantrag',
    'currency_id' => 'Währung',

    'status_name' => [
        ApplStatus::NOTSEND->name => 'Nicht eingereicht',
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
        PayoutPlan::partialAmount->name => 'Abrufbar in Teilbeträgen',
    ],

    'time' => [
        Time::Teilzeit->name => 'Teilzeit',
        Time::Vollzeit->name => 'Vollzeit'
    ],
];
