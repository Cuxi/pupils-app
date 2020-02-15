# pupils-app

Instalación

Para esta aplicación necesitamos el uso de:

-MySQL

-Apache

O bien instalación de XAMPP.

Desarrollo

La aplicación necesitará una base de datos en mysql donde haya un database llamando news, junto con una tabla con el mismo nombre. La tabla se creará y se rellenará a través del fichero sql que está colgado en el raíz del proyecto.


Copiamos el proyecto en /var/www/html en el caso de instalación del Apache. En caso de que sea la instalación de XAMPP se instalará en el htdocs y cambiamos el directorio de la configuración del Apache a que apunte a la carpeta de nuestro proyecto. Y lo llamamos con localhost/news/index.php. Con esta ruta se mosntratán el menú inicial de la aplicación junto con una breve descripción de la página.
