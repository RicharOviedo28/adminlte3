Instalacion del Paquete Adminlte3

1º Paso
Instalar el paquete.

- composer require wolfsyncro/adminlte3

2º Paso
Publicar los archivos.

- php artisan vendor:publish --provider="wolfsyncro\adminlte3\Adminlte3ServiceProvider" --force

Usamos --force para sobreescribir algunos archivos.
Archivos que se sobreescriben
- welcome.blade.php
- home.blade.php
- login.blade.php
- register.blade.php
- reset.blade.php