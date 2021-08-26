<?php 
    include_once("../crud/funcoes.php");
    $contador = 0;
    $id = $_POST["comentario"];

    $query = "SELECT * FROM comentarios, usuarios where usuarios.id_usuarios = comentarios.id_usuario and id_post = $id ORDER BY id_comentario desc";
    $usuarios = fazConsulta($query,'fetchAll');
    foreach($usuarios as $usuario){          
?>  
    <div class="box-comentario-individual" data-box  id="box-comentario-individual<?php echo($id); ?>">
    <p class="p-comentario"><img class="user" src="../crud/imagens/<?php echo $usuario['imagem']; ?>" class="" width="30px"/><b><?php echo $usuario['email']; ?></b></br>
    <?php echo $usuario['comentario']; ?></p>
    </div>
<?php
    $contador = $contador + 1;  
}

if($contador <= 0){
    echo ('<div class="box-comentario-individual" id="box-comentario-individual'.$id.'"> <p class="p-comentario"> Ainda não há comentários nesse post!</p></div>');
 }
?> 



