# ZooPruebaTecnica
Prueba Tecnica para Oktal

Mi nombre es Carlos Andres Uribe y soy uno de sus aspirantes al cargo de programador.

Esta es mi prueba tecnica.

en la carpeta config se encuentra la base de datos lista.


RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-l
RewriteRule ^(.*)$ index.php?url=$1 [L,QSA]