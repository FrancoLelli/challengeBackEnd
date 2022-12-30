En primer lugar ejecute el archivo utilizando un servidor local. En mi caso utilice el XAMPP.
Por lo tanto a la carpeta apirest, pegarla en la siguiente direccion: C:\xampp\php\www\
Luego, crear en MySQL, una base de datos llamada apirest e importar el archivo apirest.sql que se encuentra en la carpeta apirest

Cabe destacar que hay un archivo PNG en el que se encuentra la estrucura de la base de datos

Para registrarte en la API, ejecutar los siguientes comandos
http://127.0.0.1:8000/api/register CON POST

Y ya podras acceder a la API

----Directors:

//View All
http://127.0.0.1:8000/api/director

//Search by ID
http://127.0.0.1:8000/api/director/1

//Insert New Director
http://127.0.0.1:8000/api/director/insert

//Update Director
http://127.0.0.1:8000/api/director/update/1

//Delete Director
http://127.0.0.1:8000/api/director/delete/1

----Actor:

//View All
http://127.0.0.1:8000/api/actor

//Search by ID
http://127.0.0.1:8000/api/actor/1

//Insert New Ac
http://127.0.0.1:8000/api/actor/insert

//Update Ac
http://127.0.0.1:8000/api/actor/update/1

//Delete Actor
http://127.0.0.1:8000/api/actor/delete/1

----Pelicula

//View all
http://127.0.0.1:8000/api/pelicula

//Search by ID
http://127.0.0.1:8000/api/pelicula/1

//Insert Movie
http://127.0.0.1:8000/api/pelicula/insert

//Update Movie
http://127.0.0.1:8000/api/pelicula/update/1

//Delete Movie
http://127.0.0.1:8000/api/pelicula/delete/1

---Serie

//View all
http://127.0.0.1:8000/api/serie

//Search by ID
http://127.0.0.1:8000/api/serie/1

//Insert Serie
http://127.0.0.1:8000/api/serie/insert

//Update Serie
http://127.0.0.1:8000/api/serie/update/1

//Delete Serie
http://127.0.0.1:8000/api/serie/delete/1


---Episodio

//View all
http://127.0.0.1:8000/api/episodio

//Search by ID
http://127.0.0.1:8000/api/episodio/1

//Insert episodio
http://127.0.0.1:8000/api/episodio/insert

//Update episodio
http://127.0.0.1:8000/api/episodio/update/1

//Delete episodio
http://127.0.0.1:8000/api/episodio/delete/1
