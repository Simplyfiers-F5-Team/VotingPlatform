# Voting Platform

_Plataforma de Votación realizada como proyecto pedagógico para el BootCamp de Factoria F5._

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

Mira **Deployment** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

_Que cosas necesitas instalar para poder ejecutar el proyecto._

Para empezar necesitas tener instalado:
* [Composer](https://getcomposer.org/download/)
* [PHP con la versión 7.3 o superior.](https://www.php.net/downloads)

Un IDE o un editor de código: 
* [PhpStorm](https://www.jetbrains.com/phpstorm/)
* [VS Code](https://code.visualstudio.com/Download)

Base de datos (DB):
* [XAMPP](https://www.apachefriends.org/es/index.html) en Windows o [MAMP](https://www.mamp.info/en/downloads/) en MacOS.

### Instalación 🔧

_Una vez descargado el proyecto lo que tendrá que hacer es seguir esta serie de pasos para poder desplegarlo:_
1. Abrir el proyecto con el IDE o editor y crear un archivo **.env**.
2. Copiar el contenido de **.env.example** dentro del archivo creado anteriormente: **.env**.
3. Después nos vamos al terminal de nuestro IDE o editor y ejecutamos el siguiente comando:

```
php artisan key:generate
```

4. Una vez que a acabado la generación de la clave, escribimos los siguientes comandos:

```
npm install
```

5. Por último:

```
composer install
```

## Ejecutando las pruebas ⚙️

_Explica como ejecutar las pruebas automatizadas para este sistema_

### Analice las pruebas end-to-end 🔩

_Explica que verifican estas pruebas y por qué_

```
Da un ejemplo
```

### Y las pruebas de estilo de codificación ⌨️

_Explica que verifican estas pruebas y por qué_

```
Da un ejemplo
```

## Despliegue 📦

_Para poder hacer el deploy necesitamos escribir en la consola de nuestro IDE o Editor el siguiente comando:_

```
php artisan serve
```
Nos aparecera algo así:

```
➜  VotingPlatform ✗ php artisan serve       
Starting Laravel development server: http://127.0.0.1:8000
PHP 8.0.3 Development Server (http://127.0.0.1:8000) started
```
Una vez nos salga este mensaje en la consola, podemos pinchar [**AQUÍ**](http://127.0.0.1:8000) o en cualquiera de los dos http://127.0.0.1:8000 que nos sale en la consola.

## Construido con 🛠️

_Estas son las herramientas utilizadas para la creación de este proyecto_
* [PHP ^7.4](https://www.php.net/downloads) - Lenguaje de programación
* [Composer ^2](https://getcomposer.org/download/) - Gestión de paquetes
* [PhpStorm](https://www.jetbrains.com/phpstorm/) - IDE
* [Laravel 8](https://laravel.com/docs/8.x) - Framework de Back
* [PhpUnit ^9](https://phpunit.de/getting-started/phpunit-9.html) - Testing
* [Vuejs 3](https://es.vuejs.org/) - Framework de Front

## Autores

_Ahora toca mencionar a los autores de este proyecto_

GitHub:
* **Paula Valdes** - *Desarrolladora Web FullStack* - [Pau-V](https://github.com/Pau-v)
* **Juan Carlos** - *Desarrollador Web FullStack* - [jcsedeno](https://github.com/jcsedeno)
* **Arturo Menéndez** - *Desarrollador Web FullStack* - [D-Arturo](https://github.com/D-Arturo)
* **Pablo Vázquez** - *Desarrollador Web FullStack* - [PablinVaz](https://github.com/PablinVaz)

LinkedIn:
* [**Paula Valdes**](https://github.com/Pau-v)
* [**Juan Carlos**](https://www.linkedin.com/in/jcsedeno/)
* [**Arturo Menéndez**](https://www.linkedin.com/in/davidarturomf/)
* [**Pablo Vázquez**](https://www.linkedin.com/in/pablinvaz)

## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Invita una cerveza 🍺 o un café ☕ a alguien del equipo. 
* Da las gracias públicamente 🤓.

---
Hecho con ❤️ por el equipo de Simplyfiers durante el BootCamp de [Factoria F5](https://www.rompemosloscodigos.org/) 😊
