<h1>Listar Modelos</h1>

<?php

$sql = 'SELECT * FROM modelo
INNER JOIN marca WHERE marca_id_marca=id_marca';
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd>0) {
    
    echo "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    echo "<table class='table table-striped table-hover'>";
    echo "<tr>";
       echo "<th>#</th>";
       echo "<th>Marca</th>";
       echo "<th>Modelo</th>";
       echo "<th>cor </th>";
       echo "<th>Ano</th>";
       echo "<th>Placa</th>";
       echo "<th>Ações</th>";
       echo"</tr>";
    

    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>$row->id_modelo</td>";
        echo "<td>$row->nome_marca</td>";
        echo "<td>$row->nome_modelo</td>";
        echo "<td>$row->cor_modelo</td>";
        echo "<td>$row->ano_modelo</td>";
        echo "<td>$row->placa_modelo</td>";
        echo "<td>
           <button onclick=\"location.href='?page=editar_modelos&id_modelo=".$row->id_modelo."';\" class='btn btn-primary'>Editar</button>     
           <button onclick=\"if(confirm('tem certeza que deseja excluir?')){location.href='?page=salvar_modelos&acao=excluir&id_modelo=".$row->id_modelo."';}else {false;}\" class='btn btn-danger'>Excluir</button> 
           </td>";
       
        echo"</tr>";

         
    }

    
}else{
    echo "não encontrou resultado";
}

?>