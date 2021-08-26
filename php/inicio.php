<?php
include_once("../crud/funcoes.php");
include_once("cabecalho.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/estilo-posts.css">
        <link rel="stylesheet" type="text/css" href="../css/cabecalho.css">
        <link rel="stylesheet" type="text/css" href="../css/modal.css">
        <link rel="stylesheet" type="text/css" href="../css/rodape.css">
        <link rel="stylesheet" type="text/css" href="../css/base.css">
        <link rel="stylesheet" type="text/css" href="../css/responsivo-inicio.css">
        <link rel="sortcut icon" type="image/x-icon" href="../css/icones/pc.png">
        <title>ProgramaMina</title>
    </head>
    <body class="fadeIn">
        <header class="header">
            <div class="principalLeft">
                <div class="principalLeft__conteudo">
                    <h1> Programa<span>mina</span></h1>
                    <form action="../crud/realiza_busca.php" method="POST">
                        <input type="text" class="principalLeft__conteudo--input" name="pesquisa" placeholder="Digite aqui sua pesquisa..." />
                        <input type="submit" class="principalLeft__conteudo--bt"name="pesquisar" value="">
                    </form>
                    <span class="principalLeft__conteudo--subtitulo"> Lugar de mulher é na tecnologia!</span>
                </div>
            </div>
            <div class="principalRight">
                <img class="principalRight__imagem" src="../css/imagens/cabecalho-2.png">
            </div>          
        </header>
        <main>
            <section class="secaoPrincipal">
                <div class="secaoPrincipal__post">
                    <h2>Compartilhe uma ideia, dica ou dúvida...</h2>
                        <form action="crud/logica_usuario.php" method="POST">
                            <label for="assunto">Assunto: </label><input id="assunto" type="text" required class="secaoPrincipal__post--assunto" name="assunto" placeholder=" Palavra chave" >
                            <textarea type="text" class="secaoPrincipal__post--post" name="post"placeholder=""></textarea>
                            <input type="submit" class="bt_padrao--grande" name="postar" value="Postar">
                        </form>
                </div>
                <?php include_once("lista_posts.php");?>
            </section>
        </main>    
        <footer class="rodape">
            <div class="rodape__mensagem" id="secao-contato">
                <form action="crud/logica_usuario.php" method="post"> 
                    <h2>Contate-nos:</h2>
                    <label for="email_remetente">Email: </label>
                    <input class="rodade__email" type="text" name="email_remetente" id="email_remetente" placeholder="    seuemail@gmail.com">
                    <label for="mensagem">Mensagem: </label>
                    <textarea class="rodape__mensagem" type="text" name="mensagem" id="mensagem" placeholder="   Insira sua mensagem"></textarea></br>
                    <input class="bt_padrao--grande" type="submit" id='enviar' name='enviar' value="Enviar">           
                </form>
            </div> <br> 
            <div class="lista_usuarias">
                <?php include_once("users.php");?>  
            </div>
            <p class="copyright"> &copy; Copyright ProgramaMina 2021</p>
        </footer>
        <script src="ajax.js"></script>
        <script src="arquivo.js"></script>
    </body>
</html>


