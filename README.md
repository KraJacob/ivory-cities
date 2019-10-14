# Package ivory cities


This package retrieve all the ivory cities

## Getting Started

### Prerequisites

What things you need to install the software and how to install them

```
php: ^7.1.3
laravel/framework: 5.*
mtownsend/xml-to-array: ^1.0
```

### Installing

```
composer require kra/ivory-cities

```

publish the Service provider

```
php artisan vendor:publish --tag= Kra\IvoryCities\IvoryCitieServiceProvider
```
migration, execute this command to create the cities table in your database

```
php artisan migrate --path=/database/migrations/2019_10_14_151527_create_cities_table.php
```
seeds, execute this command to populate your cities table with all the ivory cost cities

```
php artisan db:seed --class=CitiesTableSeeder
```

