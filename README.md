<h1>Chez Marcel <a href='https://app.netlify.com/sites/chezmarcel/deploys'><img align="right" src="https://api.netlify.com/api/v1/badges/9e8a5cf9-94c9-4319-9e5d-2a0b14d63063/deploy-status"></a></h1>

Website for [Chez Marcel Sinaia](https://chezmarcel.ro), built with [Jigsaw](http://jigsaw.tighten.co/) and [Tailwind CSS](https://tailwindcss.com/). Hosted with [Netlify](https://www.netlify.com/).

## Requirements

- PHP 7
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org) and NPM

## Getting Started

1. Clone this repo

2. Navigate to the folder

    ```sh
    cd chez-marcel
    ```

3. Install PHP dependencies
    ```sh
    composer install
    ```

4. Install JS dependencies
    ```sh
    npm install
    ```


5. Run the dev script to build the site

    ```sh
    npm run dev
    ```

To use Browsersync, run the watch script instead: `npm run watch`

**Note**: unused CSS will be removed *only* when you build for production: `npm run production`

## What is Jigsaw?

> A framework for rapidly building static sites using the same modern tooling that powers your web applications. - [Jigsaw](http://jigsaw.tighten.co/)

## What is Tailwind CSS?

> A Utility-First CSS Framework for Rapid UI Development - [Tailwind CSS](https://tailwindcss.com/)

