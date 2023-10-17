<?php
 require_once "conexao.php";

?>
 <a href="agenda.php">Voltar</a>
<?

$sql = "DELETE FROM agenda WHERE id_contato = ".$_GET["id_contato"];

$query = mysql_query($sql);

if ($query == true) {
    echo "Registro excluido com sucesso";
}
else {
    echo "Não foi possível excluir seu registro";
}
?>