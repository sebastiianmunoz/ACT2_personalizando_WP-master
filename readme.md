# Optimización y deployment de Wordpress

Para la siguiente actividad, debes clonar este repositorio y trabajar leyendo atentamente las siguientes instrucciones:

Es importante que hayas visto toda la experiencia online para trabajar en esta actividad.

## Instrucciones

Una destacada productora necesita de ayuda con su sitio web de forma urgente, sobre todo ahora que lograron conseguir el tan esperado concierto de Maluma y muchos de sus usuarios ingresan para obtener información. Uno de sus principales problemas es que el landing page que les desarrollaron no carga de manera rápida ni óptima. Además, necesitan incorporarle seguridad por si los malintencionados hackers deciden entrar a modificar el sitio. Finalmente, quieren añadir ciertas funcionalidades que el desarrollador anterior no supo lograr.

Las funcionalidades que te piden considerar son:

- Servicios:
	- En el menú de administración cambiar el nombre de "entradas" por "servicios" y cambiar el ícono del [pin](https://developer.wordpress.org/resource/dashicons/#admin-post) por el ícono de [smiley](https://developer.wordpress.org/resource/dashicons/#smiley) (el editor se confunde siempre por culpa de eso).
	- En la sección "Servicios" ordenar los post de forma ascendente (Servicio Nº1 primero, Servicio Nº9 al final).
	- Incorporar una imagen por defecto (`default.jpg`) a los post de servicios que no tengan imagen destacada.
	- Que al clickear cada contenedor del post de servicio, envíe a otra página con el detalle completo del servicio.
- Fotos:
	- Que el editor pueda incluir las imágenes de la sección "Fotos" de forma dinámica
	- Que las fotos y sus títulos estén ordenadas de forma aleatoria
	- Que cada foto subida a esa sección tenga la misma proporción, de aspecto 4:3.
		- > HINT: El aspecto de proporción debe estar bien definido para que las formas (video digital, lienzo, diseño receptivo, imagen, entre otros) se adapten de la mejor forma a los medios. Te dejamos una [calculadora de proporciones](https://calculateaspectratio.com) con la cual trabajar.
- Clientes:
	- Añadir una sección llamada "Clientes" que esté entre las secciones de "Fotos" y "Contacto".
	- Que la sección clientes tenga como background la imagen `background_maluma.jpg` y que tenga como título "Confiaron en nosotros".
	- Subir los logotipos de los clientes de forma dinámica para que el editor pueda agregar más en el futuro.
- Contacto:
	- Reemplazar el formulario estático por un formulario dinámico que envíe un correo al mail de contacto de la productora cada vez busque un servicio.
	- Que en el formulario de contacto haya un campo de tipo "select" con los servicios ofrecidos.
- Otros:
	- Generar un footer fijo con el link a las redes sociales de Instagram y Facebook.
	- Incorporar Google Analytics para analizar el tráfico del sitio (este [plugin](https://es.wordpress.org/plugins/google-analytics-for-wordpress/) te puede ayudar, recuerda siempre leer la [documentación](https://www.monsterinsights.com/docs/connect-google-analytics/))

Además, el cliente te solicita un reporte técnico y un presupuesto con todas las mejoras necesarias.

## ¿Qué debes hacer?

- Instalar el sitio en el servidor local

- Desarrollar los cambios solicitados por el cliente.

- Agregar seguridad adicional al sitio web

- Hacer un deploy manual del sitio web

- Revisar si el rendimiento del sitio usando [GT Metrix](https://gtmetrix.com/)

  - Tomar un screenshot del resultado

- Optimizar el sitio usando plugins de Wordpress

- Revisar nuevamente rendimiento del sitio usando [GT Metrix](https://gtmetrix.com/)

  - Tomar un screenshot del resultado

Al finalizar, genera un reporte en un archivo **README.md** que contenga:

- El detalle de todos los problemas del sitio *(tanto de frontend como de backend)* que estimes conveniente arreglar, además los archivos específicos que deberías intervenir y elementos que necesitarías agregar.

- Descripción técnica del trabajo que significa realizar los cambios solicitados por el cliente

- Tiempos de desarrollo

- Presupuesto itemizado

  - > HINT: Se recomienda para este tipo de presupuestos calcular el tiempo estimado específico de cada arreglo y, a partir de eso, cobrar las horas que se van a utilizar según la "Hora Hombre" que estimes conveniente cobrar. Un desarrollador Wordpress Junior puede ganar desde 0.4 UF a 1UF por hora.

- Mostrar los screnshots con el antes y después de la optimización del sitio web

# Entrega desafío

- Crea una carpeta que contenga:

  - El archivo **README.md** con el reporte del sitio web
  - La carpeta **wp-content** y la **[base de datos en formato `.sql`](https://cl.godaddy.com/help/exportar-mis-bases-de-datos-mysql-1487)**

- Todos los archivos mencionados anteriormente deberán ser **versionados vía push en GitHub**, y luego subidos a la [plataforma empieza](http://empieza.desafiolatam.com/)



  #### **¡Vamos con todo!**
