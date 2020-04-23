<?php
//подключаем бд
    require "DBconnection.php";
//принимаем данные регистрации
    $data=$_POST;
//при нажатии кнопки, заносим данные в бд
    if(isset($data['btnRegmi']))
    {
        echo "gulyay rvanina";
        if($conn){

        echo "<h1></h1>";

            $stmt=$conn->prepare("Insert into users (login,password)values (:login,:password)");
            $stmt->bindParam(':login',$data['login']);
            $stmt->bindParam(':password',$data['password']);
            $stmt->execute();

            $stmt1=$conn->prepare("SELECT user_ID from users where (login=?) and (password=?)");
            $stmt1->execute(array($data['login'],$data['password']));

                while ($row = $stmt1->fetch())
                {
                    //echo "<h2>".$row[0] ."</h2>";
                    $user_ID= $row[0];
                   // echo $user_ID;
                }
            echo "<p>user id ".$user_ID." registered successfully</p>";

                $gender='null';
                if(isset($data['male']))
                $gender='M';
                else $gender='F';

            $stmt2=$conn->prepare("INSERT INTO sotrudnik (name,lastname,fathername,gender,mail,user_ID) VALUES(:name,:lastname,:fathername,:gender,:mail,:user_ID);
");
            $stmt2->bindParam(':name',$data['firstname']);
            $stmt2->bindParam(':lastname',$data['lastname']);
            $stmt2->bindParam(':fathername',$data['patronymic']);
            $stmt2->bindParam(':gender',$gender);
            $stmt2->bindParam(':mail',$data['email']);
            $stmt2->bindParam(':user_ID',$user_ID);
            $stmt2->execute();

        }else echo "failed - ";
    }
    else{
        echo "ne podtverzhdeno";
    }


?>
<title>Registration</title>
<link rel="stylesheet" href="registration.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
</head>
<body class="back">
<div class="form-wrap" align="center">
    <form id="registration" action="registration.php" method="POST">
        <div class="head">
            <p>Регистрация</p>
        </div>
        <div class="group">
            <input type="text" name="lastname" required>
            <span class="bar"></span>
            <label>Фамилия</label>
        </div>
        <div class="group">
            <input type="text" name="firstname" required>
            <span class="bar"></span>
            <label>Имя</label>
        </div>
        <div class="group">
            <input type="text" name="patronymic" required>
            <span class="bar"></span>
            <label>Отчество</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="defaultInline1" name="female" checked>
            <label class="custom-control-label" for="defaultInline1"> Женский </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="defaultInline2" name="male">
            <label class="custom-control-label" for="defaultInline2"> Мужской </label>
        </div>

        <div class="group">
            <input data-rule="email" type="email" name="email" required>
            <span class="bar"></span>
            <label>E-mail</label>
        </div>
        <div class="group">
            <input data-rule="login" type="text" name="login" required>
            <span class="bar"></span>
            <label>Логин</label>
        </div>
        <div class="group">
            <input data-rule="password" type="password" name="password" required>
            <span class="bar"></span>
            <label>Пароль</label>
        </div>
        <div class="group">
            <input type="password" name="password2" required>
            <span class="bar"></span>
            <label>Повторите пароль</label>
        </div>
        <button type="submit" class="btn btn-success" name="btnRegmi">Зарегистрироваться</button>
    </form>
</div>
</body>
</html>
