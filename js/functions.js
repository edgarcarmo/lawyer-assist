function logout() {
    var resp = confirm('Realmente deseja sair do sistema?'); 
    if(resp){top.location.href='includes/login/logoff.php'}
}
