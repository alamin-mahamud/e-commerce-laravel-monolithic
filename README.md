# Monolithic Ecommerce

## Getting Started

### Prerequsites

- Git
- Docker
- Docker Compose
- Node Package Manager (npm/yarn)

### Installation

- Clone the Project

```shell
export PROJECT_NAME="laravel-application"
git clone https://github.com/alamin-mahamud/e-commerce-laravel-monolithic.git $PROJECT_NAME
cd $PROJECT_NAME
```

- `docker-compose up` (stop `nginx`, `mysql` if they are running locally or use different port)

```shell
docker-compose up -d
```

```shell
cd www
```

- create a `.env` file for your application

```shell
cp .env.example .env
```

- Add Database credentials in `.env`

- inside the container shell and run this commands

```shell
docker exec -it CORE_PHP bash
cd /var/www/laravel-application

# Run Composer install for installing necessary libs
composer install

# Set Permissions on folders
chown -R $USER:$USER /var/www/laravel-application

# Generate the application key
php artisan key:generate

# Migrate the application
php artisan migrate

# Install laravel passport
php artisan passport:install

# Seed Database
php artisan db:seed

exit
```

- run `npm install`.

## Acknowledgement

- [E-commerce in Laravel](https://blog.pusher.com/ecommerce-laravel-vue-part-2/)