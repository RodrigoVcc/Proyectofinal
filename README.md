Integrantes
- Rodrigo Vladimir Cruz Cortez - CC22070
- Willy Jeferson Bonilla Vasquez - BV20003
- Leonel Antonio Hernández Pérez - HP12002
- Lilian Sofía Tejada Villatoro - TV22008
- Gabriel Alexander Calderón Villeda - CV22022

 
# 🧩 Proyecto Laravel - Sistema Web

Este es un sistema web desarrollado con el framework **Laravel**, el cual ya cuenta con conexión a una **base de datos remota (Clever Cloud)**, por lo que no requiere importar bases de datos locales.

## 🚀 Requisitos

- PHP >= 8.1
- Composer
- Node.js y NPM (si se compilan assets con Vite)

---

## 📦 Instalación

Sigue estos pasos para levantar el proyecto localmente:

```bash
# 1. Clona el repositorio
git clone https://github.com/usuario/proyecto-laravel.git
cd proyecto-laravel

# 2. Instala dependencias de PHP
composer install

# ⚠️ Los siguientes pasos son opcionales, el sistema ya funciona sin ellos:
# npm install && npm run dev       # Solo si quieres compilar los assets
# php artisan key:generate         # Ya existe una APP_KEY válida

# 3. Limpia y cachea configuración
php artisan config:clear
php artisan config:cache

# 4. Levanta el servidor
php artisan serve

Accede desde tu navegador en:
🔗 http://localhost:8000

🔐 Acceso al sistema
La autenticación está habilitada. Si ya se cargaron usuarios en la base, se puede acceder con:
Usuario: admin
Contraseña: 123

🗄️ Base de datos
Este proyecto utiliza una base de datos MySQL alojada en Clever Cloud, ya conectada desde el archivo .env.
No necesitas crear ni importar una base de datos local.

⚠️ 
Las credenciales de la base de datos y la API se encuentran en el correo con el enlace del repositorio
