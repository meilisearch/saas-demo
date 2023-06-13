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

> Replace `sail` by `./vendor/bin/sail` or create an alias to be able to use the following commands.

Install PHP dependencies:

```sh
composer install
```

Launch Docker services:

```sh
sail up
```

Launch storybook using Blast:

```sh
sail artisan blast:launch
```

> Added `SHELL` environment variable to Docker service to handle [Webpack reloading](https://github.com/area17/blast/issues/22).

## Contributing

This project uses the [Blade Formatter](https://marketplace.visualstudio.com/items?itemName=shufo.vscode-blade-formatter) VS code extension to format `.blade.php` files.
