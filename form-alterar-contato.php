<?php
 require_once "conexao.php";

?>

<a href="pagina_principal.php">Voltar</a>
  <br>
  
  <center><h1> Agenda de contatos </h1></center></img>


<head>
<style type="text/css">

.myinputstyle {
	border: 1px solid #FFFFFF;
	background: url(none) no-repeat #FFFFFF;
	font-family: tahoma, helvetica, sans-serif;
	font-style: normal;
	font-size: 14px;
	color: #454743;
}

.mylabelstyle {
	font-family: tahoma, helvetica, sans-serif;
	font-style: bold;
	font-size: 13px;
	color: #82983e;

	}

</style>
</head>


<?php

$sql = "select * from agenda where id_contato=" .$_GET['id_contato'];
$resultado = mysql_query($sql)
or die ("Não foi possivel realizar a consulta");

$linha = mysql_fetch_array($resultado);

?>
<br>
<center>
<h1>Alterar Cadastro</h1>


<form action="altera-contato.php?id_contato=<?php echo $_GET['id_contato']?>" method="post" align="center"  class="myinputstyle">

<table width="680" class="myinputstyle">
<tr>
<td class="myinputstyle">Nome</td>
<td><input name="nome" type="text" value="<?php echo $linha['nome']?>" ></td>

<tr>

<tr>
<td class="myinputstyle">Celular</td>
<td class="myinputstyle"><input name="celular" type="text" value="<?php echo $linha['celular']?>"></td>
</tr>

<tr>

<tr>
<td class="myinputstyle">E-mail</td>
<td class="myinputstyle"><input name="email" size=100 type="text" value="<?php echo $linha['email']?>"></td>
</tr>

<tr>

<tr>
<td align="right" class="myinputstyle">
<input type="submit" value="Alterar">
</td>
</tr>
</form>

</table>
