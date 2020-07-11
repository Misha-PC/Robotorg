<html>

<head>
    <link type="text/css" rel="stylesheet" href="src/css/index.css">
    <script src="src/js/index.js"></script>
</head>

<body>
    <div class="head">
        <div id="head-logo">
            <img id="logo" src="src/img/logo.png" alt="">
        </div>
        <div id="head-text"> <p>
                Государственное бюджетное профессиональное образовательное  учреждение <br> «Нижегородский радиотехнический колледж»
            </p>
        </div>
        <div id="head-mail">
            <p>
                8(831)433-86-05
                <br>
                <a href="mailto:nntc@mts-nn.ru">nntc@mts-nn.ru</a>
            </p>
        </div>
        <div onclick="signOut()" id="head-sigout">
        <?php
            if($_COOKIE['id'] == -1){
                echo "войти";
            }
            else{
                echo "выйти";
            }
        ?>
        </div>
    </div>

    <div id="site-body">

    </div>
</body>





</html>



<?php

/*
 *
 *    функция сборки массива в строку для отправки в JS скрипт
 * 
 */

    function assemblyStr($arr){  
        $outStr = "'".
            $arr[0].
            "', '".
            $arr[1].
            "', '".
            $arr[2].
            "', '".
            $arr[3].
            "'";
        return $outStr;

    }

/*
 *
 *   фунцкция превращения массива в объект на странице
 *   
 */

    function addRobot($arr){ 
        $str = assemblyStr($arr);
        echo "<script lang='js'> addRobot($str); </script>";    
    }

/*
 *
 * запрос двумерного массива из БД 
 * 
 */
    function getRobotArray(){
        $servername = "localhost";
        $username   = "robotorg";
        $password   = "pass11";
        $database   = "robo";

        $outArray = [];


        $link = mysqli_connect($servername, $username, $password, $database);
        $query = "select * from robots;";
        $result = $link->query($query);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($rows as $row) {
            $currentArray[0] = $row["ID"];
            $currentArray[1] = $row["PHOTO"];
            $currentArray[2] = $row["NAME"];
            $currentArray[3] = $row["PRICE"];

            $currentArray[1] = "src/img/".$currentArray[1];

            array_push($outArray, $currentArray);
        }

        return $outArray;

    }
/*
 *
 * генерация страницы объединяющая выше представленные функции
 *
 */

    function assemblyPage()    {
        $inputArray = getRobotArray();

        foreach($inputArray as $currentElem){
            addRobot($currentElem);
        }
    }


    assemblyPage(); //вызов функции генерации страницы
  

?>