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
            </tr>
            <?php   
                foreach($ret as $dado){
                    echo "<tr>
                    <td>{$dado->nome}</td>
                    <td>{$dado->idade}</td>
                    <td>{$dado->cor}</td>
                    <td>{$dado->porte}</td>
                    <td>
                    <a href="">Alterar</a>&nbsp;&nbsp;
                    <a href="">Excluir</a>&nbsp;&nbsp;</td>
                    </tr>";
                }
            ?>
        </table>
</body>
</html>