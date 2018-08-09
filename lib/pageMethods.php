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
        },
        'collectionByIndex' => function($limit = 1, $loop = true) {
            $pages = $this->siblings();
            print_r($pages);
            $offset  = $pages->indexOf($this)+1;
            $items = $pages->slice($offset, $limit);

            if(!$loop) return $items;
            
            $remainder = $pages->limit($limit-$items->count());
            return $items->merge($remainder);
        }
    ]
]);
