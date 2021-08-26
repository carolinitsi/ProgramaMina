<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" type="text/css" href="../css/reset.css">
        <link rel="stylesheet" type="text/css" href="../css/base.css">
        <link rel="stylesheet" type="text/css" href="../css/cabecalho.css">
        <link rel="stylesheet" type="text/css" href="../css/login.css">
        <link rel="sortcut icon" type="image/x-icon" href="css/icones/pc.png">
        <title>ProgramaMina | Login</title>
    </head>
    <body class="fadeIn">
        <section>
            <div class="principalLeft"> 
                <img class="principalLeft__imagem" src="../css/imagens/imagem_pg_login.png"> 
            </div>  
            <div class="principalRight">
                <form action="../crud/logica_usuario.php" method="post"> 
                    <label for="email" >Email: </label>
                    <input class="" type="text" name="email" id="email" placeholder="email">
                    <label for="senha" >Senha: </label>
                    <input class="" type="password" name="senha" id="senha" placeholder="senha">
                    <input type="submit" class="bt_padrao" id='login' name='login' value="Login">           
                </form> 
                <span> 
                <font font-family="kiona" color="red">
                <?php 
                    session_start();
                    if (isset($_SESSION['msg_login']))
                        {
                            echo $_SESSION['msg_login'];
                            unset($_SESSION['msg_login']);
                        }
                ?> 
                </font>
                </span> 
            </div>
        </section>
    </body>
</html>


  


