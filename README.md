# Swift Spark

Swift spark is a demo Laravel App made for renting electric scooters.


[![PHP Version](https://img.shields.io/badge/PHP-^8.1-4f5b93?logo=PHP&style=flat-square)](https://www.php.net/releases/8.1/en.php)
[![Laravel](https://img.shields.io/badge/Laravel-^12.0-f9322c?logo=Laravel&style=flat-square)](https://laravel.com/)

## Database schema

https://drawsql.app/teams/mm-team/diagrams/swift-spark-demo

## Models

- **User** - model representing a user in the application;
- **Scooter** - model representing an electric scooter that can be rented by users;
- **Ride** - model representing a ride taken by a user on a scooter;
- **Zone** - model representing a special zone related to rides or scooters.

## Additional helpers

### Pint

An addon used for code formatting. Use by typing command:

```bash
./vendor/bin/pint
```

Url: [https://laravel.com/docs/12.x/pint](https://laravel.com/docs/12.x/pint)

### Larastan

An addon which helps by detecting possible errors in code (based on PHPStan). Use by typing command:

```bash
./vendor/bin/phpstan analyse --memory-limit=1G
```

Url: [https://github.com/larastan/larastan](https://github.com/larastan/larastan)

## Plans for future

1. Create a class for retrieving user coordinates and bind it to app using Service Container;
2. `ADMIN` Create a class for generating QR codes for scooters and bind it to app using Service Container;
3. `ADMIN` CRUD controller for Scooters;
4. Implement hiring and ending ride for RideController.
