## Installation

1. Clone the repo into a suitable directory with Laravel installed

2. Duplicate the .env.example file to .env and enter the database name, user name and password

3. Run `composer install` 

4. Run `php artisan key:generate` to generate the key

5. Run `php artisan migrate` to run the migrations

6. Run `php artisan db:seed` to seed the tables

7. Run `php artisan serve` to run the application

## The API

The API is front-facing and can be accessed through URL. The following is a list of web routes.

### Get All Users

> /users

### Get All Comments by User

> /comments/user/{user_id}

### Get All Comments on Game

> /comments/game/{game_id}

### Get All Games

> /games

### Filter Game by Name

> /games/?name={name_filter}

### Filter Game by Publisher

> /games/?publisher={publisher_filter}

### Filter Game by Release Date

> /games/?release_date={release_filter}

### Mix and Match Filters

> /games/?name={name_filter}&publisher={publisher_filter}&release_date={release_filter}