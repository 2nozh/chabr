<?php
//для локальной бд
    $HomeServerName="localhost";
    $HomeUserName="us";
    $HomePwd="root";
//для бд на сервере
    $serverName="localhost";
    $userName="j90093e2";
    $pwd="Baso4ka";

    try {
        $conn=new PDO('mysql:host=localhost;dbname=scheme',$HomeUserName,$HomePwd);
        echo "<p>Connected </p>";
    }catch (PDOException $e){
        print "Error!!!!" . $e->getMessage() . "<br/>";
        die();
    };