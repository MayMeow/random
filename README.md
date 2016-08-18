# Random

I needed pseudo generator which for given seed return stil same values.

## Installation

TODO: Describe the installation process

## Usage

Create new instance of generator

```php
use AsunaY\XorShift;

// As seed you can use any integer number.
$xs = new XorShift($seed);
```

Generate random number

```php
$xs->getRand();
```

or you can set max and min value to get random number from

```php
$xs->getRand(15,50);
```

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

## History

TODO: Write history

## Credits

[Charlotta](https://github.com/asunay)

## License

MIT