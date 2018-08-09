<?php
Kirby::plugin('jenstornell/gadgets-field-methods', [
    'fieldMethods' => [
        'stripHtmlComments' => function($field) {
            $field->value = gadget::stripHtmlComments($field->value);
            return $field;
        }
    ]
]);