# Kirby Gadgets

This is a set of helpers and page methods. You can install it as a plugin, or just copy paste the things that you want from the code.

- **Version:** 0.1 beta
- **Requirement:** Kirby 3
- [Changelog](docs/changelog.md)
- [Disclaimer](https://devonera.se/docs/disclaimer/?user=jenstornell&plugin=kirby-gadgets)
- [Donate](https://devonera.se/docs/donate/?user=jenstornell&plugin=kirby-gadgets)

## Gadgets

- [Helpers](docs/helpers.md)
- [Page methods](docs/pageMethods.md)

### Helpers

A helper is a simple static method. I'll give you an example below.

### `isLocalhost`

It will check if the server is `::1` or `localhost`.

```php
if(gadget::isLocalhost()) {
    echo 'Localhost';
}
```

**[Documentation for Helpers](docs/helpers.md)**

### Page methods

Kirby has a lot of page methods. There are some nice ones that are not built in. I'll give you an example below.

### `$page->rootParent`

Always return the parent at the root level.

```php
echo $page->rootParent();
```

**[Documentation for page methods](docs/pageMethods.md)**

## Utility functions

The built in Kirby Toolkit should include most of the things you need. If that is no enough, there are more of that out there.

- [JBZoo Utils](https://github.com/JBZoo/Utils) - Similar to toolkit
- [Util.php](https://github.com/brandonwamboldt/utilphp/) - Similar to toolkit
- [Idiorm](https://github.com/j4mie/idiorm) - For databases