# Meilisearch SaaS demo

## Stack

- PHP 8.2
- Laravel 10
- TailwindCSS
- [HyperUI](https://www.hyperui.dev/)
## Development

This project uses [Sail](https://laravel.com/docs/10.x/sail) for local development using Docker. 

> Replace `sail` by `./vendor/bin/sail` or create an alias to be able to use the following commands.

Launch Docker services:

```sh
sail up
```

Launch storybook using Blast:

```sh
sail artisan blast:launch
```

> Added `SHELL` environment variable to Docker service to handle [Webpack reloading](https://github.com/area17/blast/issues/22).

