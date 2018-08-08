# Helpers

### `isLocalhost`

By default it check if the server is `::1` or `localhost`. You can also send a whitelist if needed.

```php
<?= gadget::isLocalhost() ?>
<?= gadget::isLocalhost($whitelist = []) ?>
```

### `isPage`

Check if the current variable is a page object.

```php
<?= gadget::isPage($page) ?>
```

### `isPages`

Check if the current variable is a pages object.

```php
<?= gadget::isPages($pages) ?>
```

### `slug`

The built in `str::slug()` function converts `ä` to `ae` which make no sense in Sweden. This slug function converts `ä` to `a`.

```php
<?= gadget::slug('Min röda är blå') ?>
```

The output of the above will be:

>min-roda-troja-ar-bla