# Helpers

### `isLocalhost`

It will check if the server is `::1` or `localhost`.

```php
if(gadget::isLocalhost()) {
    echo 'Localhost';
}
```

### `isPage`

Check if the current variable is a page object.

```php
if(gadget::isPage($page)) {
    echo 'Page object';
}
```

### `isPages`

Check if the current variable is a pages object.

```php
if(gadget::isPages($page)) {
    echo 'Pages object';
}
```

### `slug`

The built in `str::slug()` function converts `ä` to `ae` which make no sense in Sweden. This slug function converts `ä` to `a`.

```php
echo gadget::slug('Min röda är inte blå');
```

The output of the above will be:

>min-roda-troja-ar-inte-bla