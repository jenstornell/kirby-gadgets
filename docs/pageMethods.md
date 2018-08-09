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

This method will start at the current page index and then walk until it hits the limit. If the pages ends before that, it will start over until the limit is reached.

Let's say you are on the `drones` and use a limit of 3. Your current siblings are like below.

```text
Kirby\Cms\Pages Object
(
    [0] => projects/trees-and-stars-and-stuff
    [1] => projects/oceans-are-quite-nice
    [2] => projects/glowing-in-the-dark-tent
    [3] => projects/drones
    [4] => projects/lame-light-effects
)
```

```php
$collection = $page->collectionByIndex($limit = 3);
print_r($collection);
```

The result will now look like below.

```php
Kirby\Cms\Pages Object
(
    [0] => projects/lame-light-effects
    [1] => projects/trees-and-stars-and-stuff
    [2] => projects/oceans-are-quite-nice
)
```

The collection now contains the next page which is `lame-light-effects`. Because the siblings end, it will start over and att the two first siblings.

You can also disable the looping that will fill out the collection with the first pages. In that case it will look like below.

```php
$collection = $page->collectionByIndex($limit = 3, $loop = false;
print_r($collection);
```

```php
Kirby\Cms\Pages Object
(
    [0] => projects/lame-light-effects
)
```

**Source:** @texnixe, @jenstornell - https://forum.getkirby.com/t/filter-interval-of-pages/5893/6