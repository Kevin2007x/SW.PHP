<?php

switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $sql = "INSERT INTO modelo (
        marca_id_marca,
        nome_modelo,
        cor_modelo,
        ano_modelo,
        placa_modelo)  
        VALUES (
        ".$_POST['marca_id_marca'].",
        '".$_POST['nome_modelo']."',
        '".$_POST['cor_modelo']."',
        '".$_POST['ano_modelo']."',
        '".$_POST['placa_modelo']."'
        )";
        $res = $conn->query($sql);

            if ($res==true){

             echo "<script>alert ('cadastrado com sucesso');</script>";
             echo "<script>location.href='?page=listar_modelos';</script>";
            }else{
                echo "<script>alert ('cadastro não realizado');</script>";
                echo "<script>location.href='?page=listar_marcas';</script>";
            }

        break;

        case 'editar':
            $sql = "UPDATE modelo SET 
            marca_id_marca='".$_POST['marca_id_marca']."',
            nome_modelo='".$_POST['nome_modelo']."',
            cor_modelo='".$_POST['cor_modelo']."',
            ano_modelo='".$_POST['ano_modelo']."',
            placa_modelo='".$_POST['placa_modelo']."'
            
            WHERE
            id_modelo=".$_POST['id_modelo'];
            $res = $conn->query($sql);
    
                if ($res==true){
    
                 echo "<script>alert ('Alterado com sucesso');</script>";
                 echo "<script>location.href='?page=listar_modelos';</script>";
                }else{
                    echo "<script>alert ('alteração não realizada');</script>";
                    echo "<script>location.href='?page=listar_modelos';</script>";
                }
    
            break;
    
        case 'excluir':
                $sql = "DELETE FROM modelo 
                WHERE
                id_modelo=".$_REQUEST['id_modelo'];
                $res = $conn->query($sql);
        
                    if ($res==true){
        
                     echo "<script>alert ('Deseja excluir?');</script>";
                     echo "<script>location.href='?page=listar_modelos';</script>";
                    }else{
                        echo "<script>alert ('item não excluído');</script>";
                        echo "<script>location.href='?page=listar_modelos';</script>";
                    }
        
                break;
    
    default:
        # code...
        break;
}


?>