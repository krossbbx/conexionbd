<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $usuario = 'root';
        $pwd = 'avaras08';
        
        if ($mbd = new PDO('mysql:host=localhost;dbname=test2', $usuario, $pwd)){
            /*Metodo para preparar el query a ejecutar*/
            $pdost=$mbd->prepare("select*from persona");
            $pdost->execute();
            /*Se obtienen los valores vía PDOStatmen*/
            $arrPersona=$pdost->fetchAll();
            echo"<pre>";
            var_dump($arrPersona);
            echo"</pre>";
            
            echo"HACH MD5: ".  md5("12345");
        }
        ?>
    </body>
</html>
