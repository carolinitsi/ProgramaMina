<?php
    include_once("../crud/funcoes.php");

    $query = "SELECT * FROM usuarios  ORDER BY email desc";
    $usuarios = fazConsulta($query,'fetchAll');?>

        <?php foreach($usuarios as $usuario){?>
            <img src="../crud/imagens/<?php echo $usuario['imagem']; ?>" class="user" width="40px"/>
        <?php
        }

?>