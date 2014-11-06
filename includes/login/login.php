<?PHP
    session_start();

    //Caso o usuário não esteja autenticado, limpa os dados e redireciona
    if (!isset($_SESSION['login']) and !isset($_SESSION['password'])) {

        //Destrói
        session_destroy();

        //Limpa
        unset ($_SESSION['login']);
        unset ($_SESSION['password']);

        include_once("includes/db/conection.php");

        // as variáveis login e senha recebem os dados digitados na página anterior
        $login = $_POST['login'];
        $password = $_POST['password'];

        //Comando SQL de verificação de autenticação
        $sql = "SELECT *
        FROM users
        WHERE login = '$login'
        AND password = '$password'";

        $resultado = mysql_query($sql,$conexao) or die ("Erro na seleção da tabela.");

        //Caso consiga logar cria a sessão
        if (mysql_num_rows ($resultado) > 0) {
            // session_start inicia a sessão
            session_start();

            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
        }
        //Caso contrário redireciona para a página de autenticação
        else {
            //Redireciona para a página de autenticação
            header('location:login.php');
        }
    }

     include_once("includes/login/timeout.php");
?>