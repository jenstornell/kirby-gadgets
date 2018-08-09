# Helpers

### `gadget::isLocalhost`

It will check if the server is `::1` or `localhost`.

```php
if(gadget::isLocalhost()) {
    echo 'Localhost';
}
```

**Source:** Jens Törnell - https://stackoverflow.com/a/21702853/148496

### `gadget::isLoggedIn`

Checks if you are logged in.

```php
if(gadget::isLoggedIn()) {
    echo 'You are logged in';
}
```

**Source:** Jens Törnell

### `gadget::isPage`

Check if the current variable is a page object.

```php
if(gadget::isPage($page)) {
    echo 'Page object';
}
```

**Source:** Jens Törnell

### `gadget::isPages`

Check if the current variable is a pages object.

```php
if(gadget::isPages($page)) {
    echo 'Pages object';
}
```

**Source:** @texnixe - https://forum.getkirby.com/t/check-if-the-object-is-a-page-or-collection/6464/2

### `gadget::slug`

The built in `str::slug()` function converts `ä` to `ae` which make no sense in Sweden. This slug function converts `ä` to `a`.

```php
echo gadget::slug('Min röda är inte blå');
```

The output of the above will be:

>min-roda-troja-ar-inte-bla

**Source:** Unknown

### `gadget::stripHtmlComments`

Strip HTML comments from a string.

```php
echo gadget::stripHtmlComments('<div>Hello <!-- This is a comment--> </div>');
```

**Source:** https://davidwalsh.name/remove-html-comments-php