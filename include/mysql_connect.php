<?php
// Verbing zu example.com auf Port 3307
$link = mysql_connect('127.0.0.1', 'root', '');
if (!$link) {
    die('Verbindung schlug fehl: ' . mysql_error());
}
mysql_select_db('altersheim', $link) or die('Could not select database.');


?>