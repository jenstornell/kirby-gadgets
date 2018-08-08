<?php
Kirby::plugin('jenstornell/gadgets-page-methods', [
    'pageMethods' => [
        'multilevelFindBy' => function($key, $value) {
            return $this->index()->findBy($key, $value);
        }
    ]
]);
