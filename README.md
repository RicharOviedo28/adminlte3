Instalacion del Paquete Adminlte3

<b>Nueva Instalacion de laravel</b>

1º Paso<br>
Instalacion de laravel <br>
- composer create-project --prefer-dist laravel/laravel blog
2º paso<br>
Instalacion de Auth.<br>
- composer require laravel/ui
- php artisan ui vue --auth
3º Paso<
Instalar el paquete Wolfsyncro/Adminlte3.<br>
- composer require wolfsyncro/adminlte3
4º Paso
Publicar los archivos.
- php artisan vendor:publish --provider="wolfsyncro\adminlte3\Adminlte3ServiceProvider" --force
<b>Usamos --force para sobreescribir algunos archivos.</b>
Archivos que se sobreescriben
- welcome.blade.php
- home.blade.php
- login.blade.php
- register.blade.php
- reset.blade.php
Si ya tiene instlado laravel Paso 3 y 4.