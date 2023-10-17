<?php
if (session_id()==""){
session_start();
}
?>

<?php
 require_once "conexao.php";
?>

<?php

$sql = "INSERT INTO usuarios(
login,
senha,
nome,
permissao
)
Values
('".$_POST["login"]."',
'".$_POST['senha']."',
'".$_POST['nome']."',
'".$_POST['permissao']."'
)";

$query = mysql_query($sql);

if ($query == true) {
    echo "<script>alert('usuario cadastrado com sucesso');</script>";
    echo "<a href=pagina_principal.php>Voltar</a>";
    


	}
else {
    echo "Não foi possivel inserir o registro - entre em contato com o webmaster ".mysql_error();
}
?>

