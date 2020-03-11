<?php

include_once "db_helpers.php";

$res = db_existsTable('lesson06', 'peoples') ;

// если таблицы не существует
if (!$res) {

    db_create('lesson06.peoples', [
        'Id'=>'int',
        'Family' => 'varchar(50)',
        'Name' => 'varchar(50)',
        'Otch' => 'varchar(50)',
        'IIN' => 'varchar(20)',
    ]);

db_insert('lesson06.peoples', [
    'Id' => '1',
    'Family' => 'Иванов',
    'Name' => 'Иван',
    'Otch' => 'Иванович',
    'IIN' => '950505100100',
]);
db_insert('lesson06.peoples', [
    'Id' => '2',
    'Family' => 'Петров',
    'Name' => 'Петр',
    'Otch' => 'Петрович',
    'IIN' => '960505100100',
]);
db_insert('lesson06.peoples', [
    'Id' => '3',
    'Family' => 'Сидоров',
    'Name' => 'Сидор',
    'Otch' => 'Сидорович',
    'IIN' => '970505100100',
]);
}

db_alter('lesson06.peoples', [
    'add' =>[
        'DateOfBirthday1' => 'Year',
        'Address' => 'varchar(255)',
    ],
    'modify' =>[
        'Family' => 'varchar(255)',
        'Name' => 'varchar(255)',
        'DateOfBirthday1' => 'Date'
    ],
    'drop' =>[
        'IIN' => "",
        'Otch' => ""
    ]
]);


