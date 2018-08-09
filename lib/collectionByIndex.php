<?php
class CollectionByIndex {
    function get($page, $limit, $offset, $loop) {
        $pages = $page->siblings();
        $index = $pages->indexOf($page);
        $collection = $pages->not($page);

        $pointer = $this->startPointer($collection, $index, $offset);
        $items = $collection->slice($pointer, $limit);

        if(!$loop) return $items;
        
        $remainder = $collection->limit($limit-$items->count());
        return $items->merge($remainder);
    }

    function startPointer($pages, $index, $offset) {
        $count = $pages->count();
        $pointer = $index + $offset;
        $laps = $pointer / $count;

        if(!$this->isDecimal($laps)) return 0;

        $full_laps = floor($laps);
        $full_steps = $full_laps * $count;
        return $pointer - $full_steps;
    }

    function isDecimal($number) {
        return floor($number) != $number;
    }
}