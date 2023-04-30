# Entorno de Desarrollo 
- Entorno Docker para usar en DAW
- Clone el directorio en su espacio de trabajo

    ```bash
    git clone git@github.com:dawish21/entorno.git
    ```

## Gestionar el servicio
-  Acceda a la consola y vaya hasta el directorio "entorno"
    `cd entorno`
- Desde ahí ya se puede:
    - Iniciar servicio:
        `docker-compose up -d`
    - Parar servicio
        `docker-compose down`
    - Ver máquinas corriendo
        `docker-compose ps`

# Variantes de este entorno

- Vamos a crear distintos entornos.
- Cada rama de este repositorio configura un entorno diferente.

# Configuración de esta rama

- Se definen varios servicios
  - proxy: recibe todas las peticiones web y las reparte entre los distintos servicios http (apace). Usamos la imagen jwilder/nginx-proxy
  - web1: sitio web de ejempl. Imagen php:7.3-apache
  - dwes: ejercicios resueltos en clase.  Podría valer la imagen de arriba pero usamos un Dockerfile para añadir mysql por si acaso es necesario.
  - midwes: idem al anterior pero con ejercicios del alumno
  - mvc: sitio web preparado para usar mvc. Misma imagen con Dockerfile para mysql
    - Se puede clonar ahí el proyecto https://github.com/rafacabeza/mvc
    - Ojo. Es necesario revisar las notas para usarlo correctamente: necesitará una bbdd, cargar los sql y en algún momento dar contraseña a los usuarios.
  - mimvc: idem al anterior para usar mvc propio del alumno
  - pelu: idem al anterior para el proyecto de peluquería
- Cada uno de lis sitios anteriores requieren una carpeta en "sitios". Si no existe docker la creará vacía y habrá un error de "Forbidden" al estar vacía.
