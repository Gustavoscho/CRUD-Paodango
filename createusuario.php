<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <link rel="stylesheet" href="style.css">
    <?php

    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['nome'];
    $email = $_POST['email'];

    $sql = " INSERT INTO produtos (name,email) VALUE ('$name','$email')";

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

    <a href="readUsuario.php">Ver pedidos</a>

</body>

</html>