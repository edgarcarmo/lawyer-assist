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
    case 'comarcas': {$nav9 = true; break;}
    case 'varas': {$nav9 = true; break;}
    case 'usuarios': {$nav9 = true; break;}
    default: {$nav1 = true; break;}
  }
?>