<?php
return [
    // place your definitions here
    'booba' => 123,
    'whoop' => 321,
    'boobe' => 121,
    'MyDate' => new DateTime('2000-01-01'),
    'Date2' => DI\create('DateTime')->lazy()
];