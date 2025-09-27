# Ejercicio 1: Lógica y Programación (Frontend y Backend)

**Objetivo:** Crear una mini aplicación de formulario de contacto que guarda los mensajes en un archivo JSON y los muestra en otra página.

---

## 🛠️ Tecnologías Utilizadas

| Tecnología | Versión Utilizada | Notas |
| :--- | :--- | :--- |
| **Framework PHP** | Laravel 9.X |
| **PHP** | 8.0 |
| **Base de Datos** | N/A (Se utiliza almacenamiento en archivo `mensajes.json` dentro de `storage/app/`)| |
| **Estilos/Frontend**| Bootstrap 5 |
| **Lógica Frontend**| JavaScript (o jQuery) y AJAX |

---

## 🚀 Instrucciones para Levantar el Proyecto

Sigue estos pasos para poner en marcha la aplicación:

### Requisitos Previos

Asegúrate de tener instalado **Composer**, **PHP** (versión indicada arriba) y **Git**.

### 1. Clonar el Repositorio
Abre tu terminal y ejecuta el siguiente comando:

`bash`
git clone https://github.com/erick-gape/miniapp_laravel.git
cd formulario-contacto

### 2. Instalar Dependencias
Instala todas las dependencias de Laravel usando Composer:

`bash`
composer install

### 3. Configuración del Entorno

### a) Copia el archivo de configuración de entorno:
`bash`
cp .env.example .env

### b) Genera la clave de aplicación de Laravel (App Key):
`bash`
php artisan key:generate

### 4. Ejecutar el Servidor
Inicia el servidor de desarrollo de Laravel:

`bash`
php artisan serve