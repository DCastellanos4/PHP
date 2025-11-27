<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 5: Elementos de formulario en HTML</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 5</div>

    <div class="titulo-apartado">Campos de texto (text)</div>
    <div class="definicion">
      Permite introducir una cadena de texto.
    </div>
    <div class="codigo"><pre>
&lt;input type="text" name="cadena" value="valor por defecto"&gt;

&lt;?php
  $cadena = $_POST['cadena'];
  echo $cadena;
?&gt;
    </pre></div>

    <div class="titulo-apartado">Botones de opción (radio)</div>
    <div class="definicion">
      Se agrupan bajo el mismo nombre. Solo uno puede estar seleccionado.
    </div>
    <div class="codigo"><pre>
Sexo:
&lt;input type="radio" name="sexo" value="M" checked&gt;Mujer
&lt;input type="radio" name="sexo" value="H"&gt;Hombre

&lt;?php
  $sexo = $_POST['sexo'];
  echo $sexo;
?&gt;
    </pre></div>

    <div class="titulo-apartado">Casillas de verificación (checkbox)</div>
    <div class="definicion">
      Pueden seleccionarse múltiples. Requieren el uso de arrays <code>name="extras[]"</code>.
    </div>
    <div class="codigo"><pre>
&lt;input type="checkbox" name="extras[]" value="garaje" checked&gt;Garaje
&lt;input type="checkbox" name="extras[]" value="piscina"&gt;Piscina

&lt;?php
  foreach ($_POST['extras'] as $extra) {
    echo $extra . "&lt;br&gt;";
  }
?&gt;
    </pre></div>

    <div class="titulo-apartado">Campo oculto (hidden)</div>
    <div class="definicion">
      Campo no visible para el usuario.
    </div>
    <div class="codigo"><pre>
&lt;input type="hidden" name="usuario" value="admin"&gt;

&lt;?php
  $usuario = $_POST['usuario'];
  echo $usuario;
?&gt;
    </pre></div>

    <div class="titulo-apartado">Campo de contraseña (password)</div>
    <div class="definicion">
      El texto introducido no se muestra en pantalla.
    </div>
    <div class="codigo"><pre>
Contraseña: &lt;input type="password" name="clave"&gt;

&lt;?php
  $clave = $_POST['clave'];
  echo $clave;
?&gt;
    </pre></div>

    <div class="titulo-apartado">Botón de envío (submit)</div>
    <div class="definicion">
      Envía el formulario al servidor.
    </div>
    <div class="codigo"><pre>
&lt;input type="submit" name="enviar" value="Enviar"&gt;

&lt;?php
  if (isset($_POST['enviar'])) {
    echo "Formulario enviado";
  }
?&gt;
    </pre></div>

    <div class="titulo-apartado">Botón de reinicio (reset)</div>
    <div class="definicion">
      Restablece todos los campos del formulario.
    </div>
    <div class="codigo"><pre>
&lt;input type="reset" value="Limpiar"&gt;

&lt;!-- No se procesa desde PHP --&gt;
    </pre></div>

    <div class="titulo-apartado">Botón genérico (button)</div>
    <div class="definicion">
      Necesita JavaScript para tener funcionalidad.
    </div>
    <div class="codigo"><pre>
&lt;input type="button" value="Actualizar"&gt;

&lt;!-- Se necesita JavaScript --&gt;
    </pre></div>

    <div class="titulo-apartado">Lista desplegable (select)</div>
    <div class="definicion">
      Solo un valor puede ser seleccionado si es simple.
    </div>
    <div class="codigo"><pre>
&lt;select name="color"&gt;
  &lt;option value="rojo"&gt;Rojo&lt;/option&gt;
  &lt;option value="verde"&gt;Verde&lt;/option&gt;
&lt;/select&gt;

&lt;?php
  echo $_POST['color'];
?&gt;
    </pre></div>

    <div class="titulo-apartado">Lista múltiple (select múltiple)</div>
    <div class="definicion">
      Permite seleccionar varios valores. Se deben tratar como array.
    </div>
    <div class="codigo"><pre>
&lt;select multiple name="idiomas[]"&gt;
  &lt;option value="ingles"&gt;Inglés&lt;/option&gt;
  &lt;option value="frances"&gt;Francés&lt;/option&gt;
&lt;/select&gt;

&lt;?php
  foreach ($_POST['idiomas'] as $idioma) {
    echo $idioma . "&lt;br&gt;";
  }
?&gt;
    </pre></div>

    <div class="titulo-apartado">Área de texto (textarea)</div>
    <div class="definicion">
      Campo multilínea para comentarios o texto largo.
    </div>
    <div class="codigo"><pre>
&lt;textarea name="comentario"&gt;Texto por defecto&lt;/textarea&gt;

&lt;?php
  echo $_POST['comentario'];
?&gt;
    </pre></div>

  </div>
</body>
</html>
