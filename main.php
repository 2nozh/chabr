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
echo "<h1 class='title'>" . $name . ", welcome</h1>";

if($conn){
    echo "connected";
    $stmt = $conn->query('SELECT * FROM Sotrudnik');
    while ($row = $stmt->fetch())
    {
        echo $row['name'] . "\n";
    }
}else echo "failed - ";

?>

<!-- TABS LIST -->
<p id="tabs-list">

        <label class="panel-label">Я</label>
        <label class="panel-label">Тесты</label>
        <label class="panel-label"><a href="team.php">Собрать команду</a></label>

</p>

<!-- TAB CONTROLLERS -->
<input id="panel-1-ctrl"
       class="panel-radios" type="radio" name="tab-radios" checked>
<input id="panel-2-ctrl"
       class="panel-radios" type="radio" name="tab-radios">
<input id="panel-3-ctrl"
       class="panel-radios" type="radio" name="tab-radios">

<header id="introduction">
    <h1>No JS: Tabs That Scale Down to Menu</h1>
</header>

<!-- TABS LIST -->
<ul id="tabs-list">
    <!-- MENU TOGGLE -->
    <li id="li-for-panel-1">
        <label class="panel-label"
               for="panel-1-ctrl">Я</label>
    </li><!--INLINE-BLOCK FIX
 --><li id="li-for-panel-2">
        <label class="panel-label"
               for="panel-2-ctrl">Тесты</label>
    </li><!--INLINE-BLOCK FIX
 --><li id="li-for-panel-3">
        <label class="panel-label"
               for="panel-3-ctrl">Собрать команду</label>

</ul>

<!-- THE PANELS -->
<article id="panels">
    <div class="container">
        <section id="panel-1">
            <main>
                <h1>Информация о пользователе</h1>
            </main>
        </section>
        <section id="panel-2">
            <main>
                <h1>Информация о тестах</h1>

            </main>
        </section>
        <section id="panel-3">
            <main>
                <h1>Интерфейс набора команды</h1>
            </main>
        </section>

    </div>
</article>


</body>
</html>