# PHPStrict

PHP Classes to use the new PHP7 strict type hinting and return types for operations such as math.

Examples:

```php
// add two or more integers
PHPMath::addIntegers(3, 4, 5, 34);
```

```php
// add two or more integers
PHP7Math::addFloats(30.5, 30.1);
```

```php
// subtract two integers
PHP7Math::subtractIntegers(20, 12);
```

```php
// subtract two floats
PHP7Math::subtractFloats(25.4, 5.4);
```

```php
// multiply two integers
PHP7Math::multiplyIntegers(2, 4);
```

```php
// multiply two floats
PHP7Math::multiplyFloats(2.5, 2.5);
```
Usage:

```php
include ('./vendor/autoload.php');
use PHPStrict\Math as StrictMath;

StrictMath::addIntegers(3, 4, 5, 34);
```
