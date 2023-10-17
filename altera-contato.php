<?php
 require_once "conexao.php";
?>
<a href="agenda.php">Voltar</a>
<?

$sql = ("UPDATE agenda SET
nome='".$_POST['nome']."',
celular='".$_POST['celular']."',
email='".$_POST['email']."',

where id_contato=" .$_GET['id_contato']);

$resultado = mysql_query($sql)
or die (mysql_error());
?>
<br>

<h1>Registro Alterado com sucesso</h1>
