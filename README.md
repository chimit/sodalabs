# Yet another TODO app

![Todo](https://github.com/chimit/sodalabs-assignment/blob/master/todo.png?raw=true)

## Installation instructions

1. Clone the repository and `cd` to the destination folder;
2. Run `composer install`;
3. Rename `.env.example` to `.env` and specify your MySQL connection credentials (`DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`) or use SQLite (instructions below);
4. Run `php artisan migrate`;
5. Run `php artisan serve`;
6. Open [http://127.0.0.1:8000](http://127.0.0.1:8000) (or another IP returned by the previous command) in your browser.

### SQLite

You can also use SQLite instead of MySQL (step 3). To make it work create a database file right in the repo folder:

```
touch database.sqlite
```

Then change settings in the `.env` file:

```
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database.sqlite
```

After changing the `.env` file don't forget to run `php artisan config:cache`. Now you can continue from the step 4.
