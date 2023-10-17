<center>
<h1>Agenda de Contatos</h1></center>

<font size="verdana">


<?php
 require_once "conexao.php";
?>


<?

$inicial= $_GET['id_contato'];

$busca = mysql_query("select * from agenda where id_contato='$inicial%'") or trigger_error('Erro ao executar consutla. Detalhes = ' . mysql_error());





           if (empty($busca)) { 
    echo "<table>";
	echo "<tr>";
	echo "<td>" ;
    echo "Nenhum registro encontrado.";

	echo "</td>";
	echo "</tr>";
	echo "</table";
	}

while ($dados = mysql_fetch_array($busca)) {


	echo "<table width=700 align=center>";

	echo "<td bgcolor=#ebf3ff><b></b>";
echo "</td>";
echo "</tr>";




	echo "<tr>";
	echo "<td>";


echo "<b>Id do Contato:</b> $dados[id_contato]<br />";


   echo "</tr>";
	echo "</td>";

	    echo "<tr>";
	    echo "<td>";

	echo "<b>Nome completo:</b> <font color=blue>$dados[nome]</font><br />";
    echo "</tr>";
	echo "</td>";


	 echo "<tr>";
	    echo "<td>";

	echo "<b>Celular:</b><font color=blue> $dados[celular]</font><br />";
    echo "</tr>";
	echo "</td>";


		   echo "<tr>";
		   echo "<td>";


	echo "<b>E-mail:</b>&nbsp $dados[email]<br />";

	   echo "</tr>";
		   echo "</td>";

           echo "<tr>";
		   echo "<td>";

	echo "<center<b><a href='form-alterar-contato.php?id_contato={$dados['id_contato']}'>Atualizar Contato</a></b>";

	echo "<b><a href='agenda.php'>Voltar</a></b></center>";
	echo("\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t");

	   echo "</tr>";
		   echo "</td>";
	echo "<tr>";
	echo "<td bgcolor=#f8f8fA>";
	echo "</td>";
	 echo "</tr>";
		   echo "</td>";

echo "</table>";
}
?>

<br>