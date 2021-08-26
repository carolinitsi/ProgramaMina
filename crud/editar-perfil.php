<head>
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/cabecalho.css">
    <link rel="stylesheet" type="text/css" href="../css/editar-perfil.css">
    <link rel="stylesheet" type="text/css" href="../css/responsivo-editPerfil.css">
    <title>ProgramaMina | Editar Perfil</title>
</head>
<header class="header-pesquisa"> 
    <a href="../php/inicio.php" > <img src="../css/icones/flecha-back.png"> </a>
</header>
<?php 
    include_once("funcoes.php");
    session_start();
    if(!$_SESSION['logado'])
    {
    header('location:index.html');
    }

    $id = $_SESSION['id'];
                $query = "SELECT * FROM  usuarios where id_usuarios = $id";
                $usuarios = fazConsulta($query,'fetchAll');
                foreach($usuarios as $usuario){          
?>  
                    <main>
                        <h1 class="esconde">Editar perfil</h1>             
                            <img src="imagens/<?php echo $usuario['imagem']; ?>" class="imagem-perfil" width="100px"/>
                        <div class="box-editar-usuario">
                            <section class="box-editar-email">
                                <form action="logica_usuario.php" method="post">
                                    <fieldset>  
                                        <legend>Alterar email:</legend>
                                        <label for="email">Email:</label> <input type="text" id="email" class="box-editar-email" name="email" value="" placeholder="<?php echo $usuario['email']; ?>" >
                                        <button class="bt_secundario" type="submit" name="editar_perfil" value="<?php echo $usuario['id_usuarios'];?>"> Editar email</button>
                                    </fieldset> 
                                </form> 
                            </section>
                            <section class="box-editar-senha">
                                <form action="logica_usuario.php" method="post"> 
                                    <fieldset> 
                                        <legend>Alterar senha:</legend>
                                        <label for="senha_atual">Senha atual: </label>
                                        <input type="text" class="caixa_assunto" name="senha_atual" id="senha_atual" placeholder=" Senha atual">
                                        <label for="nova_senha">Nova senha: </label>
                                        <input  type="text" class="caixa_assunto" name="nova_senha" id="nova_senha" placeholder=" Nova senha"><br>
                                        <input type="submit" id='alterar'  class="bt_secundario" name='alterar' value="Alterar">           
                                    </fieldset> 
                                </form>
                                <span> 
                                    <font font-family="kiona" color="red">
                                    <?php 
                                        if (isset($_SESSION['msg']))
                                            {
                                                echo $_SESSION['msg'];
                                                unset($_SESSION['msg']);
                                            }
                                    ?> 
                                    </font>
                                </span>
                    
                            </section>
                        </div>
                    </main>                                                         
                <?php
                }                   
                ?>
           
