<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Createcliente</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    include 'db.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM produtos";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "<table border ='1'>
            <tr>
                <th> Nome </th>
                <th> Preço </th>
                <th> Quantidade </th>
                <th> Finalizar </th>
            </tr>
            ";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td> {$row['nome']} </td>
                <td> {$row['preco']} </td>
                <td> <input type='number' name='quantidade' required> </td>
                <td> <button name='adicionar' value='Adicionar' method='POST'> Pedir </button> </td>
              </tr>   
            ";
    } 
    echo "</table>";
    } else {
    echo "Nenhum produto encontrado.";
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sql = "INSERT INTO pedidos SET quantidade ='$name',email ='$email' WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "Novo pedido criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
    }

    ?>
    <div id="navbar">Padaria Paodango</div>
    
    <form method="POST" action="create.php" id="formulario">
        <div>
            <div id="itens">
                <label for="pf">Pão Francês</label>
                <input type="number" name="pf">
            </div>
            <div id="itens">
                <label for="bolo">Bolo de chocolate</label>
                <input type="number" name="bolo">
            </div>

            <input type="submit" value="Adicionar" id="submit">
        </div>
    </form>

    <a href="read.php">Ver pedidos</a>

</body>

</html>