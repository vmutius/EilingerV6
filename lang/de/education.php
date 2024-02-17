<?php
use \App\Enums\Education;
use App\Enums\Grade;

return [
    'education' => 'Ausbildung',
    'subtitle' => 'für welche Beiträge verlangt werden',
    'name' => 'Bezeichnung und Ort der Ausbildungsstätte',
    'final' => 'Beabsichtigter Abschluss als',
    'grade' => 'Abschluss',
    'ects_points' => 'ECTS-Punkte für das kommende Semester gemäss Beleg',
    'time' => 'Pensum',
    'begin_edu' => 'Beginn der Ausbildung',
    'duration_edu' => 'Dauer der Ausbildung',
    'start_semester' => 'Ab Ausbildungsjahr/Semester',

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
        Grade::Highschool->name => 'Highschool',
        Grade::Other->name => 'Other',
    ],
];
