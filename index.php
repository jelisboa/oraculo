<?php

Include (“database.php”);
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
                         <td>Id</td>
                         <td>Nome</td>
                         <td>Email</td>
                  </tr>
<?php while($dado = $con->fetch_array()) ?>
<tr>
       <td><?php echo $dado”usu_id”; ?> </td>
       <td><?php echo $dado”usu_nome”; ?> </td>
       <td><?php echo $dado”usu_email”; ?> </td>
   <td><a href=”editar.php?id=<?php echo $dado”usu_id”; ?>”>Editar</a>
        <a href=”excluir.php?id=<?php echo $dado”usu_id”; ?>”>Excluir</a>
</tr>
<?php ?>
</table>
</body>
</html>
