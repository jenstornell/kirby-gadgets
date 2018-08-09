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

This method will return a collection of pages.

By default pages are added from the current page index until it reaches the limit. If the index is near the end, it will start from the beginning of the collection until the limit is reached. However, it will not pass the end of the collection more than one time.

```php
$collection = $page->collectionByIndex($limit = 3, $offset = -1, $loop = true);
print_r($collection);
```

- The above will try to output 3 pages in the collection.
- It will start on the previous page (-1).
- If it reaches the end it will start over (loop is true).

**Source:** @texnixe, @jenstornell - https://forum.getkirby.com/t/filter-interval-of-pages/5893/6