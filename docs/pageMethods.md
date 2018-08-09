# Page methods

### `$page->hasParents`

Check if the current page has parents.

```php
if($page->hasParents()) {
    echo 'Parents found';
}
```

**Source:** @texnixe - https://forum.getkirby.com/t/if-has-parents/4874/2

### `$page->rootParent`

Always return the parent at the root level.

```php
echo $page->rootParent();
```

**Source:** @ivinteractive - https://forum.getkirby.com/t/get-root-page-of-child/3295/3

### `$page->collectionByIndex`

This method will build a collection by starting from an index.

```php
$collection = $page->collectionByIndex($limit = 3, $offset = -1, $loop = true);
print_r($collection);
```

- The above will try to output 3 pages in the collection.
- It will start on the previous page (-1).
- If it reaches the end it will start over (loop is true).

**Source:** @texnixe, @jenstornell - https://forum.getkirby.com/t/filter-interval-of-pages/5893/6