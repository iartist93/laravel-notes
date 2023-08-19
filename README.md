# Notes App

### About

A personal practice project, for learning `Laravel`, `blades`, `PHP`, `Vue.js`.

Most of the code here is generated using ChatGPT 3, I'm trying a new learning approach where I'm using ChatGPT to both
learn Laravel and building an app piece by piece from scratch.

### TODO List

- [ ] Move notes inside a folder.
- [ ] Search notes by title or content.
- [ ] Add tags to a note.
- [ ] Change the note color.
- [ ] Change a folder color.
- [ ] Re-order folders.
- [ ] Re-order notes.

-----

### Install

```sh
> composer install
> npm install
```

### Check database is up and running

```sh
> sudo service mysql status
> sudo service mysql start # port 3306 by default
```

### Run Migration

```sh
> php artisan migrate
```

### Run dev server

```sh
# Run laraval php server
> php artisan serve

# run the laravel mx
> npm run serve
```

---

## Vite

- We use `vite` as a bundler and assets compiler (e.g. convert compile tailwind to css)
- configure `vite.config.js` to add more plugins, and add Tailwind configurations.

---

### Controller

- Usually used inside `routes` to direct the incoming requests through controllers methods.

#### Create new controller

```sh
> php artisan make:controller ControllerName
```
