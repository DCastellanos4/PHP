<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 1: Protocolo HTTP y formularios</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 1</div>

    <div class="titulo-apartado">Protocolo HTTP y formularios</div>

    <div class="definicion">
      <strong>HTTP:</strong> Es un protocolo sin estado. La comunicación es iniciada por el cliente que envía una <em>petición HTTP</em> al servidor.
    </div>

    <div class="definicion">
      <strong>Petición HTTP:</strong> Contiene una cabecera (versión, página solicitada, método: GET o POST) y un cuerpo (vacío con GET, con datos con POST).
    </div>

    <div class="definicion">
      <strong>Respuesta HTTP:</strong> Devuelta por el servidor, incluye cabecera (fecha, tipo de servidor, tipo de contenido, etc.) y cuerpo (HTML o mensaje de error).
    </div>

    <div class="definicion">
      <strong>Métodos principales:</strong> GET y POST. GET incluye los datos en la URL, POST los envía en el cuerpo de la petición.
    </div>

    <div class="codigo"><pre>
Cliente               Servidor
   │                    │
   ├─&gt; Petición HTTP    │
   │     - Cabecera     │
   │     - Cuerpo       │
   │                    ├─&gt; Procesa y responde
   │                    │
   ◄── Respuesta HTTP  ◄─┘
         - Cabecera
         - Cuerpo (HTML o ERROR)
    </pre></div>

  </div>
</body>
</html>
