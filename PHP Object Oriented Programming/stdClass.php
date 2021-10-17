<?php

$array = [
    [
        'firstname' => 'Cahyo',
        'middlename' => 'Fajar'
    ],
    [
    'firstname' => 'Cahyo',
    'middlename' => 'Fajar'
    ]
];

$object = (object) $array;

echo $object->firstname;