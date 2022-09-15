
# Instagram Clone Group B
    





## Installation

Please ensure that the following is installed before continuing: 

```
-php 8+/xampp
-composer for php
-node.js (16+) and npm
```
 
-Clone the repo: https://github.com/TroJ4nZ/instagram-clone-collab and **ensure that the directory of the project resides in xampp/htdocs**

in VS Code terminal run
```bash
npm install
```

-Run the command composer update in order to update the needed project dependencies
```
composer update
```
-Start Apache server and MySQL from xampp and ensure that there is a database created in MySQL named 'laravel'

Run database migrations in terminal
```
php artisan migrate:refresh
```
Run the server command in the terminal
```
php artisan serve
```
In a different terminal run the following command
```
npm run dev
```

in your browser visit the given IP
```
localhost:8000
```
