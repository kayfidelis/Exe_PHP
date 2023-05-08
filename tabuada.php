<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tudo.css">
    <script language="JavaScript">
        function voltar()
        {
            location.href="tabuada.html";
        }
    </script>
    </head>
    <body>
    <?php
    
    echo "<div class= 'input'>";
    echo "</br>";
    $numdigt=$_POST["txtnum"];
    if($numdigt > 0 and $numero < 11){
        for($i = 1; $i<=10; $i++)
        {
            echo $numdigt . "x" . $i . "=". $i*$numdigt. "<br/>";
        }
    }
   
    echo "</div>";
    echo "</br>";
    echo "<form>";
    echo "<input type='button' value='Voltar' onClick='voltar()' class='input'/>";
    echo "</form>";
    ?>
    </body>
</html>