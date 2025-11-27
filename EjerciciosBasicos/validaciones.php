<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    /*VALIDACIONES*/
    //NOMBRE DE USUARIO
    #1. Validar Nombre de usuario
    function validarUsuario($nombre)
    {
        return preg_match("#^[a-z][\da-z_]{6,22}[a-z\d]$\$#i", $nombre);
    }
    //ejemplo:
    if (validarUsuario("EducacionIT")) {
        echo "usuario valido";
    } else {
        echo "usuario invalido";
    }
    echo "<br>";
    #2. Validar Dirección Email
    function validarEmail($email)
    {
        $reg = "#^(((([a-z\d][\.\-\+_]?)*)[a-z0-9])+)\@(((([a-z\d][\.\-_]?){0,62})[a-z\d])+)\.([a-z\d]{2,6})$#i";
        return preg_match($reg, $email);
    }
    //ejemplo:
    if (validarEmail("info@educacionit.com")) {
        echo "email valido";
    } else {
        echo "email invalido";
    }
    echo "<br>";
    #3. Validar Fecha
    #Esta validación acepta la fecha en formato DD-MM-YYYY, con separadores (/),(-) y (.)

    function validarFecha($fecha)
    {
        $sep = "[\/\-\.]";
        $reg = "#^(((0?[1-9]|1\d|2[0-8]){$sep}(0?[1-9]|1[012])|(29|30){$sep}(0?[13456789]|1[012])|31{$sep}(0?[13578]|1[02])){$sep}(19|[2-9]\d)\d{2}|29{$sep}0?2{$sep}((19|[2-9]\d)(0[48]|[2468][048]|[13579][26])|(([2468][048]|[3579][26])00)))$#";
        return preg_match($reg, $fecha);
    }
    //ejemplo:
    if (validarFecha("05/01/2011")) {
        echo "fecha valida";
    } else {
        echo "fecha invalida";
    }
    echo "<br>";

    #4. Validar Dirección IP
    #Valida que una dirección IP este dentro del rango 0.0.0.0 a 255.255.255.255

    function validarIP($ip)
    {
        $val_0_to_255 = "(25[012345]|2[01234]\d|[01]?\d\d?)";
        $reg = "#^($val_0_to_255\.$val_0_to_255\.$val_0_to_255\.$val_0_to_255)$#";
        return preg_match($reg, $ip, $matches);
    }
    //ejemplo:
    if (validarIP("190.210.132.55")) {
        echo "IP valida";
    } else {
        echo "IP invalida";
    }
    echo "<br>";
    #5. Validar Numero de Teléfono
    #El formato utilizado seria así: (00)-0000-0000. Donde los primeros 3 números serian el código de tu País.

    function validarTelefono($numero)
    {
        $reg = "#^\(?\d{2}\)?[\s\.-]?\d{4}[\s\.-]?\d{4}$#";
        return preg_match($reg, $numero);
    }
    //ejemplo:
    if (validarTelefono("(11)-4328-0457")) {
        echo "telefono valido";
    } else {
        echo "telefono invalido";
    }
    function validarContraseñas($pass)
    {
        $patterns = "/^[a-z0-9_$-]{6,18}$/";
        return preg_match($patterns, $pass);
    }
    echo "<br>";
    /*
    // Ristra de patrones regulares útiles en PHP
    $patterns = [
        // Contacto / red
        'email'            => '/^[A-Za-z0-9._%+\-]+@[A-Za-z0-9.\-]+\.[A-Za-z]{2,}$/',
        'url'              => '/^(https?:\/\/)?([\w\-]+\.)+[\w\-]+(\/[\w\-._~:\/?#[\]@!$&\'()*+,;=]*)?$/',
        'ipv4'             => '/^(25[0-5]|2[0-4]\d|1\d{2}|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d{2}|[1-9]?\d)){3}$/',
        'ipv6'             => '/^([0-9a-fA-F]{1,4}:){7}[0-9a-fA-F]{1,4}$/',

        // Identificadores
        'uuid_v1_5'        => '/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[1-5][0-9a-fA-F]{3}-[89abAB][0-9a-fA-F]{3}-[0-9a-fA-F]{12}$/',

        // Estética / colores
        'hex_color'        => '/^#?([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/',

        // Fecha / hora (formatos comunes)
        'date_yyyy_mm_dd'  => '/^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/', // validación básica YYYY-MM-DD
        'time_hh_mm'       => '/^([01]\d|2[0-3]):([0-5]\d)$/',
        'datetime_iso'     => '/^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])T([01]\d|2[0-3]):([0-5]\d)(:[0-5]\d)?(Z|[+-](?:0\d|1[0-2]):?[0-5]\d)?$/',

        // Números / texto
        'only_digits'      => '/^\d+$/',
        'integer'          => '/^-?\d+$/',
        'only_letters'     => '/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/u',
        'alphanumeric'     => '/^[A-Za-z0-9]+$/',
        'username'         => '/^[A-Za-z0-9_]{3,20}$/', // 3-20 chars, letras/numeros/underscore
        'slug'             => '/^[a-z0-9]+(?:-[a-z0-9]+)*$/',

        // Seguridad / contraseñas
        'password_strong'  => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', // min 8, 1 minúsc, 1 mayúsc, 1 dígito, 1 símbolo

        // Formatos específicos
        'postal_es'        => '/^[0-9]{5}$/', // código postal España
        'phone_es'         => '/^(?:\+34\s?)?(?:[6-9]\d{2}\s?\d{2}\s?\d{2}\s?\d{2})$/', // móvil/ﬁjo formato ES (aprox.)
        'base64'           => '/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/',

        // Contenido HTML
        'html_tag'         => '/<([a-z][a-z0-9]*)\b[^>]*>(.*?)<\/\1>/is',
        'contains_script'  => '/<script\b[^>]*>(.*?)<\/script>/is',

        // Otros
        'hex_bytes'        => '/^[A-Fa-f0-9]+$/',

        $patterns['username_basic']   = '/^[A-Za-z0-9_]{3,20}$/';
        // letras, números, guión bajo, de 3 a 20 caracteres

        $patterns['username_strict']  = '/^(?=.{3,20}$)(?![_])(?!.*__)[A-Za-z0-9_]+(?<![_])$/';
        // 3-20 chars, no empieza ni acaba en "_", no permite "__"

        $patterns['username_friendly'] = '/^[a-z][a-z0-9_]{2,19}$/';
        // debe empezar con letra, minúsculas, 3-20 chars

        $patterns['password_min8'] = '/^.{8,}$/';
        // mínimo 8 caracteres, sin más requisitos

        $patterns['password_medium'] = '/^(?=.*[A-Za-z])(?=.*\d).{8,}$/';
        // min 8, al menos 1 letra y 1 dígito

        $patterns['password_strong'] = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/';
        // min 8, 1 minúsc, 1 mayúsc, 1 dígito, 1 símbolo

        $patterns['password_max20'] = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,20}$/';
        // igual que strong, pero máximo 20 chars
    ];


    // Función útil: compara un valor con un patrón por nombre
    function matchPattern(string $name, string $value, array $patterns, int $pregFlags = 0): bool
    {
        if (!isset($patterns[$name])) {
            throw new InvalidArgumentException("Patrón \"$name\" no existe.");
        }
        // preg_match devuelve 1 si hay match, 0 si no, FALSE en caso de error
        $result = preg_match($patterns[$name], $value, $matches, $pregFlags);
        return $result === 1;
    }


    // Ejemplos de uso:
    $tests = [
        ['p' => 'email', 'v' => 'usuario@example.com'],
        ['p' => 'url', 'v' => 'https://example.com/path?x=1'],
        ['p' => 'ipv4', 'v' => '192.168.0.1'],
        ['p' => 'hex_color', 'v' => '#1a2b3c'],
        ['p' => 'password_strong', 'v' => 'Abc@1234'],
        ['p' => 'phone_es', 'v' => '+34 612 34 56 78'],
        ['p' => 'date_yyyy_mm_dd', 'v' => '2025-09-30'],
        ['p' => 'uuid_v1_5', 'v' => '123e4567-e89b-12d3-a456-426614174000'],
    ];

    foreach ($tests as $t) {
        $ok = matchPattern($t['p'], $t['v'], $patterns) ? 'OK' : 'NO';
        echo "{$t['p']} -> {$t['v']} : $ok\n";
    }
        */
    echo "<br>";
    echo validarEmail("davidllanos2005@gmail.com");
    echo "<br>";
    echo validarUsuario('davidmakina');
    echo "<br>";
    echo validarContraseñas("david\$makina");
    ?>
</head>

<body>

</body>

</html>
