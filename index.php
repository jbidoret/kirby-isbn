<?php

@include_once __DIR__ . '/vendor/autoload.php';
use Biblys\Isbn\Isbn;

Kirby::plugin('jbidoret/kirby-isbn', [
	'fieldMethods' => [
        'convertToIsbn10' => function($field){
            return Isbn::convertToIsbn10($field->value);
        },
        'convertToIsbn13' => function($field){
            return Isbn::convertToIsbn13($field->value);
        },
        'convertToEan13' => function($field){
            return Isbn::convertToEan13($field->value);
        },
        'convertToGtin14' => function($field){
            return Isbn::convertToGtin14($field->value);
        },
        'convertToIsbnA' => function($field){
            return Isbn::convertToIsbnA($field->value);
        },

    ],
]);
