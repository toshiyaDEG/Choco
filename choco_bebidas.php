<?php

$cons_usuario="root";

$cons_contra="anya6812";

$cons_base_datos="php_login_database";

$cons_equipo="localhost";

 

$obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);

if(!$obj_conexion)

{

    echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";

}

else

{

    echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";

}

 

/* ejemplo de una consulta */

 

$var_consulta= "select * from bebidas";

$var_resultado = $obj_conexion->query($var_consulta);

 

if($var_resultado->num_rows>0)

  {

    echo"<table border='1' align='center'>

     <tr bgcolor='#cca2ba'>

        <th>Clave</th>

        <th>Bebida</th>

        <th>Costo</th>

	<th>Tipo</th>

     </tr>";

 

while ($var_fila=$var_resultado->fetch_array())

{

    echo "<tr>

    <td>".$var_fila["id"]."</td>";

    echo "<td>".$var_fila["nombre"]."</td>";

    echo "<td>".$var_fila["precio"]."</td>";

    echo "<td>".$var_fila["tipo"]."</td>";
            "</td></tr>";

 

 }

}

else

  {

    echo "No hay Registros";

 

  }

 

?>

