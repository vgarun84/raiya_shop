# Install RiyaShop

## Prerequest ##
PHP 8.1
MySQL5.6 or grater

# Install Steps
```sh
Clone this project
Run 
1) composer install
2) npm install
3) create database riya_shop or change the database access at .env (change strip key needed)
4) php artisan migrate (install the tables)
5) php artisan db:seed (added the dumy data)
6) php artisan serve
# Open the application in browser 
http://127.0.0.1:8000
http://127.0.0.1:8000/shop/products
```

# Webpack  
```sh
npm run build
```

# testing card
```sh
https://stripe.com/docs/testing?testing-method=card-numbers#visa
```
