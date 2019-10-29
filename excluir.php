<?php 
Include (“database.php”);
$usu_id = intval($_GET[‘id’]);
$sql_code = “DELETE * FROM clientes WHERE id = ‘usu_id’”;
$sql_query = $mysqli->query($sql_code) o die(mysqli->error);
If($sql_query)
   	echo”
<script>
	alert (‘O usuário foi deletado com sucesso’);
           Location.href=’index.php?p=inicial’;
</script>”;
Else 
echo
<script>
	alert (‘Não foi possível deletar o usuário’);
location.href=’index.php?p=inicial’;
</script>”;
