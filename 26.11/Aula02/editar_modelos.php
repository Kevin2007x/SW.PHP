<h1>Editar Modelos</h1>
<?php

$sql_1 = "SELECT * FROM modelo WHERE id_modelo=".$_REQUEST['id_modelo'];
$res_1= $conn->query($sql_1);
$row_1 = $res_1->fetch_object();

?>

<form action="?page=salvar_modelos" method="post">
<input type="hidden" name="acao" value="editar">
<input type="hidden" name="id_modelo" value="<?php echo $row_1->id_modelo; ?>">


<div class="card" style="width: 30rem;">

    <div>
        <div class="container mb-3">
            <label class="mt-3">Marca</label>
            <select name="marca_id_marca" class="form-control">
                    <option>Escolha</option>
                    <?php
                    $sql ="SELECT * FROM marca";
                    $res= $conn->query($sql);
                    if ($res->num_rows>0) {
                        while ($row= $res->fetch_object()) {
                            if ($row_1->marca_id_marca==$row->id_marca) {
                                echo "<option value='".$row->id_marca."'selected>".$row->nome_marca."</option>";
                            }
                        }
                    }else {
                        echo "<option> Não há marcas cadastradas</option>";
                    }

                    ?>
                </select>
            
        </div>
        <div class="container mb-3">
            <label class="mt-3">Modelo</label>
            <input type="text" name="nome_modelo" class="form-control" placeholder="digite nome do modelo" value="<?php echo $row_1->nome_modelo;?>">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Cor</label>
            <input type="text" name="cor_modelo" class="form-control" placeholder="digite a cor do modelo" value="<?php echo $row_1->cor_modelo;?>">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Ano</label>
            <input type="text" name="ano_modelo" class="form-control" placeholder="digite o ano do modelo" value="<?php echo $row_1->ano_modelo;?>">
        </div>
        <div class="container mb-3">
            <label class="mt-3">Placa</label>
            <input type="text" name="placa_modelo" class="form-control" placeholder="digite a placa do modelo" value="<?php echo $row_1->placa_modelo;?>">
        </div>

        <div class="container mb-3">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div> 
            
    </div>
</div>
</form>