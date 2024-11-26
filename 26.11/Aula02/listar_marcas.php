<h1>Listar Marcas</h1>

<?php

$sql = 'SELECT * FROM marca';
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd>0) {
    
    echo "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

        echo "<table class='table table-striped table-hover'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Marca</th>";
        echo "<th>Ações</th>";
        echo"</tr>";

    while ($row = $res->fetch_object()) {
       echo "<tr>";
       echo "<td>$row->id_marca</td>";
       echo "<td>$row->nome_marca</td>";
       echo "<td>
           <button onclick=\"location.href='?page=editar_marcas&id_marca=".$row->id_marca."';\" class='btn btn-primary'>Editar</button>     
           <button onclick=\"if(confirm('tem certeza que deseja excluir?')){location.href='?page=salvar_marcas&acao=excluir&id_marca=".$row->id_marca."';}else {false;}\" class='btn btn-danger'>Excluir</button> 
           </td>";
       echo"</tr>";
    }

    echo "</table>";
}else{
    echo "não encontrou resultado";
}

?>