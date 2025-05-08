# Mi Proyecto Laravel

Este proyecto es una aplicación web desarrollada con Laravel, un framework PHP moderno y potente.

## Características Principales

- Gestión de datos mediante base de datos
- Rutas y controladores organizados
- Sistema de plantillas con Blade

## Requisitos del Sistema

- PHP 8.1 o superior
- Composer
- MySQL o PostgreS

## Instalación

1. Clonar el repositorio:
```bash
git clone [https://github.com/ANDREASIERRA55/Pagina-Laravel.git]
```

2. Instalar dependencias:
```bash
composer install
```

3. Copiar archivo de configuración:
```bash
cp .env.example .env
```

4. Generar clave de aplicación:
```bash
php artisan key:generate
```

## Creación de Controladores

Para crear nuevos controladores en el proyecto, utiliza el comando Artisan:

```bash
php artisan make:controller NombreController
```

Por ejemplo, para crear un controlador llamado `ProductoController`:
```bash
php artisan make:controller ProductoController
```

El controlador se creará en la carpeta `app/Http/Controllers/` con los siguientes métodos por defecto:
- `index()` - Muestra todos los registros
- `create()` - Muestra el formulario de creación
- `store()` - Guarda un nuevo registro
- `show()` - Muestra un registro específico
- `edit()` - Muestra el formulario de edición
- `update()` - Actualiza un registro
- `destroy()` - Elimina un registro

Para crear un controlador con métodos específicos, puedes usar:
```bash
php artisan make:controller NombreController --resource
```

Esto creará un controlador con todos los métodos necesarios para una operación CRUD completa.
```

5. Crear base de datos y configurar .env

6. Ejecutar migraciones:
```bash
php artisan migrate
```

7. Iniciar el servidor de desarrollo:
```bash
php artisan serve
```

## Estructura del Proyecto

- `/app` - Contiene los modelos, controladores y servicios
- `/resources` - Archivos de vistas, assets y traducciones
- `/routes` - Definición de rutas de la aplicación
- `/public` - Archivos públicos accesibles
- `/database` - Migraciones y seeders
- `/config` - Archivos de configuración

## Contribución

Las contribuciones son bienvenidas. Por favor, crea un issue para discutir cambios importantes antes de hacer un pull request.

## Licencia

Este proyecto está bajo la licencia MIT. Ver el archivo LICENSE para más detalles.
