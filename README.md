# Notes App

## Install

```sh
> composer install
> npm install
```

## Check database is up and running

```sh
> sudo service mysql status
> sudo service mysql start # port 3306 by default
```

## Run Migration

```sh
> php artisan migrate
```

## Run dev server

```sh
# Run laraval php server
> php artisan serve

# run the laravel mx
> npm run serve
```

---

## Vite

-   We use `vite` as a bundler and assets compiler (e.g. convert compile tailwind to css)
-   configure `vite.config.js` to add more plugins, and add Tailwind configurations.

---

## Controller

-   Usually used inside `routes` to direct the incoming requests through controllers methods.

### Create new controller

```sh
> php artisan make:controller ControllerName
```
