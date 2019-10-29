<?php

Include (“classe/conexão.php”);

$consulta = “SELECT * FROM teste”;
$con = $mysqli->query($consulta) or die ($mysqli->error);
?>
<html>
          <head>
               <meta charset=”utf8”>
</head>
<body>
          <table>
                  <tr>
                         <td>Código</td>
                         <td>Nome</td>
                         <td>Email</td>
                  </tr>
<?php while($dado = $con->fetch_array()) ?>
<tr>
       <td><?php echo $dado”usu_codigo”; ?> </td>
       <td><?php echo $dado”usu_nome”; ?> </td>
       <td><?php echo $dado”usu_email”; ?> </td>
       <td><a href=”usu_editar.php?codigo=<?php echo $dado”usu_codigo”; ?>”>Editar</a>
                <a href=”usu_excluir.php?codigo=<?php echo $dado”usu_codigo”; ?>”>Excluir</a>


</tr>
<?php ?>

</table>
</body>
</html>


