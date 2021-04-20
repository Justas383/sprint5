# Laravel CRUD Project Manager app

## Description:
CRUD (create, read, update, delete)
-   Employees table:

    -   Add new employees.
    -   Edit existing employees.
    -   Delete employees.

-   Projects table:

    -   Add new projects.
    -   Edit projects.
    -   Delete projects.

## Launch instructions:
-   If you do not have composer installed on your system, install it (installation instructions [here](https://getcomposer.org/download)).
-   Clone this repository or download it as a ZIP package.
-   Open it with Visual Studio Code or your preferred code editor.
-   Import 'sprint5.sql' into your MySql server.
-   Rename **'.env.example'** file to **'.env'** inside of the project's root directory and configure the database information.
-   Using GitBash, CMD or other terminal in your code editor:
    -   if composer is installed locally: run **php <'path to composer.phar file location'>/composer.phar install**
    -   if composer is installed on your system globally: run **composer install**
-   If you chose to import 'sp5db.sql', in terminal:
    -   Run **php artisan key:generate**
    -   Run **php artisan serve**
-   If you created a fresh database:
    -   Run **php artisan key:generate**
    -   Run **php artisan migrate** to create tables.
    -   Run **php artisan db:seed** to fill tables with data.
    -   Run **php artisan serve**
-   Follow the link that appears in the terminal after running 'php artisan serve'.

## Author:

[Justas Gud.](https://github.com/Justas383)