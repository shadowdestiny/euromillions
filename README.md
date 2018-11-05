# Project Test API

Un ejemplo de RESTful API creado con Laravel Lumen.

## Pre-requisitos

1) Este RESTful API fue creado con [Laravel Lumen](https://lumen.laravel.com/), que nos exige una versión moderna de PHP y algunas de sus extensiones instaladas:

```
PHP >= 7.1.0
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension
```

Para el desarrollo se utilizo el meta-paquete XAMPP 
[descargar aquí](https://www.apachefriends.org/download.html). Se recomienda descargar 
XAMPP con PHP 7.1 (recomendado).

O simplemente correr docker que tenga un contenedor de php mayor a PHP7

2) También necesitaremos composer ([descargar aquí](https://getcomposer.org/)) para descargar las dependencias de [Laravel Lumen](https://lumen.laravel.com/).

3) Puedes instalar un cliente para probar todos los *end-points*. 
[Postman](https://www.getpostman.com/) es una buena opcion, 
aplicación gratuita para Windows, GNU/Linux y OS X. Después de instalar Postman se puede **importar** una colección
de *end-points* que se creo para este test en: `<REPO>/lmarin/Project Test API.postman_collection`.

Una vez importada se podra tener acceso a todos los servicios de Lumen como en la siguiente imagen:

![Postman](/images/postman.png)


## Instalación para Desarrollo

1) Instalar dependencias de Composer (ejecutar desde el directorio raiz de este proyecto).
```
composer install
```
2) Configurar base de datos:

Solo debes correr el siguiente comando
```
php artisan migrate:refresh --seed
```
2.3) El archivo llamado `.env` en la raíz de este proyecto debe tener las siguientes caracteristicas, con los siguientes datos:
```
APP_NAME=Lumen
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost
APP_TIMEZONE=UTC

LOG_CHANNEL=stack
LOG_SLACK_WEBHOOK_URL=

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3060
DB_DATABASE=euromillions
DB_USERNAME=root
DB_PASSWORD=mypassword

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis

REDIS_HOST=192.168.99.100
REDIS_PASSWORD=null
REDIS_PORT=32782
```

3) Iniciar tu servidor en el puerto 8085
```
php -S localhost:8085 -t public
```

4) Para manejar el uso de cache en el query de consulta, tienes que instalar redis como contenedor de doker y pasar los puertos en el .env

5) Actualmente "remember Cache" se realiza desde la clase 
```
EuromillionsDrawController

$euromillions = Cache::remember('usersTable', 1, function() {
    return EuromillionsDraw::all()->first();
});

## por cada minuto
```

[Cache](/images/cache.png)


## Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

### Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

### Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
