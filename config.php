<?php $link = mysql_connect('127.0.0.1', 'root', 'root');
if (!$link) {
    die('N�o foi poss�vel conectar: ' . mysql_error());
}

$db = mysql_select_db("estoque",$link);

if (!$db) {
    die('Banco de Dados n�o encontrado: ' . mysql_error());
}

?>