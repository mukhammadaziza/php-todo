# PROJECT BASED ON CUSTOM FRAMEWORK MADE BY ME
https://github.com/mukhammadaziza/mvc_framework

Email: muazizabd@gmail.com

# IMPORTANT
.htaccess files were added make sure you have them if not then add .htaccess file to
1. php-todo/.htaccess
   <IfModule mod_rewrite.c>
      RewriteEngine on
      RewriteRule ^$ public/ [L]
      RewriteRule (.*) public/$1 [L]
    </IfModule>

2. php-todo/public/.htaccess
   <IfModule mod_rewrite.c>
      Options -Multiviews
      RewriteEngine On
      RewriteBase /php-todo/public
      RewriteCond %{REQUEST_FILENAME} !-d
      RewriteCond %{REQUEST_FILENAME} !-f
      RewriteRule  ^(.+)$ index.php?url=$1 [QSA,L]
    </IfModule>
