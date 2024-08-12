<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos php</title>
</head>
<body>
    <?php 
        // $num = 0x1A;
        // echo "o valor da variavel é $num";
        // $v = (int) 3e2; coerção
        // var_dump($v);
        // $v = 3e2;
        // echo "o valor da variavel é $v";
        // $num = "950";
        // var_dump($num);
        // $vet = [6, 2, 9.5, false, 3, 5];
        // var_dump($vet);
        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
?>
</body>
</html>