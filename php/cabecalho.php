<?php 
    session_start();
    if(!$_SESSION['logado'])
    {
	header('location:index.html');
    }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/modal.css">
        <div class="bts_cabecalho">
            <form action="../crud/logica_usuario.php" method="POST" > <button type="submit" class="bt_sair" id="sair" name="sair" value=""></button></form>               
            <form action="../crud/editar-perfil.php" method="POST" > <button  type="submit" class="bt_editar_perfil" id="" name="editar" value="editar" alt="Editar"></button></form>               
        </div>
