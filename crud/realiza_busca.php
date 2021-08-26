<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/estilo-posts.css">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/cabecalho.css">
    <link rel="stylesheet" type="text/css" href="../css/rodape.css">
    <title>ProgramaMina</title>
</head>
<body class="fadeIn">
    <header class="header-pesquisa" > 
    <a href="../php/inicio.php"><img src="../css/icones/flecha-back.png"> </a>
    </header>
    <h2 class="busca__titulo">Aqui estão os resultados que correspondem a sua pesquisa:</h2>
    <section class="secao_lista--post">
        <?php 
            include_once("funcoes.php");
            session_start();
            #PESQUISAR
            if(isset($_POST['pesquisar'])){
                $pesquisa  = $_POST['pesquisa'];
                $query = "SELECT * FROM posts , usuarios where posts.id_usuario = usuarios.id_usuarios and posts.assunto like '%$pesquisa%'";
                $usuarios = fazConsulta($query,'fetchAll');
                foreach($usuarios as $usuario){          
                ?>  
                    <div class="boxpostIndividual">     
                        <div class="boxpostIndividual_flex"> 
                            <ul style="padding:0px;" class="boxpostIndividual__cabecalho">
                                <li style="list-style-type:none;" class="boxpostIndividual__cabecalho--foto">
                                    <img src="imagens/<?php echo $usuario['imagem']; ?>" class="user" width="30px"/>
                                </li>
                                <li style="list-style-type:none;"><h3 class="boxpostIndividual__cabecalho--titulo"><?php echo $usuario['assunto']; ?></h3></li> 
                            </ul>
                            <span style="list-style-type:none;" class="boxpostIndividual__cabecalho--data">
                                <?php echo $usuario['data_post']; ?>
                            </span>
                        </div>   
        
                        <p class="p_post"><?php echo $usuario['post']; ?></p>
                        <form action="crud/logica_usuario.php" method="post">
                            <input class="input_comentario" type="text" name="comentario" required value="" placeholder="   Adicione um comentario..." ><button class="bt-comentar" type="submit" name="comentar" value="<?php echo $usuario['id_posts'];?>"> </button>  
                        </form>   
                        <button class="bt_comentarios" id="bt_exibe_comentarios" name="" onclick="carregar_comentarios(<?php echo $usuario['id_posts']; ?>);" value="<?php echo $usuario['id_posts']; ?>">Ver comentários</button>
                        <div class="box-comentarios" id="exibe_comentarios<?php echo $usuario['id_posts']; ?>"> </div>
                        <button class="bt_esconde_comentarios" name="" onclick="fechar_comentarios(<?php echo $usuario['id_posts']; ?>);" value="<?php echo $usuario['id_posts']; ?>">Ver menos</button>
                    </div>
                                                            
                <?php
            }
                
    }
    ?> 
    </section> 
</body>
<script src="../ajax.js"></script>
