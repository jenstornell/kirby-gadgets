<?php
include __DIR__ . '/collectionByIndex.php';

Kirby::plugin('jenstornell/gadgets-page-methods', [
    'pageMethods' => [
        'hasParents' => function() {
            return (bool)$this->parents()->count();
        },
        'rootParent' => function() {
            if(!$this->parent())
                return $this;
            return $this->parents()->last();
        },
        'collectionByIndex' => function($limit = 1, $offset = 0, $loop = true) {
            $CollectionByIndex = new CollectionByIndex();
            return $CollectionByIndex->get($this, $limit, $offset, $loop);
        }
    ]
]);