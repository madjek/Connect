# PHP Laravel Project. 

## Connect: web application LFG ("looking for a group") for gamers.

### Table of Contents

- [About](#about)
- [Getting Started](#getting_started)
- [Usage](#usage)

### About <a name = "about"></a>

GeeksHubs Bootcamp Fullstack Developer project.  
Connect: web application, which allows gamers to contact other gamers to form groups to play a video game, with the aim of being able to share a leisure time.

#### Deployment link to view the project
https://connect-chatting.herokuapp.com/

### Technologies used

<div align="center">  
<img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/php-original.svg" alt="PHP" height="50" /> 
<img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/laravel-plain-wordmark.svg" alt="Laravel" height="50" /> 
<img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/mysql-original-wordmark.svg" alt="MySQL" height="50" />  
<img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/bootstrap-plain.svg" alt="Bootstrap" height="50" />  
</div>

## Getting Started <a name = "getting_started"></a>

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See [deployment](#deployment) for notes on how to deploy the project on a live system.

### Clone repository

```sh
git clone https://github.com/madjek/Connect
```

### Installing

```sh
composer install
```

Rename .env.example to .env and update it with database credentials.  

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=connect
DB_USERNAME=root
DB_PASSWORD=
```

You can create tables in the database using migration files and seeders:  

```sh
php artisan migrate:fresh --seed
```

In order for our project to generate secure access tokens, we need to have encryption keys:  

```sh
php artisan passport:install --force
php artisan key:generate
```

### Start

```sh
php artisan serve
```

## Usage <a name = "usage"></a>

The main page has a list of games. You can go to the game page and view the game rooms only after login.  
After logging in, you can add a game and create a new room or go to an existing one.  
The room page has a chat room for players. Also, by clicking on a player's name, you can add him to your friendlist.  
On the profile page, you can see a list of rooms in which you chat and your friendlist.

![mainpage](https://user-images.githubusercontent.com/90720831/145723917-bd6d7ac4-1947-43b0-967e-b6d0bbc6f700.jpg)

