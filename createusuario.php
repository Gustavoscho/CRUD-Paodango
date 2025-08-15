<body>

    <?php

    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['nome'];
    $email = $_POST['email'];

    $sql = " INSERT INTO clientes (name,email) VALUE ('$name','$email')";

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