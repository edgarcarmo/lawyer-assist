<?PHP
session_start();
 
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['login']) and !isset($_SESSION['password']) ) {
    //Destrói
    session_destroy();

    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['password']);

    //Redireciona para a página de autenticação
    header('location:login.php');
}
?>