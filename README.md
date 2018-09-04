Bugs: [![Gitter](https://img.shields.io/gitter/room/holger1411/understrap.svg?maxAge=2592000?style=flat-square)](https://jupi.tech/contacto)

## About

Esta es la primera version de un tema customizado el cual utiliza Bootstrap y Sass ya que son Herramientas muy utiles
Tengo una base de Undestrap para podes customizar el theme es un tema para wordpress.

# Jupiter WordPress Theme Framework

Website: [https://jupi.tech/](https://jupi.tech/)

Child Theme Project: [https://github.com/holger1411/understrap-child](https://github.com/holger1411/understrap-child)

## License
Jupiter es lanzado bajo los términos de la versión 2 de GPL o (a su opción) cualquier versión posterios.

http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html

## Versiones
            - ** 1.0.0.Agosto 3-08-2017 **
                  - Homes page Plantilla Principal
                  - Slider Efectos BEM
                  - Abierto a Sugerencias


## Caracteristicas Básicas

- Combina Archivos PHP/JS files y Bootstrap CSS/JS.
- Integada al versión de Bootstrap (v4) los archivos css y sass estan en 
  la carpeta css fueron colpilasdos con prepros-
- Carga un unico archivo css y minificado.
- [Font Awesome](http://fortawesome.github.io/Font-Awesome/) usa fontawesome Para tus iconos.
- Soporta WooCommerce.

## Tema de inicio + HTML Framework = Tema de  WordPress Framework

Es una plantilla para formar un thema solido y realizar layouts imprecionantes

## Confundido por todos los archivos CSS y Sass?

Tranquilo, con prepros o bien gulp te facilitas la vida ya que en la carpeta css estan ambos css y sass

                  - 1 "theme/variables";  // css/_variables.scss


## Instalación

- Comprima la carpeta JupiterTheme
- Cargalo en el instalador de theme´s de Wordpress y se agregara a: `/wp-content/themes/`
- Inicie sesión en su backend de WordPress
- Ir a Apariencia → Temas
- Activar el tema JupiterTheme

## Desarrollando con npm, Bower, Gulp y SASS y [Browser Sync] [1]

### Instalación de dependencias
- Asegúrese de haber instalado Node.js, Bower y Browser-Sync en su computadora globalmente
- A continuación, abra su terminal y vaya a la ubicación de su copia de JupiterTheme
- Ejecute: `$ npm install` entonces: `$ bower install` y finalmente: `$ gulp copy-assets`

### Corriendo
Para trabajar y compilar sus archivos Sass sobre la marcha:

- `$ gulp watch`

O, para ejecutar con el navegador de sincronización:

- Primero cambia las opciones de sincronización del navegador para reflejar tu entorno en el archivo `/gulpfile.js` En el comienzo del archivo:
```javascript
var browserSyncOptions = {
    proxy: "localhost/theme_test/", // <----- CAMBIAR AQUÍE
    notify: false
};
```
- entonces corre: `$ gulp watch-bs`

Licencias y Créditos
=
- Font Awesome: http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
- Bootstrap: http://getbootstrap.com | https://github.com/twbs/bootstrap/blob/master/LICENSE (Code licensed under MIT documentation under CC BY 3.0.)
- Owl Carousel 2: http://www.owlcarousel.owlgraphic.com/ | https://github.com/smashingboxes/OwlCarousel2/blob/develop/LICENSE (Code licensed under MIT)
and of course
- jQuery: https://jquery.org | (Code licensed under MIT)
- WP Bootstrap Navwalker by Edward McIntyre: https://github.com/twittem/wp-bootstrap-navwalker | GNU GPL
