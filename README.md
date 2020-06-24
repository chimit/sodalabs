## Installation instructions

1. Clone the repository;
2. Run `composer install`;
3. Rename `.env.example` to `.env` and specify your MySQL connection credentials (`DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`);
4. Run `php artisan migrate`;
5. Run `php artisan serve`;
6. Open [http://127.0.0.1:8000](http://127.0.0.1:8000) (or another IP returned by the previous command) in your browser.
