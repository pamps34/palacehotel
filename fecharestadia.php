<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fecharestadia.css" media="screen"/>
    <title>gerarconta</title>
</head>
<body>
    <?php
        $valorPacote = 0;
        $valorQuartos = 0;
        $valorServicos = 0;
        $valorTotal = 0;
        $pacote = null;
        $quartos = null;
        $servicos = null;

        $pacote = $_POST['pacote'];
        $quartos = $_POST["quartos"];
        $servicos = $_POST["servicos"];

        if($pacote == "completo"){
            $valorPacote = 600;
        }
        if($pacote == "cafe"){
            $valorPacote = 300;
        }
        if($pacote == "almoço"){
            $valorPacote = 300;
        }
        if($pacote == "janta"){
            $valorPacote = 300;
        }
        if($quartos == "casal"){
            $valorQuartos = 500;
        }
        if($quartos == "solteiro"){
            $valorQuartos = 400;
        }
        if($quartos == "misto"){
            $valorQuartos = 500;
        }
        if($quartos == "berço"){
            $valorQuartos = 600;
        }
        if($servicos == "limpeza"){
            $valorServicos = 100;
        }
        if($servicos == "comida"){
            $valorServicos = 200;
        }
        if($servicos == "decoração"){
            $valorServicos = 300;
        }
        if($servicos == "bebidas"){
            $valorServicos = 80;
        }
        $valorTotal = $valorPacote + $valorQuartos + $valorServicos;
    ?>
    <div id="flex">
        <h1>Fechar estadia</h1>
        <h2><label id="label">Pacote:</label></h2>
        <form action = "fecharestadia.php" method="POST">
        <select name="pacote" id="pacote">
            <option value = "">Pacote:</option>
            <option value = "completo">Completo</option>
            <option value = "cafe">Incluso apenas o café</option>
            <option value = "almoço">Incluso apenas almoço</option>
            <option value = "janta">Incluso apenas janta</option>
            <option value = "">Outros:</option>
            </select>
        <br>
        <br>
        <select name="quartos" id="quartos">
        <label id="label">Tipos de quartos:</label>
        <option value = "">Tipos de quartos:</option>
            <option value = "casal">Casal</option>
            <option value = "solteiro">Solteiro</option>
            <option value = "misto">Cama de casal + solteiro</option>
            <option value = "berço">Cama de casal + berço</option>
            <option value = "">Outros:</option>
        <br>
        <br>
        </select>
        <br>
        <br>
        <select name="servicos" id="servicos">
        <label id="label">Serviço de quarto:</label>
        <option value = "">Serviço de quarto:</option>
            <option value = "limpeza">Limpeza</option>
            <option value = "comida">Pedido de comida</option>
            <option value = "decoração">Decoração</option>
            <option value = "bebidas">Bebidas</option>
            <option value = "">Outros:</option>
        </select>
        <br>
        <br>
        <input id="button" type ="submit"></input>
        </form>
        <br>
        <br>
</div>   
</body>
</html>
