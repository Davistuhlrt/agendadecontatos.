<?php
 require_once "conexao.php";
?>

<a href="agenda.php">Voltar</a>

<br>
  <center>
<h1>Agenda de contatos </h1>

 </center>
 
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


<FORM name=aagenda method=post  alig="center" action="cadastrar-agenda.php" class="myinputstyle">


<hr>


<TABLE BORDER=0 align="center"  cellspacing= width="800">
<TR>
	<TD bgcolor="#66cc00" class="myinputstyle" size=100>Nome:</TD>
	<TD bgcolor="#EBEBEB">
	<INPUT type=text name="nome" size="100" class="myinputstyle">
	</TD>
</TR>

<TR>


<TR>
	<TD bgcolor="#CCCCCC" class="myinputstyle" size=13  >Celular:</TD>
	<TD bgcolor="#EBEBEB" >
	<INPUT type=text name="celular" size="13" class="myinputstyle">
	</TD>
</TR>

<TR>

<TR>
	<TD bgcolor="#CCCCCC" class="myinputstyle" size=100  >E-mail:</TD>
	<TD bgcolor="#EBEBEB" >
	<INPUT type=text name="email" size="100" class="myinputstyle">
	</TD>
</TR>

		<TR>
	<TD COLSPAN=2 align="center" class="myinputstyle">
	<INPUT type="submit" value="Enviar" align="center">
	</TD>
</TR>
</TABLE>
</FORM>