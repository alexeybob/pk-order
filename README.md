# pk-order

Laravel project with a standard Docker local stack via Laravel Sail.

## Services

The Docker setup is defined in `compose.yaml` and includes:

- `app` (PHP 8.4 + Nginx)
- `mysql` (MySQL 8.4)
- `redis`
- `mailpit`

## Quick start

```bash
cd /home/oleksii-b/Workspace/pk-order
cp .env.example .env
composer install
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate
```

Open:

- App: `http://localhost:8000`
- Mailpit: `http://localhost:8025`

## Common commands

```bash
./vendor/bin/sail up -d
./vendor/bin/sail down
./vendor/bin/sail artisan test
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

## Notes

- `.env.example` is preconfigured for Docker networking (`mysql`, `redis`, `mailpit`).
- Default DB credentials in Docker are:
  - database: `laravel`
  - user: `sail`
  - password: `password`

