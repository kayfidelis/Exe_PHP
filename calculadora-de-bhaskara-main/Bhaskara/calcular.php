<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$a = $_POST["a"];
	$b = $_POST["b"];
	$c = $_POST["c"];

	$delta = $b * $b - 4 * $a * $c;

	if ($delta < 0) {
		echo "Não existem raízes reais para esta equação.";
	} else {
		$x1 = (-$b + sqrt($delta)) / (2 * $a);
		$x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "<div class='resultado'> <b> O RESULTADO É: <b></div>";
		echo "<div class='resultado'> X1 = $x1 <br></div>";
		echo "<div class='resultado'> X2 = $x2 <br></div>";
        echo "<div class='resultado'> Delta = $delta</div>";
	}
}
?>

</body>
</html>

