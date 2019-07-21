# Agüita de coco

Prueba técnica para siesa titulado "Agüita de coco".

- PHP: `>= v7.1.3`
- composer: `1.7.2`
- Laravel: `v5.8`
- Base de datos: `MySQL 5.5.5 / MariaDB 10.3.9`


# Pasos para ejecutar.
## 1. Obtener proyecto.

Clone o descargué el repositorio y ubíquelo en la carpeta de su preferencia.

## 2. Descargar dependencias.

1. Abrir una consola o terminal.
2. Ir a la carpeta donde se encuentra ubicado el proyecto.
3. Ejecutar el comando `$ composer install`.

## 3. Base de datos.
En la carpeta raíz del proyecto, renombrar el archivo __.env.example__ a __.env__.

Dentro de este archivo configuramos la base de dados a utilizar. Las variables encargadas de la conexión tiene el  prefijo __DB___.

Por medio del CLI de laravel y ubicados en la raíz del proyecto, en la terminal ejecutamos el comando `$ php artisan migrate`

__NOTA:__ El archivo __*aguitadecoco-DATA.sql*__ en la raíz, contiene datos de prueba.

__¡SOLO EN CASO DE NO FUNCIONAR LA MIGRACIÓN!__
__NOTA:__ El archivo __*aguitadecoco-SCHEMAS.sql*__ en la raíz, contiene las tablas necesarias para correr el proyecto.

## 4. Ejecutar el servidor.

Ejecutar `$ php artisan server` para subir un servidor de desarrollo. Vaya a [http://localhost:8000](http://localhost:8000/).
