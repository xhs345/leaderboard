General Information
==============================================
Demo is build with [Lumen](https://lumen.laravel.com/) for the back-end and [Vue.js](http://vuejs.org/) for the front-end.
[Pusher](https://pusher.com) is used for realtime broadcasting/synconizing of scores. 


Server Requirements
==============================================

This demo was tested with a current version of [Laravel Homestead](https://laravel.com/docs/5.2/homestead), 
but other setups should  work as well, as long as following minimum requirements are fulfilled:

    PHP >= 5.5.9
    OpenSSL PHP Extension
    PDO PHP Extension
    Mbstring PHP Extension
    MySQL/MariaDB/Sqlite3/Postgres


Installation instructions
==============================================

1. run `composer install`

2. open file .env and adjust settings 

3. setup database according to name specified in .env file

4. run `php artisan migrate` (will create "players" table in db)

5. run `php artisan db:seed` (will create 6 player with a random name and random score)


Possible improvements I see
==============================================
- Add (unit)-tests to test functionality
- replace jQuery with [vue-resource](https://github.com/vuejs/vue-resource), 
	because jQuery is only really used for AJAX calls and vue-resource has less overhead
- test other broadcasting driver (Redis)
- I tried to use PHP and multiple database operations for this demo, which is possibly slower that a full front-end approach
- Caching of player-list that clients request