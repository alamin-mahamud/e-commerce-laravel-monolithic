# Monolithic Ecommerce

## Getting Started

### Prerequsites

- Docker
- Docker Compose

### Installation

- Clone the Project

```shell
export PROJECT_NAME="laravel-application"
git clone https://github.com/alamin-mahamud/e-commerce-laravel-monolithic.git $PROJECT_NAME
cd $PROJECT_NAME
```

- Create an `.env` file

```shell
cp .env.example .env
```

- `docker-compose up` (stop `nginx`, `mysql` if they are running locally or use different port)

```shell
docker-compose up
```

- inside the container shell and run this commands

```shell
docker exec -it CORE_PHP bash
cd /var/www/laravel-application
composer install
chown -R $USER:$USER /var/www/laravel-application
php artisan key:generate

# install all the javascript libraries using npm install
npm install
```

## Resources

- [E-commerce in Laravel](https://blog.pusher.com/ecommerce-laravel-vue-part-2/)