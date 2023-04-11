# Nova String Generation Field

A Nova field which can genarate a string upon creating or updating, this adds a string generator button and copy button to a Text.

## Installation:

You can install the package in to a Laravel app that uses Nova via composer:

```bash
composer require scouser03/nova-string-generator-field
```

```php
use Scouser03\NovaStringGeneratorField\NovaStringGeneratorField;

// Field which extends the default Nova Text field
NovaStringGeneratorField::make('String')
    ->length(12) // specify the generated string length (default = 10)
    ->excludeRules(['symbols']), // exclude characters types (symbols, numbers. uppercase, lowercase)



## License:
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
```
