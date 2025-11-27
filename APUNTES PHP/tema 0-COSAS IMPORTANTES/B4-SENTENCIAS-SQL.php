<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bloque 3: Sentencias SQL Explicadas</title>
  <link rel="stylesheet" href="../estiloApuntes.css">
</head>
<body>
  <div class="contenedor">
    <div class="numero-tema">Bloque 3</div>
    <div class="titulo-apartado">Sentencias SQL Explicadas</div>

    <div class="resumen">
      A continuación se presentan 10 sentencias SQL comunes utilizadas en el análisis de datos de clientes, productos y pedidos. Cada una incluye una breve explicación de su objetivo.
    </div>

    <div class="definicion"><strong>1. Total facturado por cliente:</strong> Suma el importe total que cada cliente ha gastado.</div>
    <div class="codigo"><pre>
SELECT c.id, c.nombre, SUM(lp.precio_unitario * lp.cantidad) AS total_facturado
FROM clientes c
JOIN pedidos pe ON c.id = pe.id_cliente
JOIN lineas_pedido lp ON pe.id = lp.id_pedido
GROUP BY c.id;
    </pre></div>

    <div class="definicion"><strong>2. Total mensual facturado (últimos 3 meses):</strong> Agrupa las ventas por mes reciente.</div>
    <div class="codigo"><pre>
SELECT DATE_FORMAT(pe.fecha, '%Y-%m') AS mes,
       SUM(lp.precio_unitario * lp.cantidad) AS total_mes
FROM pedidos pe
JOIN lineas_pedido lp ON pe.id = lp.id_pedido
WHERE pe.fecha >= DATE_SUB(NOW(), INTERVAL 3 MONTH)
GROUP BY mes;
    </pre></div>

    <div class="definicion"><strong>3. Clientes sin pedidos en el último mes:</strong> Usa LEFT JOIN para detectar inactividad.</div>
    <div class="codigo"><pre>
SELECT c.id, c.nombre
FROM clientes c
LEFT JOIN pedidos pe ON c.id = pe.id_cliente AND pe.fecha >= DATE_SUB(NOW(), INTERVAL 1 MONTH)
WHERE pe.id IS NULL;
    </pre></div>

    <div class="definicion"><strong>4. Producto más vendido:</strong> Ordena por cantidad total de ventas.</div>
    <div class="codigo"><pre>
SELECT lp.nombre_producto, SUM(lp.cantidad) AS total_vendido
FROM lineas_pedido lp
GROUP BY lp.nombre_producto
ORDER BY total_vendido DESC
LIMIT 1;
    </pre></div>

    <div class="definicion"><strong>5. Promedio de productos por pedido:</strong> Subconsulta que calcula la media de ítems.</div>
    <div class="codigo"><pre>
SELECT AVG(num_productos) AS promedio_por_pedido
FROM (
  SELECT COUNT(*) AS num_productos
  FROM lineas_pedido
  GROUP BY id_pedido
) AS sub;
    </pre></div>

    <div class="definicion"><strong>6. Pedidos mayores a 100€:</strong> Filtra pedidos cuyo importe total supera 100 euros.</div>
    <div class="codigo"><pre>
SELECT pe.id, c.nombre, SUM(lp.precio_unitario * lp.cantidad) AS total_pedido
FROM pedidos pe
JOIN lineas_pedido lp ON pe.id = lp.id_pedido
JOIN clientes c ON pe.id_cliente = c.id
GROUP BY pe.id
HAVING total_pedido > 100;
    </pre></div>

    <div class="definicion"><strong>7. Tiempo promedio entre pedidos:</strong> Usa funciones de ventana para calcular la media de días entre pedidos.</div>
    <div class="codigo"><pre>
SELECT id_cliente, AVG(diferencia) AS dias_promedio
FROM (
  SELECT id_cliente, DATEDIFF(fecha, LAG(fecha) OVER (PARTITION BY id_cliente ORDER BY fecha)) AS diferencia
  FROM pedidos
) AS diferencias
WHERE diferencia IS NOT NULL
GROUP BY id_cliente;
    </pre></div>

    <div class="definicion"><strong>8. Clientes que compraron un producto específico:</strong> Lista los clientes que adquirieron "Producto A".</div>
    <div class="codigo"><pre>
SELECT DISTINCT c.id, c.nombre
FROM clientes c
JOIN pedidos pe ON c.id = pe.id_cliente
JOIN lineas_pedido lp ON pe.id = lp.id_pedido
WHERE lp.nombre_producto = 'Producto A';
    </pre></div>

    <div class="definicion"><strong>9. Productos nunca vendidos:</strong> Detecta productos sin ventas mediante LEFT JOIN.</div>
    <div class="codigo"><pre>
SELECT p.id, p.nombre
FROM productos p
LEFT JOIN lineas_pedido lp ON p.id = lp.id_producto
WHERE lp.id IS NULL;
    </pre></div>

    <div class="definicion"><strong>10. Ranking de clientes por facturación:</strong> Muestra el top 10 de clientes con mayor gasto.</div>
    <div class="codigo"><pre>
SELECT c.id, c.nombre, SUM(lp.precio_unitario * lp.cantidad) AS total
FROM clientes c
JOIN pedidos pe ON c.id = pe.id_cliente
JOIN lineas_pedido lp ON pe.id = lp.id_pedido
GROUP BY c.id
ORDER BY total DESC
LIMIT 10;
    </pre></div>
    <!-- CONTINUACIÓN DEL BLOQUE 3 -->

    <div class="definicion"><strong>11. Pedidos por año y mes:</strong> Agrupa pedidos por año y mes con función de formato.</div>
    <div class="codigo"><pre>
SELECT DATE_FORMAT(fecha, '%Y-%m') AS periodo, COUNT(*) AS total_pedidos
FROM pedidos
GROUP BY periodo;
    </pre></div>

    <div class="definicion"><strong>12. Clientes con más de 5 pedidos:</strong> Filtra por cantidad de pedidos por cliente.</div>
    <div class="codigo"><pre>
SELECT id_cliente, COUNT(*) AS total_pedidos
FROM pedidos
GROUP BY id_cliente
HAVING total_pedidos > 5;
    </pre></div>

    <div class="definicion"><strong>13. Valor máximo y mínimo por pedido:</strong> Usa funciones de agregación MIN y MAX.</div>
    <div class="codigo"><pre>
SELECT id_pedido, MAX(precio_unitario * cantidad) AS max_linea,
       MIN(precio_unitario * cantidad) AS min_linea
FROM lineas_pedido
GROUP BY id_pedido;
    </pre></div>

    <div class="definicion"><strong>14. Clientes nuevos del último mes:</strong> Se basa en la fecha de alta.</div>
    <div class="codigo"><pre>
SELECT id, nombre
FROM clientes
WHERE fecha_alta >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH);
    </pre></div>

    <div class="definicion"><strong>15. Porcentaje de ventas por producto:</strong> Muestra la proporción de ventas.</div>
    <div class="codigo"><pre>
SELECT nombre_producto,
       SUM(cantidad) AS total_vendido,
       ROUND(SUM(cantidad) * 100.0 / 
        (SELECT SUM(cantidad) FROM lineas_pedido), 2) AS porcentaje
FROM lineas_pedido
GROUP BY nombre_producto;
    </pre></div>

    <div class="definicion"><strong>16. Pedidos sin líneas de productos:</strong> Detecta pedidos vacíos.</div>
    <div class="codigo"><pre>
SELECT pe.id, pe.fecha
FROM pedidos pe
LEFT JOIN lineas_pedido lp ON pe.id = lp.id_pedido
WHERE lp.id IS NULL;
    </pre></div>

    <div class="definicion"><strong>17. Tiempo entre primer y último pedido por cliente:</strong> Usa funciones MIN y MAX por cliente.</div>
    <div class="codigo"><pre>
SELECT id_cliente,
       DATEDIFF(MAX(fecha), MIN(fecha)) AS dias_entre_pedidos
FROM pedidos
GROUP BY id_cliente;
    </pre></div>

    <div class="definicion"><strong>18. Ticket promedio general:</strong> Valor medio de todos los pedidos.</div>
    <div class="codigo"><pre>
SELECT AVG(total) AS ticket_medio
FROM (
  SELECT SUM(precio_unitario * cantidad) AS total
  FROM lineas_pedido
  GROUP BY id_pedido
) AS subtickets;
    </pre></div>

    <div class="definicion"><strong>19. Clientes con productos distintos comprados:</strong> Total de productos únicos adquiridos.</div>
    <div class="codigo"><pre>
SELECT c.id, c.nombre, COUNT(DISTINCT lp.id_producto) AS productos_distintos
FROM clientes c
JOIN pedidos pe ON c.id = pe.id_cliente
JOIN lineas_pedido lp ON pe.id = lp.id_pedido
GROUP BY c.id;
    </pre></div>

    <div class="definicion"><strong>20. Último pedido realizado por cliente:</strong> Usa función MAX.</div>
    <div class="codigo"><pre>
SELECT c.id, c.nombre, MAX(pe.fecha) AS ultima_fecha
FROM clientes c
JOIN pedidos pe ON c.id = pe.id_cliente
GROUP BY c.id;
    </pre></div>

    <!-- CONTINUACIÓN DEL BLOQUE 3 -->

    <div class="definicion"><strong>21. Clientes que hicieron pedidos en todos los meses del último trimestre:</strong> Usa COUNT(DISTINCT).</div>
    <div class="codigo"><pre>
SELECT id_cliente
FROM pedidos
WHERE fecha >= DATE_SUB(CURDATE(), INTERVAL 3 MONTH)
GROUP BY id_cliente
HAVING COUNT(DISTINCT DATE_FORMAT(fecha, '%Y-%m')) = 3;
    </pre></div>

    <div class="definicion"><strong>22. Clientes sin productos repetidos por pedido:</strong> Verifica si hay productos duplicados en un pedido.</div>
    <div class="codigo"><pre>
SELECT id_pedido
FROM lineas_pedido
GROUP BY id_pedido
HAVING COUNT(id_producto) = COUNT(DISTINCT id_producto);
    </pre></div>

    <div class="definicion"><strong>23. Número de líneas de pedido promedio por cliente:</strong> Calcula líneas por cliente.</div>
    <div class="codigo"><pre>
SELECT c.id, c.nombre, AVG(sub.lineas) AS lineas_promedio
FROM clientes c
JOIN (
  SELECT pe.id_cliente, COUNT(*) AS lineas
  FROM pedidos pe
  JOIN lineas_pedido lp ON pe.id = lp.id_pedido
  GROUP BY pe.id
) AS sub ON c.id = sub.id_cliente
GROUP BY c.id;
    </pre></div>

    <div class="definicion"><strong>24. Clientes con pedidos en días consecutivos:</strong> Usa LAG y DATEDIFF.</div>
    <div class="codigo"><pre>
SELECT *
FROM (
  SELECT id_cliente, fecha,
         DATEDIFF(fecha, LAG(fecha) OVER (PARTITION BY id_cliente ORDER BY fecha)) AS diferencia
  FROM pedidos
) AS consecutivos
WHERE diferencia = 1;
    </pre></div>

    <div class="definicion"><strong>25. Día con mayor número de pedidos:</strong> Agrupa por fecha.</div>
    <div class="codigo"><pre>
SELECT fecha, COUNT(*) AS total_pedidos
FROM pedidos
GROUP BY fecha
ORDER BY total_pedidos DESC
LIMIT 1;
    </pre></div>

    <div class="definicion"><strong>26. Clientes con pedidos de más de 3 líneas:</strong> Cuenta líneas por pedido.</div>
    <div class="codigo"><pre>
SELECT DISTINCT pe.id_cliente
FROM pedidos pe
JOIN lineas_pedido lp ON pe.id = lp.id_pedido
GROUP BY pe.id
HAVING COUNT(lp.id) > 3;
    </pre></div>

    <div class="definicion"><strong>27. Producto con mayor ingreso total:</strong> Multiplica cantidad por precio.</div>
    <div class="codigo"><pre>
SELECT id_producto, nombre_producto,
       SUM(precio_unitario * cantidad) AS ingreso_total
FROM lineas_pedido
GROUP BY id_producto
ORDER BY ingreso_total DESC
LIMIT 1;
    </pre></div>

    <div class="definicion"><strong>28. Comparativa de facturación mensual:</strong> Muestra dos últimos meses y diferencia.</div>
    <div class="codigo"><pre>
SELECT mes, total_mes,
       total_mes - LAG(total_mes) OVER (ORDER BY mes) AS diferencia
FROM (
  SELECT DATE_FORMAT(fecha, '%Y-%m') AS mes,
         SUM(lp.precio_unitario * lp.cantidad) AS total_mes
  FROM pedidos pe
  JOIN lineas_pedido lp ON pe.id = lp.id_pedido
  GROUP BY mes
) AS mensual;
    </pre></div>

    <div class="definicion"><strong>29. Clientes con pedidos en fin de semana:</strong> Usa DAYOFWEEK.</div>
    <div class="codigo"><pre>
SELECT DISTINCT c.id, c.nombre
FROM clientes c
JOIN pedidos pe ON c.id = pe.id_cliente
WHERE DAYOFWEEK(pe.fecha) IN (1, 7);
    </pre></div>

    <div class="definicion"><strong>30. Cantidad media por producto:</strong> Calcula la media de unidades vendidas por ítem.</div>
    <div class="codigo"><pre>
SELECT nombre_producto, AVG(cantidad) AS media_unidades
FROM lineas_pedido
GROUP BY nombre_producto;
    </pre></div>


  </div>
</body>
</html>
