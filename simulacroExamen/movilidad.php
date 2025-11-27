<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Gestión de la Movilidad</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Arial", sans-serif;
            background: #ffffff;
            color: #1d3f72;
        }

        .container {
            width: 100%;
            padding: 40px 60px;
            position: relative;
            box-sizing: border-box;
        }

        .header {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header img {
            width: 50px;
        }

        .header-title {
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 2px;
            color: #1d3f72;
        }

        .line {
            width: 100%;
            height: 2px;
            background: #3a7fc3;
            margin-top: 10px;
        }

        .login {
            position: absolute;
            top: 80px;
            right: 80px;
            font-size: 13px;
            color: #1d3f72;
            text-decoration: none;
        }

        .login:hover {
            text-decoration: underline;
        }

        .center-links {
            text-align: center;
            margin-top: 120px;
        }

        .center-links a {
            text-decoration: none;
            color: #1d3f72;
            font-size: 18px;
            font-weight: bold;
        }

        .center-links a:hover {
            text-decoration: underline;
        }

        .center-links p {
            margin-top: 5px;
            color: #999999;
            font-size: 14px;
        }

        .bottom-line {
            width: 100%;
            height: 2px;
            background: #3a7fc3;
            margin-top: 180px;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="header">
            <div class="header-title">GESTIÓN DE LA MOVILIDAD</div>
        </div>

        <div class="line"></div>


        <div class="center-links">
            <p><a href="permiso.php">Solicitar un permiso</a></p>
            <p><a href="infractores.php">Obtener listado de infractores</a></p>
        </div>

        <div class="bottom-line"></div>

    </div>

</body>

</html>
