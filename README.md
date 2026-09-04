# Sistema de Gestión de Materias (CRUD PHP MVC)

Aplicación web desarrollada con arquitectura **MVC** para la gestión administrativa de materias académicas e integración con un portafolio web personal.

## Tecnologías Utilizadas
- **Frontend:** HTML5, CSS3, JavaScript (ES6)
- **Backend:** PHP 8.x
- **Base de Datos:** MySQL
- **Patrón de Arquitectura:** MVC (Modelo-Vista-Controlador)

## Funcionalidades Principales
- **CRUD Completo:** Crear, consultar, editar y eliminar materias.
- **Estados de Cursada:** Filtro visual para materias *Aprobadas*, *En curso* e *Inactivas/Pendientes*.
- **Filtro Dinámico:** Búsqueda en tiempo real implementada en JavaScript.
- **Portafolio Integrado:** Muestra el progreso académico actualizado en la vista pública.

## 📁 Estructura del Proyecto
```text
CRUD_PHP_MVC/
├── config/          # Conexión a la base de datos
├── controllers/     # Controladores (MateriaController.php)
├── models/          # Modelos (Materia.php)
├── views/           # Vistas (materias/, layouts/)
├── public/          # Punto de entrada (index.php), CSS y JS
└── database.sql     # Script de creación de tablas


## Ejecutar
1. Ejecutar `database.sql` en MySQL/phpMyAdmin.
2. Revisar `config/database.php` si las credenciales son diferentes.
3. Desde `CRUD_PHP_MVC` ejecutar:
   `php -S localhost:8000 -t public`
4. Abrir `http://localhost:8000`

## Flujo
Navegador → Router → Controller → Model → MySQL → Model → Controller → View → HTML

## Acciones
- `index.php?action=index`
- `index.php?action=create`
- `index.php?action=edit&id=1`
- `index.php?action=delete&id=1`

Los formularios utilizan POST para `store` y `update`.
