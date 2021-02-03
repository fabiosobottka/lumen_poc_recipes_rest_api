# Run Application Steps

## Configure your .env file and execute the follow commands:
- composer install
- php artisan jwt:secret
- php artisan migrate
- php -S localhost:8000 -t public

# Routes Documentation

## localhost:8000/api GET

Response HTTP status 200:
{
    "success": true,
    "result": "Hello there welcome to your first web api using lumen!"
}

------------------------------------------------------------------

## localhost:8000/api/user POST

Request:
{
    "username": "username",
    "email": "email@register.com.br",
    "password": "password",
    "password_confirmation": "password"
}

Response HTTP status 201:
{
    "user": {
        "username": ""username",",
        "email": "email@register.com.br",
        "updated_at": "yyyy-MM-ddTHH:mm:ss.000000Z",
        "created_at": "yyyy-MM-ddTHH:mm:ss.000000Z",
        "id": 3
    },
    "message": "CREATED"
}

------------------------------------------------------------------

## localhost:8000/api/login POST

Request:
{
    "email": "email@register.com.br",
    "password": "password"
}

Response HTTP status 200:
{
    "token": "bearer_token",
    "token_type": "bearer",
    "expires_in": 3600
}

------------------------------------------------------------------

## localhost:8000/api/logout POST
Authentication: Oauth 2.0 Bearer Token

Response HTTP status 200

------------------------------------------------------------------

## localhost:8000/api/user/1 GET
Authentication: Oauth 2.0 Bearer Token

Response HTTP status 200:
{
    "user": {
        "id": 1,
        "username": ""username",",
        "email": "email@register.com.br",
        "created_at": "yyyy-MM-ddTHH:mm:ss.000000Z",
        "updated_at": "yyyy-MM-ddTHH:mm:ss.000000Z"
    }
}

------------------------------------------------------------------

## localhost:8000/api/user/profile GET
Authentication: Oauth 2.0 Bearer Token

Response HTTP status 200:
{
    "user": {
        "id": 1,
        "username": "username",
        "email": "email@register.com.br",
        "created_at": "yyyy-MM-ddTHH:mm:ss.000000Z",
        "updated_at": "yyyy-MM-ddTHH:mm:ss.000000Z"
    }
}

------------------------------------------------------------------

## localhost:8000/api/recipe POST
Authentication: Oauth 2.0 Bearer Token

Request:
{
    "name": "Strogonoff",
    "ingredients": "Meet, mostard, ketchup, tomate souce, sugar, english souce",
    "steps": "Prepare"
}

Response HTTP status 201:
{
    "name": "Strogonoff",
    "ingredients": "Meet, mostard, ketchup, tomate souce, sugar, english souce",
    "steps": "Prepare",
    "updated_at": "yyyy-MM-ddTHH:mm:ss.000000Z",
    "created_at": "yyyy-MM-ddTHH:mm:ss.000000Z",
    "id": 1
}

------------------------------------------------------------------

## localhost:8000/api/recipe/1 PUT
Authentication: Oauth 2.0 Bearer Token

Request
{
    "name": "Strogonoff",
    "ingredients": "Chicken, mostard, ketchup, tomate souce, sugar, english souce",
    "steps": "Prepare Update"
}

Response HTTP status 200:
{
    "id": 1,
    "name": "Strogonoff",
    "ingredients": "Chicken, mostard, ketchup, tomate souce, sugar, english souce",
    "steps": "Prepare Update",
    "created_at": "yyyy-MM-ddTHH:mm:ss.000000Z",
    "updated_at": "yyyy-MM-ddTHH:mm:ss.000000Z"
}

------------------------------------------------------------------

## localhost:8000/api/recipes GET

Response HTTP status 200:
[
    {
        "id": 1,
        "name": "Strogonoff",
        "ingredients": "Chicken, mostard, ketchup, tomate souce, sugar, english souce",
        "steps": "Prepare Update",
        "created_at": "yyyy-MM-ddTHH:mm:ss.000000Z",
        "updated_at": "yyyy-MM-ddTHH:mm:ss.000000Z"
    },
    {
        "id": 2,
        "name": "Strogonoff",
        "ingredients": "Meet, mostard, ketchup, tomate souce, sugar, english souce",
        "steps": "Prepare",
        "created_at": "yyyy-MM-ddTHH:mm:ss.000000Z",
        "updated_at": "yyyy-MM-ddTHH:mm:ss.000000Z"
    }
]

------------------------------------------------------------------

## localhost:8000/api/recipe/1 GET

Response HTTP status 200:
{
    "recipe": {
        "id": 1,
        "name": "Strogonoff",
        "ingredients": "Chicken, mostard, ketchup, tomate souce, sugar, english souce",
        "steps": "Prepare Update",
        "created_at": "yyyy-MM-ddTHH:mm:ss.000000Z",
        "updated_at": "yyyy-MM-ddTHH:mm:ss.000000Z"
    }
}

------------------------------------------------------------------

## localhost:8000/api/recipe/{id} DELETE

Response HTTP status 200:
{
    "msg": "Excluído com sucesso !"
}

------------------------------------------------------------------

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
