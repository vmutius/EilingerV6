<?php
use \App\Enums\Education;
use App\Enums\Grade;
use App\Enums\InitialEducation;

return [
    'education' => 'Ausbildung',
    'subtitle' => 'für welche Beiträge verlangt werden',
    'name' => 'Bezeichnung und Ort der Ausbildungsstätte',
    'final' => 'Beabsichtigter Abschluss als',
    'grade' => 'Abschluss',
    'ects_points' => 'ECTS-Punkte für das kommende Semester gemäss Beleg',
    'time' => 'Pensum',
    'begin_edu' => 'Beginn der Ausbildung',
    'duration_edu' => 'Reguläre Ausbildungs/studienzeit',
    'start_semester' => 'Ab Ausbildungsjahr/Semester',
    'noEducation' => 'Keine Ausbildungsdaten eingetragen',
    'initial_education' => 'Erstausbildung',

    'initial_education_name' => [
        InitialEducation::Yes->name => 'Ja',
        InitialEducation::No->name => 'Nein',
    ],

    'education_name' => [
    Education::Matura->name => 'Matura',
    Education::FMS->name => 'FMS',
    Education::Berufslehre->name => 'Berufslehre',
    Education::BM2->name => 'BM2',
    Education::Fachschule->name => 'Fachschule',
    Education::Fachhochschule->name => 'Fachhochschule',
    Education::Universitaet->name => 'Universität',
    ],

    'grade_name' => [
        Grade::Highschool->name => 'Kantonsschule',
        Grade::Other->name => 'Sonstige',
    ],
];
