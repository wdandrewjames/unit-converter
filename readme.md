# PHP Unit Converter

Unit Converter is a PHP library for dealing with converting units.

## Usage

Instantiate a new Converter Object, which requires an object which implements the ConverterTypeInterface. In this case we are using Mass class.

```php
use Converter\Converter;
use Converter\ConversionTypes\Mass;

$converter = new Converter(new Mass);
```
Use the convert() method on the Converter object to set the value you wish to convert from. This method accepts 2 arguments:

$value: The value being converted from

$unit: The unit you being converted from

Once the convert() method has been run, you may then use the to() method. This method takes 1 argument:

$unit: The unit you being converted to

```php
echo $converter->convert(1, 'kilogram')->to('gram');
// 1000
```

You can also run multiple conversions once convert() method has been run.

```php
$converter->convert(1000, 'gram');

echo $converter->to('kilogram');
// 1
echo $converter->to('gram');
// 1000
echo $converter->to('pound');
// 2.2046244201838
echo $converter->to('milligram');
// 1000000
```

The getAvailableUnits() method will return an array of all available units for a particular conversion quantity.

```php
use Converter\Converter;
use Converter\ConversionTypes\Mass;

$converter = new Converter(new Mass);
$converter->getAvailableUnits();
```

### Available Conversion Types

Length

Mass

Speed

Volume

## License
[MIT](https://choosealicense.com/licenses/mit/)