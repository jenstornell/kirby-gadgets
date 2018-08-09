<?php
Kirby::plugin('jenstornell/gadgets-page-methods', [
    'pageMethods' => [
        'hasParents' => function() {
            return (bool)$this->parents()->count();
        },
        'rootParent' => function() {
            if(!$this->parent())
                return $this;
            return $this->parents()->last();
        }
    ]
]);