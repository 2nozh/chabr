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
$serverName="localhost";
$userName="j90093e2";
$pwd="Baso4ka";
try {
    $conn=new PDO('mysql:host=localhost;dbname=scheme','us','root');
}catch (PDOException $e){
    print "Error!!!!" . $e->getMessage() . "<br/>";
    die();
};

if($conn){
    echo "connected";
    $stmt = $conn->query('SELECT * FROM Sotrudnik');
    while ($row = $stmt->fetch())
    {
        echo $row['name'] . "\n";
    }
}else echo "failed - ";
die();
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