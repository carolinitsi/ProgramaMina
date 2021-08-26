<head>
    <link rel="stylesheet" type="text/css" href="../css/cabecalho.css">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/editar-post.css">
    <link rel="stylesheet" type="text/css" href="../css/responsivo-editPost.css">
    <title>ProgramaMina</title>
</head>
<header class="header-pesquisa"> 
    <a href="inicio.php" > <img src="../css/icones/flecha-back.png"> </a>
</header>

<?php   
            include_once("../crud/funcoes.php");
            session_start();
            $id = $_POST['editar'];
        
            
            $query = "SELECT * FROM posts where id_posts = $id";
            $usuarios = fazConsulta($query,'fetchAll');
            foreach($usuarios as $usuario){          
        
            }
?> 

<body class="fadeIn">
    <section class="conteudoEditar">
        <form class="conteudoEditar_form" action="../crud/logica_usuario.php" method="POST">
                <legend class="esconde">Editar post</legend>
                <p class="esconde">ID:<input type="text" class="" name="id_post" value="<?php echo $usuario['id_posts']; ?>"></p>
                <label for="caixa_assunto">Assunto:<input type="text" class="conteudoEditar_assunto" id="caixa_assunto" name="assunto" value="<?php echo $usuario['assunto']; ?>"></p>
                <textarea type="text" class="conteudoEditar_post" rows='25' cols='100' name="post"  value=""> <?php echo $usuario['post']; ?> </textarea>
                <input type="submit" class="bt_padrao--grande" name="editar_post" value="Salvar">
        </form>
                <h4> <font color="red">  <?php 
                if (isset($_SESSION['msg']))
                    {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?> </font></h4>
        </div>
        </section>
</body>

