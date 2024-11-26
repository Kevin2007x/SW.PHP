<h1>Editar Marcas</h1>

<?php

$sql = "SELECT * FROM marca WHERE id_marca=".$_REQUEST['id_marca'];
$res= $conn->query($sql);
$row = $res->fetch_object();

?>

<form action="?page=salvar_marcas" method="post">
<input type="hidden" name="acao" value="editar">
<input type="hidden" name="id_marca" value="<?php echo $row->id_marca;?>">

<div class="card" style="width: 30rem;">

    <div>
        <div class="container mb-3">
            <label class="mt-3">Marca</label>
            <input type="text" name="marca" value="<?php echo $row->nome_marca;?>" class="form-control" placeholder="digite nome da marca">
        </div>
        <div class="container mb-3">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div> 
            
    </div>
</div>

</form>