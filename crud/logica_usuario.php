<?php

ini_set('display_errors', 0 );
error_reporting(0);

 include_once("funcoes.php");
 session_start();

#EDITAR PERFIL EMAIL

 if(isset($_POST['editar_perfil'])){
    $id     = $_SESSION['id'];
    $email  = $_POST['email'];
    $query = " UPDATE usuarios SET email = ? WHERE id_usuarios = $id ";
    $array = array($email);
    $usuario=fazConsulta($query,'query',$array);
    if($usuario)
    {

        //ENVIA EMAIL.
        $email_destinatario = $email;
        $email_remetente    = "programamina@gmail.com";
        $mensagem = "Email alterado com sucesso!";
        $assunto = "ProgramaMina";

        enviacontato($email_destinatario, $email_remetente, $mensagem, $assunto);
        $_SESSION['email'] = $email;
        $_SESSION['msg']= "Email alterado com sucesso!";
        header('location:editar-perfil.php');
    }
    else
    {
        $_SESSION['msg']= "Ops! Não foi possível alterar o email...";
        header('location:editar-perfil.php');
    }

}
#EDITAR POST

if(isset($_POST['editar_post'])){
    $id       = $_SESSION['id'];
    $id_post  = $_POST['id_post'];
    $assunto  = $_POST['assunto'];
    $post     = $_POST['post'];
    $data     = date("d/m/Y h:i:s");
  
    $query    = "UPDATE posts SET  post = ?, assunto = ? WHERE id_posts = $id_post ";
    $array    = array($post,$assunto);
    $usuario  = fazConsulta($query,'query',$array);
    if($usuario)
    {
        $_SESSION['msg_edicao--post']= "Edição salva!";
        header('location:../edicao_concluida.html');
    }
    else
    {
        $_SESSION['msg']= "Ops, não foi possível editar o seu post!";
        header('location:../php/pg_editar_post.php'); 
    }
}

#POSTAR

 if(isset($_POST['postar'])){
    $assunto    = $_POST['assunto'];
    $post       = $_POST['post'];
    $id_usuario = $_SESSION['id'];
    $data       = date("d/m/Y h:i");
    
    $query = "insert into posts (id_usuario, post,assunto,data_post) values (?,?,?,?)";
    $array = array($id_usuario,$post, $assunto,$data);
    $usuario=fazConsulta($query,'query',$array);
    if($usuario)
    {
        header('location:../php/inicio.php');
    }
    else
    {
        header('location:../php/inicio.php');
        echo("Erro ao inserir");
        
    }
}

#COMENTAR


if(isset($_POST['comentar'])){
   
    $id_usuario    = $_SESSION['id'];
    $id_post       = $_POST['comentar'];
    $comentario    = $_POST['comentario'];
    $data       = date("d/m/Y h:i:s");
    echo( $id_post);
    
    $query = "insert into comentarios (id_usuario,id_post,comentario,data_comentario) values (?,?,?,?)";
    $array = array($id_usuario, $id_post, $comentario,$data);
    $usuario=fazConsulta($query,'query',$array);
    if($usuario)
    {
        header('location:../php/inicio.php');
    }
    else
    {
        echo("Erro ao inserir");
        
    }
}

#CADASTRAR

if(isset($_REQUEST['cadastrar'])){
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];    
    $senhaEncriptada = base64_encode($senha);
    $teste = $_REQUEST['file'];
    $file  = upload($teste);
    
    $query = "insert into usuarios (email, senha,imagem) values (?,?,?)";
    $array = array($email, $senhaEncriptada,$file);
    $usuario=fazConsulta($query,'query',$array);
    if($usuario)
    {
        header('location:../cadastro_concluido.html');

    }
    else
    {
        $_SESSION['msg']="Erro ao inserir";
    }
}

#lOGIN

 if (isset($_POST['login']))
 {
    $email = addslashes($_REQUEST['email']);//impede que o sql seja alterado
    $senha = $_REQUEST['senha'];
    $senhaEncriptada = base64_encode($senha);
    $query = "select * from usuarios where email=? and senha=?";
    $array = array($email, $senhaEncriptada);
    $usuario = fazConsulta($query,'fetch',$array);
    if($usuario){
        $_SESSION['logado'] = 'logado';
        $_SESSION['id'] = $usuario['id_usuarios'];
        $_SESSION['email'] = $usuario['email'];
        $data=date("d/m/Y h:i:s");
        $mensagem.="Olá,você acaba de logar em ProgamaMina! Login foi realizado em ".$data;
		$assunto="checkin Sistema";
		$retorno= enviaEmail($email,$mensagem,$assunto);	
        header('location:../php/inicio.php');
    }
    else{
        $_SESSION['msg_login'] = "Ops! Usuário ou Senha Inválidos...";
        header('location: ../php/login.php');
    }
}

#SAIR
if(isset($_REQUEST['sair'])){
    session_destroy();
    header('location:../index.html');
}

#ENVIAR MENSAGEM

if (isset($_POST['enviar'])) 
{
    //AQUI DEFINI O ADM DO "SITE", PARAR RECEBE O EMAIL.
    $email_destinatario = "caroline.oliveira1800@gmail.com";
    $email_remetente    = $_POST['email_remetente'];
    $mensagem = $_POST['mensagem'];
    $assunto = ['Contato'];

    enviacontato($email_destinatario, $email_remetente, $mensagem, $assunto);
    echo "<script> document.getElementById('secao-contato').focus();</script>";
    header('location:../php/inicio.php');

}


#ALTERAR SENHA

if (isset($_POST['alterar']))
{
   $nova_senha =  base64_encode($_REQUEST['nova_senha']);
   $senha_atual = base64_encode($_REQUEST['senha_atual']);
   $email       = $_SESSION['email'];

  

   $query = "select * from  usuarios where email = ?";
   $array = array($email);
   $usuario=fazConsulta($query,'query',$array);
   foreach($usuario as $usuario){          
        
       if($usuario['senha'] === $senha_atual){
           $query = " UPDATE usuarios SET senha = '$nova_senha' WHERE email = ?";
           $array = array($email);
           $usuario=fazConsulta($query,'query',$array);
           $_SESSION['msg']= "Senha alterada com sucesso!";
           header('location:editar-perfil.php');
       }   
       else{
           $_SESSION['msg']= "Senha atual não confere!";
           header('location:editar-perfil.php');
       }                                                 
   }
}

#DELETAR

if(isset($_REQUEST['deletar'])){

    $id = $_REQUEST['deletar'];
    echo($id);
    $array=array($id);
    $query = "delete from posts where id_posts = ?";
    $usuario=fazConsulta($query,'query', $array);
    if($usuario)
        {
            $_SESSION['msg']="Produto Deletado com Sucesso";
            header('location:../php/inicio.php');

        }
        else
        {
            $_SESSION['msg']="Erro ao deletar";
            header('location: ../php/inicio.php');
        }
    
}
?>