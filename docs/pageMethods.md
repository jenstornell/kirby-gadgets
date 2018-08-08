# Page methods

### `multilevelFindBy`

This method works just like `FindBy` but for pages at any level down from the current page.

```php
if($new_page = $page->multilevelFindBy('slug', 'trees-and-stars-and-stuff')) {
    echo "$new_page found";
}
```

### `hasParents`

Check if the current page has parents.

```php
if($page->hasParents()) {
    echo 'Parents found';
}
```