<h1>Salvar Marcas</h1>
<?php



switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $marca = ($_POST['nome_marca']);
        $sql = "INSERT INTO marca (nome_marca)  VALUES ('{$marca}')";
        $res = $conn->query($sql);

            if ($res==true){

             echo "<script>alert ('cadastrada com sucesso');</script>";
             echo "<script>location.href='?page=listar_marcas';</script>";
            }else{
                echo "<script>alert ('cadastro não realizado');</script>";
                echo "<script>location.href='?page=listar_marcas';</script>";
            }

        break;

        case 'editar':
            $sql = "UPDATE marca SET 
            nome_marca='".$_POST['marca']."'
            WHERE
            id_marca=".$_POST["id_marca"];
            $res = $conn->query($sql);
    
                if ($res==true){
    
                 echo "<script>alert ('Alterado com sucesso');</script>";
                 echo "<script>location.href='?page=listar_marcas';</script>";
                }else{
                    echo "<script>alert ('alteração não realizada');</script>";
                    echo "<script>location.href='?page=listar_marcas';</script>";
                }
    
            break;
    
        case 'excluir':
                $sql = "DELETE FROM marca  
                WHERE
                id_marca=".$_REQUEST['id_marca'];
                $res = $conn->query($sql);
        
                    if ($res==true){
        
                     echo "<script>alert ('Deseja excluir?');</script>";
                     echo "<script>location.href='?page=listar_marcas';</script>";
                    }else{
                        echo "<script>alert ('item não excluído');</script>";
                        echo "<script>location.href='?page=listar_marcas';</script>";
                    }
        
                break;
    
    default:
        # code...
        break;
}


?>