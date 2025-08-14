<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['nome'];
    $email = $_POST['email'];

    $sql = " INSERT INTO clientes (name,email) VALUE ('$name','$email')";

    if ($conn->query($sql) === true) {
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
    }

    ?>
    <div id="navbar">Padaria Paodango</div>
    
    <form method="POST" action="create.php" id="formulario">

        <label for="name">Nome:</label>
        <input class="inputs" type="text" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <input type="submit" value="Adicionar">

    </form>

    <a href="read.php">Ver registros.</a>

</body>

</html>