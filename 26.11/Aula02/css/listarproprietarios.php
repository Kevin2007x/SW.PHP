<?php
include('config.php');

$result = mysqli_query($conn, "SELECT * FROM proprietarios");

echo "<table>";
echo "<tr><th>ID</th><th>Nome</th><th>CPF</th><th>Ações</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nome'] . "</td>";
    echo "<td>" . $row['cpf'] . "</td>";
    echo "<td><a href='editarproprietarios.php?id=" . $row['id'] . "'>Editar</a> | 
          <a href='excluirproprietarios.php?id=" . $row['id'] . "'>Excluir</a></td>";
    echo "</tr>";
}
echo "</table>";
?>
