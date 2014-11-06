<?php
  function receberPagina($pagina){
    $pagina = explode("/", $pagina);
    $pagina = end($pagina);
    $pagina = explode(".", $pagina);
    return $pagina[0];
  }
  $paginaURL = receberPagina($_SERVER['REQUEST_URI']);
  switch ($paginaURL) {
    case 'login': {$nav0 = true; break;}
    case 'index': {$nav1 = true; break;}
    case 'advogados': {$nav2 = true; break;}
    default: {$nav1 = true; break;}
  }
?>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" <?php if(isset($nav0)) {echo 'href="login.php"';} else {echo 'href="index.php"';} ?>>Lawyer Assist</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(isset($nav1)) {echo 'class="active"';} ?>><a href="index.php">Home</a></li>
        <li <?php if(isset($nav2)) {echo 'class="active"';} ?>><a href="advogados.php">Advogados</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administra&ccedil;&atilde;o <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Comarca</a></li>
            <li><a href="#">Vara</a></li>
            <li class="divider"></li>
            <li><a href="#">Usuários</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a onclick="logout();"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>