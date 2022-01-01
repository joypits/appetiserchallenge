# Appetiser Calendar Event Coding Challenge
Coding challenge

Laravel : https://laravel.com/

VueJS: https://vuejs.org/

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.


### Prerequisites

```
PHP Version: >= 7.3|^8.0
Node JS: https://nodejs.org/en/
Composer: https://getcomposer.org/

Server: 
Windows: 
XAMP: https://www.apachefriends.org/download.html
WAMP: http://www.wampserver.com/en/

Linux or Mac:
MAMP: https://www.mamp.info/en/downloads/
```

```
Note: 
To change your database configuration like hosts, database name, username and 
pass please edit it to your .env for your local server configuration.

create database name: appetiser
```

### Installing

Note: Please clone to your server Document-Root.
```
git clone https://github.com/joypits/appetiserchallenge.git
cd to this project directory /appetiserchallenge
```

Note:
Before running this command make sure your database configuration in .env is correct.

```
Run this command
composer install

To generate keys:
php artisan key:generate

```

### Next:

```
Run this command
npm run dev
```

```
Run this command in separate terminal
php artisan serve

Note: Development server will run at http://127.0.0.1:8000
```

```
Run this command
php artisan migrate:fresh --seed

Note: This will migrate the database schema and the calendar seeder for the default value
```
