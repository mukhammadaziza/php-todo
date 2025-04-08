# IMPORTANT
.htaccess file were removed while uploading to github so please add .htaccess file to

## 1. php-todo/.htaccess
<IfModule mod_rewrite.c>
  RewriteEngine on
  RewriteRule ^$ public/ [L]
  RewriteRule (.*) public/$1 [L]
</IfModule>

## 2. php-todo/public/.htaccess
<IfModule mod_rewrite.c>
  Options -Multiviews
  RewriteEngine On
  RewriteBase /php-todo/public
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteRule  ^(.+)$ index.php?url=$1 [QSA,L]
</IfModule>

Then you will be able to run the code in yout localhost
XAMPP server was used with Linux Ubuntu oprationg system


# ToDo App made with PHP
ToDo App

### Framework contains these core classes
1.Routing - responsible for routing <br>
2.Database - database connection <br>
3.Dispatcher - dispatch the matched route <br>
4.Request - handling global variables <br> 
5.Controller - base controller (render views and inserts data) 

### For more documentation of this framework visit at https://mukhammadaziz.com

### Disclaimer 
This is a personal project and it may have some serious bugs and security leaks.

### Check out my website to contact
https://mukhammadaziz.com
