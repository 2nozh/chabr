<?php
$serverName="localhost";
$userName="j90093e2";
$pwd="Baso4ka";
try {
    $conn=new PDO('mysql:host=localhost;dbname=scheme','us','root');
    echo "<p>Connected </p>";
}catch (PDOException $e){
    print "Error!!!!" . $e->getMessage() . "<br/>";
    die();
};