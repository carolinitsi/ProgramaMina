<?php 
    $query = "SELECT * FROM posts , usuarios where posts.id_usuario = usuarios.id_usuarios ORDER BY posts.id_posts desc";
    $usuarios = fazConsulta($query,'fetchAll');?>
  
    <div class="secao_lista--post">

        <?php foreach($usuarios as $usuario){?>
        
            <div class="boxpostIndividual">
                <div class="boxpostIndividual_flex"> 
                    <ul style="padding:0px;" class="boxpostIndividual__cabecalho">
                        <li style="list-style-type:none;" class="boxpostIndividual__cabecalho--foto">
                            <img src="../crud/imagens/<?php echo $usuario['imagem']; ?>" class="user" width="30px"/>
                        </li>
                        <li style="list-style-type:none;"><h3 class="boxpostIndividual__cabecalho--titulo"><?php echo $usuario['assunto']; ?></h3></li> 
                    </ul>
                   
                </div>   
                <?php
                 // Esse if testa se o usuário logado é autor do post, se sim, mostra bts editar e excluir 
                if($_SESSION['id'] == $usuario['id_usuarios']){
                    $_SESSION['id_post'] = $usuario['id_posts'];
                    include("bt_post.php");
                } 
                ?>  
                <p class="p_post"><?php echo $usuario['post']; ?></p>
                <form action="../crud/logica_usuario.php" method="post">
                    <input class="input_comentario" type="text" name="comentario" required value="" placeholder="   Adicione um comentario..." ><button class="bt-comentar" type="submit" name="comentar" value="<?php echo $usuario['id_posts'];?>"> </button>  
                </form>   
                <button class="bt_comentarios" id="bt_exibe_comentarios" name="" onclick="carregar_comentarios(<?php echo $usuario['id_posts']; ?>);" value="<?php echo $usuario['id_posts']; ?>">Ver comentários</button>
                <div class="box-comentarios" id="exibe_comentarios<?php echo $usuario['id_posts']; ?>"> </div>
                <button class="bt_esconde_comentarios" id="bt_esconde_comentarios<?php echo $usuario['id_posts']; ?>" onclick="fechar_comentarios(<?php echo $usuario['id_posts']; ?>);" value="<?php echo $usuario['id_posts']; ?>">Ver menos</button>              
            </div>
        <?php
        }
        ?> 
        
    </div>

<script src="../js/ajax.js"></script>

