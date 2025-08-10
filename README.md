
# 🚽 App Toilet

Aplicación web para encontrar y registrar baños públicos cercanos usando **Laravel**, **MongoDB**, **Docker** y **Leaflet.js**.

## 🚀 Tecnologías Usadas
- **Laravel** – Framework backend en PHP.
- **MongoDB** – Base de datos NoSQL para almacenamiento rápido y flexible.
- **Docker + Docker Compose** – Entorno de desarrollo aislado.
- **Leaflet.js** – Mapas interactivos.
- **Blade Templates** – Motor de vistas de Laravel.

## 📦 Instalación y Ejecución

1. Clona este repositorio:
   ```bash
   git clone git@github.com:TU_USUARIO/app-toilet.git
   cd app-toilet

2. Crea y levanta los contenedores:

   ```bash
   docker-compose up -d
   ```

3. Instala dependencias de Laravel:

   ```bash
   docker exec -it app-toilet-php composer install
   ```

4. Copia el archivo `.env` y configura tus variables:

   ```bash
   cp src/.env.example src/.env
   ```

5. Genera la key de la aplicación:

   ```bash
   docker exec -it app-toilet-php php artisan key:generate
   ```

6. Accede a la app en:

   ```
   http://localhost:8000
   ```

## 🗺️ Mapa Interactivo

La aplicación incluye un mapa inicial con **Leaflet.js** que muestra una vista por defecto y permitirá en el futuro:

* Buscar baños cercanos.
* Añadir nuevos puntos en el mapa.
* Mostrar detalles como horario, accesibilidad y servicios.

## 📌 Funcionalidades Planeadas

* 📍 Localización automática del usuario.
* 📝 Registro de baños con fotos y reseñas.
* ⭐ Sistema de puntuaciones.
* 🔍 Filtros de búsqueda (accesibilidad, precio, limpieza).

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Haz un fork del proyecto, crea una rama y envía un PR.

## 📄 Licencia

Este proyecto está bajo la licencia MIT.

```
