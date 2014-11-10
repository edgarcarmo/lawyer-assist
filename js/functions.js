function logout() {
    var resp = confirm('Realmente deseja sair do sistema?'); 
    if(resp){top.location.href='includes/login/logoff.php'}
}

function createMask() {
    $("#decjud").mask("9999/9999");
};


function excluir(id, files) {
	var resp = confirm("Confirma a exclusão?");
	if(resp){top.location.href="includes/modal/"+files+"/remove.php?id="+id;}
}