<?php

define("url_app","http://localhost/php/agendadecontatos");

$db = mysql_connect("127.0.0.1","root","");

$dado = mysql_select_db("base-de-dados",$db);
?>
