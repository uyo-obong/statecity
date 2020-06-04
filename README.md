# Laravel StateCity Package

[![Issues](https://img.shields.io/github/issues/uyo-obong/statecity?style=flat-square)](https://github.com/uyo-obong/statecity/issues)
[![Issues](https://img.shields.io/github/forks/uyo-obong/statecity?style=flat-square)](https://github.com/uyo-obong/statecity/forks)
[![Issues](https://img.shields.io/github/stars/uyo-obong/statecity?style=flat-square)](https://github.com/uyo-obong/statecity/stargazers)

## This laravel package load all states in Nigeria and their respective Cities

## Requirements 

| | Laravel Version | Php Version | |
|---- |----|----|----|
|  
|  | ^7.0|^7.0 |    

### Reference elements

Your request will content the following reference name:

- `state`: attribute name use in select field.
- `code`: attribute name use in getting 3 characters use for each state.  
- `city`: attribute name use in select field for LGA.


Example:

- Single Row

![alt single](https://res.cloudinary.com/uyo-obong/image/upload/v1591166311/single_row.png)

- Double Row Select

![alt double](https://res.cloudinary.com/uyo-obong/image/upload/v1591166388/double_row.png)


## Setup

- `composer require`

```php
composer require uyoobonga/statecity
```

- Run Migrations

```php
php artisan migrate
```

- Seed database

```php
php artisan db:seed --class=Uyoobonga\\StateCity\\database\\seeds\\StateCityTableSeeder
```

## Usage

 Include any of the blade syntax in a location you want in your blade template.

- Double row 

```
@include('statecity::double_row_select')

```

- Single row

```
@include('statecity::single_row_select')
```

## TODO

- Symfony support
- Django support
- vuejs support

## Contributions

If you want to contribute to this library, fork the repo and submit your PR. 
- Issue and PR are welcome. 

## Contributors

- [Uyo-obong](https://github.com/uyo-obong/)

## About

This package published under MIT license. If you have any question or suggestion, please feel free to submit an issue, or email me uyoobonga@gmail.com.
