<?PHP
session_start();

//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['email']) and !isset($_SESSION['password']) ) {
    //Destrói
    session_destroy();

    //Limpa
    session_unset();

    //Redireciona para a página de autenticação
    header('location:login.php');
}

include_once("includes/login/timeout.php");

?>