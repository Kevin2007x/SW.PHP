<?php
// Conectar ao banco
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    // Inserir no banco de dados
    $sql = "INSERT INTO proprietarios (nome, cpf, endereco, telefone, email)
            VALUES ('$nome', '$cpf', '$endereco', '$telefone', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Novo proprietário cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<form method="post" action="cadastrarproprietarios.php">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome"><br>
    <label for="cpf">CPF:</label><br>
    <input type="text" id="cpf" name="cpf"><br>
    <label for="endereco">Endereço:</label><br>
    <input type="text" id="endereco" name="endereco"><br>
    <label for="telefone">Telefone:</label><br>
    <input type="text" id="telefone" name="telefone"><br>
    <label for="email">E-mail:</label><br>
    <input type="text" id="email" name="email"><br>
    <input type="submit" value="Cadastrar">
</form>
