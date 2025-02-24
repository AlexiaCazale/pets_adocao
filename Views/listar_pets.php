<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Pets</h1>
    <br>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Cor</th>
                <th>Porte</th>
                <th>Atualizar</th>
                <th>Apagar</th>
            </tr>
            <?php   
                foreach($ret as $dado){
                    echo "<td colspan='6'><pre>";
                    var_dump($dado); // Aqui ele será executado corretamente
                    echo "</pre></td>";
                    echo "<tr>

                    <td>{$dado->nome}</td>
                    <td>{$dado->idade}</td>
                    <td>{$dado->cor}</td>
                    <td>{$dado->porte}</td>
                    <td><a href='.'>Atualizar</a></td>
                    <td><a href='index.php?controle=petController&metodo=deletar&id_pet=". $dado->pet_id . "'>Apagar</a></td>
                    </tr>";
                }
            ?>
        </table>
</body>
</html>