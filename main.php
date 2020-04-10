<!DOCTYPE html>
<html>
<head>
    <title>teame</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<?php

$name=$_POST["name"];
$password=$_POST["password"];
echo "<h1 class='title'>Welcome," . $name . "</h1>";
/*$serverName="localhost";
$userName="us";
$pwd="root";
$conn=new mysqli($serverName,$userName,$pwd);
if($conn){
    echo "connected";
}else echo "failed - ";
die(print_r(sqlsrv_errors(),true));*/
?>


<header id="introduction">
    <h1 class="title"></h1>
</header>

<!-- TABS LIST -->
<p id="tabs-list">

        <label class="panel-label">Я</label>
        <label class="panel-label">Тесты</label>
        <label class="panel-label">Собрать команду</label>
</p>




</body>
</html>