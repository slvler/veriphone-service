# slvler - Veriphone Service


This package provides a convenient wrapper to the [Veriphone API](https://veriphone.io/docs/v2)  for Laravel applications.

Veriphone API is a REST based JSON API. It provides a set of stateless endpoints that any program or web browser can call by sending a standard HTTP request.
Veriphone will respond with a standard HTTP response carrying a JSON payload. 
This documentation describes these endpoints, their input/output parameters and authentication methods.


## Requirements

- PHP 8.0+
- Laravel 9.x


## Installation

To install this package tou can use composer:

```bash
    composer require slvler/veriphone-validation
```
## Usage

- First, you should extract the config/veriphone.php file to the config folder.

```php
    php artisan vendor:publish --tag=veriphone
```

- API key to be obtained from veriphone.io/docs/v2 address should be declared. This is your private API key, specific to this API.

```php
    'phone' => [
        'base_url' => 'https://api.veriphone.io/',
        'api_key' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    ]
```

- Abstract's Phone Number Validation and Verification API simply requires your unique API key and the phone number you'd like to check:

```php
    use Slvler\VeriphoneValidation\Facedes\VeriphoneValidation;

    VeriphoneValidation::get('14152007986');
```

- This was a successful request, so the valid phone number and details associated with it are returned below:

```json
{
    "status": "success",
    "phone": "+14152007986",
    "phone_valid": true,
    "phone_type": "fixed_line_or_mobile",
    "phone_region": "California",
    "country": "United States",
    "country_code": "US",
    "country_prefix": "1",
    "international_number": "+1 415-200-7986",
    "local_number": "(415) 200-7986",
    "e164": "+14152007986",
    "carrier": ""
}
```


### Testing

```bash
    composer test
```

## Credits

-   [slvler](https://github.com/slvler)


## License

The MIT License (MIT). Please see [License File](https://github.com/slvler/veriphone-service/blob/main/LICENSE.md) for more information.
