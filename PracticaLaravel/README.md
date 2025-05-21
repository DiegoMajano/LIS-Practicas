
# Practica Laravel - Inventario Libros con PHP:Laravel

Desafio practico 3 - Lenguajes Interpretados en el Servidor.

Para el uso del proyecto se debe correr los siguientes comandos:

- composer install ó composer i (In short)

Despues de eso, crear un archivo .env en la raiz del proyecto y copiar del .env.example en el archivo .env que creó en la raíz del proyecto.

Pegar el siguiente comando:

- php artisan key:generater ó php artisan key:gen (In short)

Luego, debe tener la base de datos de las practicas anteriores "inventario_libros".

Si no la tiene, puede usar mis credenciales de mi base de datos en la nube mandandome un mensaje por el aula o al correo: diego.majano14@gmail.com

Debe de asegurarse que en el archivo .env la variable "SESSION_DRIVER" como valor tenga "file", para evitar conflictos de session y funcione correctamente el token csrf.

Luego de todas las configuraciones correr:

- php artisan serve