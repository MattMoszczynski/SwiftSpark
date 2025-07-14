# Swift Spark

Swift spark is a demo Laravel App made for renting electric scooters.

## Database schema

https://drawsql.app/teams/mm-team/diagrams/swift-spark-demo

## Models

- **User** - model representing a user in the application;
- **Scooter** - model representing an electric scooter that can be rented by users;
- **Ride** - model representing a ride taken by a user on a scooter;
- **Zone** - model representing a special zone related to rides or scooters.

## Plans for future

1. Create a class for retrieving user coordinates and bind it to app using Service Container;
2. (ADMIN) Create a class for generating QR codes for scooters and bind it to app using Service Container;
3. Implement hiring and ending ride for RideController.
