
# WordPress Unpoly

This class is a helper to use the Unpoly protocol server within WordPress.

## Tech Stack

**Client:** Unpoly (need to be installed)

**Server:** PHP

## Documentation

To use this class, you need to create a file `utils/up.php` in your theme.

Then, in `function.php`, require the file, `require_once 'utils/up.php';`, and everything is ready !

To use the class, simply call the `target_includes` static function to check if the selector is in the header.

```php
<body>
  <?php if (Up::target_includes('body-content')) : ?>
    <header>
        Your header content will only be print on first request or when header match !
    </header>
  <?php endif; ?>

  <main>
      Your main content
  </main>
</body>
```

## Authors

- [@barbapapazes](https://www.github.com/barbapapazes)
