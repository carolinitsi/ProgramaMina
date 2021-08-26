function carregar_comentarios(comentario){
    var page = "comentarios.php";
    var i = comentario;
    var div = "#exibe_comentarios"+i;
    var bt_vermenos = "#bt_esconde_comentarios"+i;
    var paragrafos = ".p-comentario";

    $(`${div}`).addClass(' show');
    $(`${bt_vermenos}`).addClass(' mostra');




    $.ajax({
        type:'POST',
        dataType:'html',
        url: page,
        beforeSend: function () {
            $(`${div}`).html("carregando... ");
        },
        data: {comentario:comentario},
        success: function(msg){ 
            $(`${div}`).html(msg);
        }
    });

}

function fechar_comentarios(comentario){
    var i = comentario;
    var div = "#exibe_comentarios"+i;
    var bt_vermenos = "#bt_esconde_comentarios"+i;
    var div_comentario = ".box-comentario-individual"+i;
    var paragrafos = ".p-comentario";
    $(`${div}`).removeClass(' show');
    $(`${div}`).addClass(' esconde');
    $(`${bt_vermenos}`).removeClass(' mostra');
}
