# Gestor de pedidos básico con Laravel 7.14.1
Este programa básico permite:
- Gestionar usuarios
- Gestionar roles
- Gestionar pedidos
- Gestionar proveedores
- Gestionar productos
- Control de carritos
- Incluye generador de base de datos y usuarios por defecto

Esta aplicación NO dispone de ninguna plantilla ni front-end. Siéntete libre de adaptarla a tus necesidades.

## Para instalar la aplicación
1.- * Se recomienda encarecidamente utilizar el gestor de paquetes composer *
```sh
composer install && composer update
```

2.- Copiar example.env y borrar la palabra "example" del nombre de archivo
3.- En el archivo .env establecer las variables de entorno pertinentes y la conexión con la base de datos
4.- Ejecutar en la consola si la base de datos existe y está vacía:
```sh
php artisan migrate --seed
```
4.1.- Ejecutar en la consola si la base de datos existe y tiene datos (se eliminarán):
```sh
php artisan migrate:refresh --seed
```

5.- Para probar la aplicación en entorno local ejecutar en consola:
```sh
php artisan serve
```
5.1.- Acceder al navegador (dirección y puerto por defecto):
```sh
localhost:8000
```

6.- Accede a la aplicación por el navegador:
- Usuario: customer1@test.com
- Password: qwe123QWE

