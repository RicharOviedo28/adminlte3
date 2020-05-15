Instalacion del Paquete Adminlte3

<b>Nueva Instalacion de laravel <b><br>
1º Paso<br>
Instalacion de laravel <br>
- composer create-project --prefer-dist laravel/laravel blog
<br>
2º paso <br>
Instalacion de Auth.<br>
- composer require laravel/ui
- php artisan ui vue --auth
<br>
3º Paso<br>
Instalar el paquete Wolfsyncro/Adminlte3.<br>
- composer require wolfsyncro/adminlte3
<br>
4º Paso<br>
Publicar los archivos.<br>

- php artisan vendor:publish --provider="wolfsyncro\adminlte3\Adminlte3ServiceProvider" --force
<br>
<b>Usamos --force para sobreescribir algunos archivos.<b><br>
Archivos que se sobreescriben
- welcome.blade.php
- home.blade.php
- login.blade.php
- register.blade.php
- reset.blade.php<br>
<br>
Si ya tiene instlado laravel Paso 3 y 4.<br>