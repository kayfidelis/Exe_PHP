<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tudo.css">
    <script language="JavaScript">
        function voltar() {
            location.href = "semana.html";
        }
    </script>
</head>

<body>
    <?php
    echo "<div class= 'input'>";
    echo "";
    echo "</br>";
    $diasema = $_POST['txtnum'];
    switch ($diasema) {
        case 1: {
                echo "Domingo";
                break;
            }
        case 2: {
                echo "Segunda";
                break;
            }
        case 3: {
                echo "Terça";
                break;
            }
        case 4: {
                echo "Quarta";
                break;
            }
        case 5: {
                echo "Quinta";
                break;
            }
        case 6: {
                echo "Sexta";
                break;
            }
        case 7: {
                echo "Sábado";
                break;
            }
        default:
            $diasema >= 8;
            echo "digita um valor até 7";
            
    }
    echo "</div>";
    echo "</br>";
    echo "<form>";
    echo "<input type='button' value='Voltar' onClick='voltar()' class='input'/>";
    echo "</form>";
    ?>
</body>

</html>