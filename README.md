<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="350">
</p>

<h1 align="center">🥗 HealthyKids</h1>

<p align="center">
Aplicación web desarrollada con Laravel enfocada en promover hábitos saludables en niños.  
Este proyecto no utiliza base de datos.
</p>

---

## 🚀 Descripción

**HealthyKids** es una aplicación web construida con Laravel que presenta contenido orientado a la salud infantil, como alimentación, recomendaciones y estilos de vida saludables.

El proyecto está diseñado sin conexión a base de datos, por lo que es ligero, rápido y fácil de ejecutar en cualquier entorno local.

---

## 📋 Requisitos

Antes de ejecutar el proyecto, asegúrate de tener instalado:

* PHP >= 8.0
* Composer
* Git (opcional)

---

## 📦 Instalación

Sigue estos pasos para ejecutar el proyecto en tu máquina:

1. Clona el repositorio:

```bash
git clone https://github.com/valentinavillagh-gif/healthykids.git
```

2. Entra en la carpeta del proyecto:

```bash
cd healthykids
```

3. Instala las dependencias:

```bash
composer install
```

4. Crea el archivo de entorno:

```bash
cp .env.example .env
```

5. Genera la clave de la aplicación:

```bash
php artisan key:generate
```

---

## ⚙️ Configuración

Este proyecto **no requiere base de datos**.

Puedes dejar esta configuración en el archivo `.env`:

```env
DB_CONNECTION=null
```

---

## ▶️ Ejecución

Inicia el servidor local con:

```bash
php artisan serve
```

Luego abre tu navegador en:

```
http://127.0.0.1:8000
```

---

## 📁 Estructura del Proyecto

* `routes/web.php` → Definición de rutas
* `resources/views/` → Vistas Blade
* `public/` → Archivos públicos (CSS, JS, imágenes)

---

## 🧠 Notas

* No utiliza base de datos
* Proyecto ideal para aprendizaje y demostraciones
* Enfocado en interfaz y contenido estático

---

## 👩‍💻 Autor

Desarrollado por **Valentina Villa Gutiérrez**

---
