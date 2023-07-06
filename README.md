<p align="center">
  <a href="https://www.meilisearch.com/?utm_campaign=saas&utm_source=github&utm_medium=readme" target="_blank">
    <img src="https://github.com/meilisearch/meilisearch/blob/main/assets/logo.svg" alt="Meilisearch" width="200" height="200" />
  </a>
</p>

<h1 align="center">Meilisearch SaaS demo</h1>

<h4 align="center">
  <a href="https://www.meilisearch.com/?utm_campaign=saas&utm_source=github&utm_medium=readme">Website</a> |
  <a href="https://www.meilisearch.com/pricing?utm_campaign=saas&utm_source=github&utm_medium=readme">Meilisearch Cloud</a> |
  <a href="https://blog.meilisearch.com/?utm_campaign=saas&utm_source=github&utm_medium=readme">Blog</a> |
  <a href="https://docs.meilisearch.com/?utm_campaign=saas&utm_source=github&utm_medium=readme">Documentation</a> |
  <a href="https://discord.meilisearch.com/?utm_campaign=saas&utm_source=github&utm_medium=readme">Discord</a>
</h4>

> Meilisearch is an open-source search engine that offers fast, relevant search out of the box. 
 
👉 [Meilisearch repository](https://github.com/meilisearch/meilisearch)

## 🧰 Stack

This project uses:

- [PHP 8.2](https://www.php.net/)
- [Laravel 10](https://laravel.com/)
- [TailwindCSS 3](https://tailwindcss.com/) and [HyperUI](https://www.hyperui.dev/) components
- [Heroicons 2](https://heroicons.com/) and social medias icons from [icons8](https://icons8.com/icons/collections/EnE9mEHAiX2D)
- [Meilisearch](https://www.meilisearch.com/?utm_campaign=saas&utm_source=github&utm_medium=readme) for fast, relevant search
## 🧑‍💻 Development

This project uses [Sail](https://laravel.com/docs/10.x/sail) for local development using Docker. 

> Make sure to follow the Sail documentation and prefix commands accordingly to be able to run them in Docker.

### Installation

Install PHP dependencies:

```sh
composer install
```

Install Node dependencies:

```sh
sail yarn
```

Launch Docker services for local development:

```sh
sail up
```

Run JavaScript dev server:

```sh
sail yarn dev
```

## 🛠️ Setup

Copy `.env.example` as `.env` and update environment variables as needed.

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
