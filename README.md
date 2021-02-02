# sbooker/persistent-pointer-doctrine

[![Latest Version][badge-release]][release]
[![Software License][badge-license]][license]
[![PHP Version][badge-php]][php]
[![Total Downloads][badge-downloads]][downloads]

Doctrine implementation [sbooker/persistent-pointer](https://github.com/sbooker/persistent-pointer)

## Installation
Install via [Composer][composer]:
```bash
composer require sbooker/persistent-pointer-doctrine
```

## Usage
### With Symfony

```yaml
doctrine:
    orm:
        mappings:
            Sbooker\PersistentPointer:
                is_bundle: false
                type: xml
                dir: '%kernel.project_dir%/vendor/sbooker/persistent-pointer-doctrine-doctrine/src/Mapping'
                prefix: 'Sbooker\PersistentPointer'
                alias: PersistentPointer
```

## License
See [LICENSE][license] file.

[badge-release]: https://img.shields.io/packagist/v/sbooker/persistent-pointer-doctrine.svg?style=flat-square
[badge-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[badge-php]: https://img.shields.io/packagist/php-v/sbooker/persistent-pointer-doctrine.svg?style=flat-square
[badge-downloads]: https://img.shields.io/packagist/dt/sbooker/persistent-pointer-doctrine.svg?style=flat-square

[release]: https://img.shields.io/packagist/v/sbooker/persistent-pointer-doctrine
[license]: https://github.com/sbooker/persistent-pointer-doctrine/blob/master/LICENSE
[php]: https://php.net
[downloads]: https://packagist.org/packages/sbooker/persistent-pointer-doctrine

[composer]: https://getcomposer.org
