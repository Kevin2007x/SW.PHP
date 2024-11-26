<h1>Cadastrar Modelos</h1>

<form action="?page=salvar_modelos" method="post">
    <input type="hidden" name="acao" value="cadastrar">


   
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
                            echo "<option value='".$row->id_marca."'>".$row->nome_marca."</option>";
                        }
                    }else {
                        echo "<option> Não há marcas cadastradas</option>";
                    }

                    ?>
                </select>
                
            </div>
            <div class="container mb-3">
                <label class="mt-3">Modelo</label>
                <input type="text" name="nome_modelo" class="form-control" placeholder="digite nome do modelo">
            </div>
            <div class="container mb-3">
                <label class="mt-3">Cor</label>
                <input type="text" name="cor_modelo" class="form-control" placeholder="digite a cor do modelo">
            </div>
            <div class="container mb-3">
                <label class="mt-3">Ano</label>
                <input type="text" name="ano_modelo" class="form-control" placeholder="digite o ano do modelo">
            </div>
            <div class="container mb-3">
                <label class="mt-3">Placa</label>
                <input type="text" name="placa_modelo" class="form-control" placeholder="digite a placa do modelo">
            </div>

            <div class="container mb-3">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>

        
    </div>
</div>
</form>