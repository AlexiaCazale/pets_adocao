<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pet</h1>
    <form action="#" method="POST">
        <label>Nome</label>
        <input type="text" name="nome" id="nome" value="<?php echo isset($_POST['nome']) ? $_POST['nome'] : '' ?>">
        <div>
            <?php echo $msg[0]; ?>
        </div>
        <br><br>
        <label>Idade</label>
        <input type="number" name="idade" id="idade" value="<?php echo isset($_POST['idade']) ? $_POST['idade'] : 0 ?>">
        <div>
            <?php echo $msg[1]; ?>
        </div>
        <br><br>
        <label>Cor</label>
        <input type="text" name="cor" id="cor" value="<?php echo isset($_POST['cor']) ? $_POST['cor'] : '' ?>">
        <div>
            <?php echo $msg[2]; ?>
        </div>
        <br><br>
        <label>Porte:</label>
        <select name="porte">
            <option value="0">Escolha o porte: </option>
            <?php 
            if(isset($_POST["porte"]) && $_POST["porte"] === "Mini"){
                echo"
                <option selected>Mini</option>";
            }else{
                echo "
                <option>Mini</option>";
            }
            if(isset($_POST["porte"]) && $_POST["porte"] === "Pequeno"){
                echo"
                <option selected>Pequeno</option>";
            }else{
                echo "
                <option>Pequeno</option>";
            }
            if(isset($_POST["porte"]) && $_POST["porte"] === "  Médio"){
                echo"
                <option selected>Médio</option>";
            }else{
                echo "
                <option>Médio</option>";
            }
            if(isset($_POST["porte"]) && $_POST["porte"] === "Grande"){
                echo"
                <option selected>Grande</option>";
            }else{
                echo "
                <option>Grande</option>";
            }
             ?>
        </select>
        <div>
            <?php echo $msg[3]; ?>
        </div>
        <br><br>
        <input type="submit" value="Cadastrar">
        <br><br>
    </form>
    
</body>
</html>