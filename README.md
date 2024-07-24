# <p align="center">Blog Post</p>

- **[Github Repository](https://github.com/netflams10/interview-test)**

### Setting Up

##### Clone Repo:

- git clone git@github.com:netflams10/interview-test.git.
- cd interview-test.
- cp .env.example .env.
- setup your database credentials

##### Docker Setup
- docker-compose up -d
- docker compose exec php bash
- composer install
- php artisan migrate --seed

##### Remove Docker File
- docker compose down -v

## Notes

- nginx connects to the application with default on port: 3050
- use /api on base url
- if you are using docker-compose please docker compose might give error response, Please know which you are using.



