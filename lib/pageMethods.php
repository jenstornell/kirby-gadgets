<?php
Kirby::plugin('jenstornell/gadgets-page-methods', [
    'pageMethods' => [
        'multilevelFindBy' => function($key, $value) {
            return $this->index()->findBy($key, $value);
        },
        'hasParents' => function() {
            return (bool)$this->parents()->count();
        },
    ]
]);
