# Tienda Simple
## Objetivos a cumplir
- ✅ Crear un repositorio en GitHub.
- ✅ Crear un proyecto en GitHub: **Tienda Simple**.
  - ✅ Usuarios: Registrar, editar y listar usuarios.
  - ✅ Ventas: productos, ventas y detalle de ventas.
    - [x] Crear una venta.
    - ✅ Listar ventas.
    - [x] Opcional: Modal al darle click a una venta para ver el detalle.
- ✅ README: Pasos de instalación.
## Frameworks a usar
- ✅ Laravel.
- ✅ Tailwind CSS.
## Pasos de instalación
1. Clonar el repositorio `https://github.com/ypnqh/tienda-simple.git`.
2. Instalar dependencias con composer: `composer install`.
3. Copiar el contenido de `.env.example`, luego crear y pegar al archivo `.env`.
4. Generar la `APP_KEY` de la aplicación: `php artisan key:generate`.
5. Instalar dependencias con PNPM o NPM: `pnpm install` o `npm install`.
### Crear base de datos
1. Crear una base de datos en un gestor de base de datos de tu preferencia: `tienda_simple`.
### Migraciones
1. `php artisan migrate`.
### Levantar el servidor
1. `php artisan serve --no-reload`.
2. `pnpm run dev` o `npm run dev`.
