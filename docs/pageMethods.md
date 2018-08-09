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