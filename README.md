# Wikimedia Reports WordPress plugin

This plugin is designed to abstract the content types and block elements used to author reports across multiple Wikimedia website properties. At its core, it provides

- A "Reports" custom post type to permit the authoring of a report as a discrete site subsection
- Multiple content blocks which are useful to the creation of reports
- Integration code to ensure a standardized look and feel across relevant websites

## Development

Set up a local WordPress environment using the tool of your choice — [WordPress VIP's `dev-env` toolkit is one good option](https://docs.wpvip.com/vip-local-development-environment/) — and then clone this project as a plugin within your local WordPress site.

Next, follow these steps from the command line within this project's folder:

```shell
composer install
nvm use
npm ci
npm run build
```

These steps (which assume you have [Composer](https://getcomposer.org/) and [nvm](https://github.com/nvm-sh/nvm) installed) will compile and copy the bundled project files into the `build/` folder. At this time you should be able to activate the plugin and use it on your local site.

### Hot-reloading dev server

If you run `npm run start` instead of the build command above, it will start a hot-reloading dev server. Changes to CSS, React components, and some other functions will automatically be swapped out within the running application. To hot-reload blocks, refer to the "HMR" (hot module reloading) boilerplate code in any of the project blocks' `index.js` files.
