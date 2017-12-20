<?php

$host="localhost";
$username="root";
$password="laravel";
$db_name="tbl-user";

$table_name="db";

$connection=mysqli_connect($host,$username,$password,$db_name);

mysqli_query($connection,"INSERT INTO $tbl-user (`name', 'pass'

VALUES(null,'$_Get[c1]','$_Get[c2]')");

if($result)
echo "ok shod";
?>