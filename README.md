# PHPStrict

PHP Classes to use the new PHP7 strict type hinting and return types for operations such as math.

Examples:

```php
// add two or more integers
PHPStrict\Math::addIntegers(3, 4, 5, 34);
```

```php
// add two or more floats
PHPStrict\Math::addFloats(30.5, 30.1);
```

```php
// subtract two integers
PHPStrict\Math::subtractIntegers(20, 12);
```

```php
// subtract two floats
PHPStrict\Math::subtractFloats(25.4, 5.4);
```

```php
// multiply two integers
PHPStrict\Math::multiplyIntegers(2, 4);
```

```php
// multiply two floats
PHPStrict\Math::multiplyFloats(2.5, 2.5);
```

```php
// divide two floats
PHPStrict\Math::divideFloats(10.0, 2.0);
```

```php
// divide two floats (Could return either int or float)
PHPStrict\Math::divideIntegers(10, 2);
```




Usage:

```php
include ('./vendor/autoload.php');
use PHPStrict\Math as StrictMath;

StrictMath::addIntegers(3, 4, 5, 34); // correct
StrictMath::addFloats(3, 4.5, 52); //throws Exception

```
