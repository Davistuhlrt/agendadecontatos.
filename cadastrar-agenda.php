<?php
 require_once "conexao.php";
?>

<?php


$sql = "INSERT INTO contatos(
nome,
telefone,
e-mail,
)
Values
('".$_POST["nome"]."',
'".$_POST['celular']."',
'".$_POST['email']."',
)";

$query = mysql_query($sql);

if ($query == true) {
    include "agenda.php";


	}
else {
    echo "Não foi possivel inserir o registro - entre em contato com o webmaster ".mysql_error();
}
?>