function logout() {
    var resp = confirm('Realmente deseja sair do sistema?'); 
    if(resp){top.location.href='includes/login/logoff.php'}
}

function excluir(id, files) {
	var resp = confirm("Confirma a exclusão?");
	if(resp){top.location.href="includes/modal/"+files+"/remove.php?id="+id;}
}

$(document).ready(function(){
    $('.mask_cpf').mask('999.999.999-99');
    $(".mask_phone").mask("(99)99999-9999");
});
