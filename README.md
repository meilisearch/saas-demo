# Meilisearch SaaS demo

## Stack

- PHP 8.2
- Laravel 10
- TailwindCSS
- Icons from [Heroicons](https://heroicons.com/)
- Social Media icons from [icons8](https://icons8.com/icons/collections/EnE9mEHAiX2D)
- [HyperUI](https://www.hyperui.dev/)
## Development

This project uses [Sail](https://laravel.com/docs/10.x/sail) for local development using Docker. 

> Make sure to follow the Sail documentation and prefix commands accordingly to be able to run them in Docker.

### Installation

Install PHP dependencies:

```sh
composer install
```

Launch Docker services:

```sh
sail up
```

## Configuration

Copy `.env.example` as `.env` and update the credentials as needed.

Setup your Meilisearch settings by running:

```sh
artisan scout:sync-index-settings
```

Seed the database:

```sh
artisan migrate:fresh --seed
```

## Conventions

This project uses the [Blade Formatter](https://marketplace.visualstudio.com/items?itemName=shufo.vscode-blade-formatter) VS code extension to format `.blade.php` files.
