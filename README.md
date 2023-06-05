# Meilisearch SaaS demo

## Stack

- PHP 8.2
- Laravel 10
- TailwindCSS
- [HyperUI](https://www.hyperui.dev/)
## Development

This project uses [Sail](https://laravel.com/docs/10.x/sail) for local development using Docker. 

Launch Docker services:

```sh
sail up
```

Launch storybook using Blast:

```sh
export SHELL=/bin/bash && ./vendor/bin/sail artisan blast:launch
```

