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
            location.href="multiplos.html";
        }
    </script>
    </head>
    <body>
    <?php
    $valor=$_POST['txtnum'];
    echo "<div class= 'input'>";
    echo "Os multiplos de '$valor' entre os valores de 1 até 15 são...";
    echo "</br>";
    for($n=$valor;$n<=15;$n++)
    {
        $resto=$n%$valor;
        if($resto==0)
        {
            echo ($n."</br>");
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