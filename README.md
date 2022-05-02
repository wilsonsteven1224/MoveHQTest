Test Project for MoveHQ
=======================

Requirements
============

* PHP >= 7
* Laravel >= 8
* Vue >= 2.5
* VueX >= 3.6

Installation
============

## Install

Run the docker composer


```
$ docker-compose up --build
```

## DB seed

Run the database seeder and you're done

```
email: steven@test.com
password: 1111
```

```
$ docker-compose exec backend bash
# php artisan migrate
# php artisan db:seed
```
The application can now be accessed at

Open browser `http://localhost:8000/`



