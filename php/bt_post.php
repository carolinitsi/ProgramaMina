<div class="bts_post">
    <form action="pg_editar_post.php" method="post">
        <button class="bt_editar_post" type="submit" name="editar" value="<?php echo $usuario['id_posts']; ?>"></button>
    </form> 
    <form action="../crud/logica_usuario.php" method="post">
        <button class="bt_deletar_post" type="submit" name="deletar" value="<?php echo $usuario['id_posts']; ?>"onclick = "return confirma_excluir()">  </button>  
    </form> 
</div>

<script type="text/javascript">
    function confirma_excluir()
    {
        resp=confirm("Confirma Exclusão?")

        if (resp==true)
        {

            return true;
        }
        else
        {
            return false;

        }

    }

</script>