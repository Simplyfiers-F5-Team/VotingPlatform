# Voting Platform

_Plataforma de Votaci贸n realizada como proyecto pedag贸gico para el BootCamp de Factoria F5._

## Comenzando 馃殌

_Estas instrucciones te permitir谩n obtener una copia del proyecto en funcionamiento en tu m谩quina local para prop贸sitos de desarrollo y pruebas._

Mira **Deployment** para conocer como desplegar el proyecto.


### Pre-requisitos 馃搵

_Que cosas necesitas instalar para poder ejecutar el proyecto._

Para empezar necesitas tener instalado:
* [Composer](https://getcomposer.org/download/)
* [PHP con la versi贸n 7.3 o superior.](https://www.php.net/downloads)

Un IDE o un editor de c贸digo: 
* [PhpStorm](https://www.jetbrains.com/phpstorm/)
* [VS Code](https://code.visualstudio.com/Download)

Base de datos (DB):
* [XAMPP](https://www.apachefriends.org/es/index.html) en Windows o [MAMP](https://www.mamp.info/en/downloads/) en MacOS.

### Instalaci贸n 馃敡

_Una vez descargado el proyecto lo que tendr谩 que hacer es seguir esta serie de pasos para poder desplegarlo:_
1. Abrir el proyecto con el IDE o editor y crear un archivo **.env**.
2. Copiar el contenido de **.env.example** dentro del archivo creado anteriormente: **.env**.
3. Despu茅s nos vamos al terminal de nuestro IDE o editor y ejecutamos el siguiente comando:

```
npm install
```

4. Una vez que ha acabado, escribimos los siguientes comandos:

```
composer install
```

5. Por 煤ltimo, generamos la clave que nos falta en el archivo **.env**:

```
php artisan key:generate
```


Hasta ahora solo tiene la parte visual preparada, para que la base de datos funcione tiene que guardar el proyecto en la carpeta de **HTDOCS**. Que dependiendo de la DB que haya instalado esta en una ubicaci贸n diferente:

* En XAMPP la ubicaci贸n esta en:
> C:\xampp\htdocs

* En MAMP la ubicacion esta en:
> Aplicaciones - MAMP - htdocs

Una vez hecho esto tendr谩 que ir a la consola de su IDE o Editor y escribir el siguiente comando para que le cree las tablas en la base de datos:

```
php artisan migrate
```

## Despliegue 馃摝

_Para poder hacer el deploy necesitamos escribir en la consola de nuestro IDE o Editor el siguiente comando:_

```
php artisan serve
```
Nos aparecera algo as铆:

```
鉃?  VotingPlatform 鉁? php artisan serve       
Starting Laravel development server: http://127.0.0.1:8000
PHP 8.0.3 Development Server (http://127.0.0.1:8000) started
```
Una vez nos salga este mensaje en la consola, podemos pinchar [**AQU脥**](http://127.0.0.1:8000) o en cualquiera de los dos http://127.0.0.1:8000 que nos sale en la consola.

## Testing 馃攽

_Para realizar los test nos vamos a la consola en VS Code y escribimos:_

```
vendor/bin/phpunit
```
![Testing en Vs Code 1](https://github.com/Simplyfiers-F5-Team/VotingPlatform/blob/main/public/img/Testing.png)

Tambi茅n se puede hacer con otro comando:

```
php artisan test
```

![Testing en Vs Code 2](https://github.com/Simplyfiers-F5-Team/VotingPlatform/blob/main/public/img/Testing_1.png)

En PhpStorm es un poco 'm谩s dificil' o facil, depende de como se mire:

* Tenemos que irnos al borde superior donde aparece el simbolo de play 鈻讹笍 .
* Al hacer click en ese boton nos saltara una nueva ventana con el nombre: **Run/Debug Configurations**.
* Bajamos hasta donde pone **Interpreter**.
* Configuramos el **Interpreter** con la versi贸n de PHP que tengamos instalada.
* Por 煤ltimo, **APPLY** y **RUN** (YA TENEMOS EJECUTADOS LOS TEST!!! 馃憦 馃憦 馃憦 )

![Test en PhpStorn](https://user-images.githubusercontent.com/57219639/119729519-0ccacb00-be75-11eb-9af8-cef5ae2f5ba8.png)



## Construido con 馃洜锔?

_Estas son las herramientas utilizadas para la creaci贸n de este proyecto._
* [PHP ^7.4](https://www.php.net/downloads) - Lenguaje de programaci贸n.
* [Composer ^2](https://getcomposer.org/download/) - Gesti贸n de paquetes.
* [XAMPP](https://www.apachefriends.org/es/index.html) en Windows o [MAMP](https://www.mamp.info/en/downloads/) en MacOS - Gesti贸n de base de datos.
* [PhpStorm](https://www.jetbrains.com/phpstorm/) - IDE.
* [Vs Code](https://code.visualstudio.com/Download) - Editor de c贸digo.
* [Laravel 8](https://laravel.com/docs/8.x) - Framework de Back.
* [PhpUnit ^9](https://phpunit.de/getting-started/phpunit-9.html) - Testing.
* [Blade](https://laravel.com/docs/8.x/blade) - Motor de plantillas.
* [Bootstrap 4.6](https://getbootstrap.com/docs/4.6/getting-started/introduction/) - Framework de Front.

## Autores

_Ahora toca mencionar a los autores de este proyecto_

GitHub:
* **Paula Valdes** - *Desarrolladora Web FullStack* - [Pau-V](https://github.com/Pau-v)
* **Juan Carlos** - *Desarrollador Web FullStack* - [jcsedeno](https://github.com/jcsedeno)
* **Arturo Men茅ndez** - *Desarrollador Web FullStack* - [D-Arturo](https://github.com/D-Arturo)
* **Pablo V谩zquez** - *Desarrollador Web FullStack* - [PablinVaz](https://github.com/PablinVaz)

LinkedIn:

* [**Juan Carlos**](https://www.linkedin.com/in/jcsedeno/)
* [**Arturo Men茅ndez**](https://www.linkedin.com/in/davidarturomf/)
* [**Pablo V谩zquez**](https://www.linkedin.com/in/pablinvaz)

## Expresiones de Gratitud 馃巵

* Comenta a otros sobre este proyecto 馃摙
* Invita una cerveza 馃嵑 o un caf茅 鈽? a alguien del equipo. 
* Da las gracias p煤blicamente 馃.

---
Hecho con 鉂わ笍 por el equipo de Simplyfiers durante el BootCamp de [Factoria F5](https://www.rompemosloscodigos.org/) 馃槉
