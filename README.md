<p align="center">
  <a href="https://www.meilisearch.com/?utm_campaign=saas-demo&utm_source=github&utm_medium=readme" target="_blank">
    <img src="https://github.com/meilisearch/meilisearch/blob/main/assets/logo.svg" alt="Meilisearch" width="200" height="200" />
  </a>
</p>

<h1 align="center">Meilisearch SaaS demo</h1>

<h4 align="center">
  <a href="https://www.meilisearch.com/?utm_campaign=saas-demo&utm_source=github&utm_medium=readme">Website</a> |
  <a href="https://www.meilisearch.com/pricing?utm_campaign=saas-demo&utm_source=github&utm_medium=readme">Meilisearch Cloud</a> |
  <a href="https://blog.meilisearch.com/?utm_campaign=saas-demo&utm_source=github&utm_medium=readme">Blog</a> |
  <a href="https://docs.meilisearch.com/?utm_campaign=saas-demo&utm_source=github&utm_medium=readme">Documentation</a> |
  <a href="https://discord.meilisearch.com/?utm_campaign=saas-demo&utm_source=github&utm_medium=readme">Discord</a>
</h4>

> Meilisearch is an open-source search engine that offers fast, relevant search out of the box.

## 💪 Looking to build this yourself?

Read our [Complete guide to full-text search with Laravel](https://blog.meilisearch.com/laravel-full-text-search/?utm_campaign=saas-demo&utm_source=github&utm_medium=readme)!

## ✨ Features

This SaaS demo uses the following:

- [Federated search](https://www.meilisearch.com/docs/reference/api/multi_search?utm_campaign=saas-demo&utm_source=github&utm_medium=readme)
- [Multi-tenancy](https://www.meilisearch.com/docs/learn/security/tenant_tokens?utm_campaign=saas-demo&utm_source=github&utm_medium=readme)
- [Filtering](https://www.meilisearch.com/docs/learn/fine_tuning_results/filtering?utm_campaign=saas-demo&utm_source=github&utm_medium=readme)
- [Sorting](https://www.meilisearch.com/docs/learn/fine_tuning_results/sorting?utm_campaign=saas-demo&utm_source=github&utm_medium=readme)

## 🧰 Stack

This project uses:

- [PHP 8.2](https://www.php.net/)
- [Laravel 10](https://laravel.com/)
- [TailwindCSS 3](https://tailwindcss.com/) and [HyperUI](https://www.hyperui.dev/) components
- [Heroicons 2](https://heroicons.com/) and social medias icons from [icons8](https://icons8.com/icons/collections/EnE9mEHAiX2D)
- [Meilisearch](https://www.meilisearch.com/?utm_campaign=saas-demo&utm_source=github&utm_medium=readme) for fast, relevant search

## 🧑‍💻 Development

This project uses [Sail](https://laravel.com/docs/10.x/sail), a local development environment based on Docker compose.

> Make sure to follow the Sail documentation and prefix commands accordingly to be able to run them in Docker.

### Installation

Install PHP dependencies:

```sh
sail composer install
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

## 🛠️ Configuration

Copy `.env.example` as `.env` and update environment variables as needed.

### Using Meilisearch with Laravel Sail

When running Meilisearch through Sail, your `MEILISEARCH_HOST` should follow the  `http://meilisearch:port` form (instead of `localhost:port`.) However, your front-end application expect the real URL to your Meilisearch instant.

This means that when running Meilisearch locally with Sail, your `.env` file will look like:

```sh
# This is the URL used by Laravel to access Meilisearch
MEILISEARCH_HOST=http://meilisearch:7700

# This is the URL used by JavaScript to access Meilisearch
VITE_MEILISEARCH_HOST=http://localhost:7700
```

> See [Sail documentation](https://laravel.com/docs/10.x/sail#meilisearch).

### Instructions

Setup your Meilisearch settings by running:

```sh
artisan scout:sync-index-settings
```

Seed the database:

```sh
artisan migrate:fresh --seed
```

## Conventions

**Blade**

This project uses the [Blade Formatter](https://marketplace.visualstudio.com/items?itemName=shufo.vscode-blade-formatter) VS code extension to format `.blade.php` files.

**JavaScript and Vue**

This project uses [ESLint](https://eslint.org/) to lint JavaScript and Vue files.

An error with Eslint requires to have `resolutions` key in the `package.json` file:
```json
"resolutions": {
  "strip-ansi": "6.0.1"
},
```
