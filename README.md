# Veriphone Service

[![tests](https://github.com/slvler/etherscan-service/actions/workflows/tests.yml/badge.svg)](https://github.com/slvler/etherscan-service/actions/workflows/tests.yml)
[![Latest Stable Version](https://img.shields.io/packagist/v/slvler/veriphone-validation.svg)](https://packagist.org/packages/slvler/veriphone-validation)
[![License](https://poser.pugx.org/slvler/veriphone-validation/license)](https://packagist.org/packages/slvler/veriphone-validation)
[![Total Downloads](https://poser.pugx.org/slvler/veriphone-validation/downloads)](https://packagist.org/packages/slvler/veriphone-validation)

An api service for etherscan.io

This package provides a convenient wrapper to the [Veriphone API](https://veriphone.io/docs/v2)  for Laravel applications.

Veriphone API is a REST based JSON API. It provides a set of stateless endpoints that any program or web browser can call by sending a standard HTTP request.
Veriphone will respond with a standard HTTP response carrying a JSON payload. 
This documentation describes these endpoints, their input/output parameters and authentication methods.
## Requirements
- PHP 8.2
- Laravel 9.x | 10.x | 11.x

## Installation
To install this package tou can use composer:
```bash
composer require slvler/veriphone-validation
```
## Usage
- First of all we'll add the API key and API Url of the service we're using to our .env file of our project. If you don't have an account yet on veriphone.io, you should create one. Once you have an account you can copy your API key from the dashboard page and put it into you .env file.
```php
VERIPHONE_BASE_URL="https://api.veriphone.io/"
VERIPHONE_API_KEY="YOUR-API-KEY"
```
- you should extract the config/veriphone.php file to the config folder.
```php
php artisan vendor:publish --tag=veriphone
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
- [slvler](https://github.com/slvler)
## License
The MIT License (MIT). Please see [License File](https://github.com/slvler/veriphone-service/blob/main/LICENSE.md) for more information.

## License
The MIT License (MIT). Please see [License File](https://github.com/slvler/veriphone-service/blob/main/LICENSE.md) for more information.

## Contributing
You're very welcome to contribute.
Please see [CONTRIBUTING](https://github.com/slvler/veriphone-service/blob/main/CONTRIBUTING.md) for details.