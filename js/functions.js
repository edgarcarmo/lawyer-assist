var app = angular.module("myApp", []);

function adminListResult($scope, $http, $filter){

	$scope.itens = [];
	$scope.filterItens = [];

	$scope.listItens = function(files){
		$scope.url = "includes/modal/"+files+"/list.php";
		$http.post($scope.url).success(function(data, status){
			$scope.itens = data;
		}).error(function(data, status){

		});
	};

	$scope.excluir = function(id, form, files){
		if(id != null){
			var resp = confirm("Confirma a exclusão?");
			if(resp){
				$scope.url = "includes/modal/"+files+"/remove.php?id="+id;
				$http.post($scope.url).success(function(data, status){
					$scope.listItens(files);
				}).error(function(data, status){

				});
			}
		} else if(form != null) {
			var count = 0;
			$('.checkbox_item').each(function() { //loop through each checkbox
                if(this.checked == true){
                	count = count + 1;
                };
            });
            if(count != 0){
				var resp = confirm("Confirma a exclusão?");
				if(resp){
					$("#"+form).attr('action', 'includes/modal/'+files+'/remove.php');
					$("#"+form).attr('method', 'post');
					$("#"+form).submit();
				}
            } else {
            	alert("E necessario selecionar pelo menos uma item!");
            }
		}
	};

	$scope.editarComarcas = function (id, name) {
		 $("#lawyer_edit #id").val(id);
         $("#lawyer_edit #name").val(name);
	}

	$scope.editarUsuarios = function (id, name, email, isadmin, password) {
		 $("#lawyer_edit #id").val(id);
         $("#lawyer_edit #name").val(name);
         $("#lawyer_edit #email").val(email);
         $("#lawyer_edit #password").val(password);
         if(isadmin == 1){
         	$("#lawyer_edit #isadmin").attr('checked', 'checked');
         } else {
         	$("#lawyer_edit #isadmin").removeAttr('checked');
         }
	}

	$scope.currentPage = 0;
	$scope.pageSize = 5;

	$scope.numberOfPages = function(){
		return Math.ceil($scope.filterItens.length/$scope.pageSize);
	}

	$scope.filterPage = function(){
		$scope.currentPage = 0;
	};

	$scope.previous = function(){
		return $scope.currentPage==0;
	};

	$scope.next = function(type){
		return $scope.currentPage >= $scope.filterItens.length/$scope.pageSize-1;
	};
}

app.filter("startForm", function(){
	return function(input, start){
		start=+start;
		return input.slice(start);
	}
});

function logout() {
    var resp = confirm('Realmente deseja sair do sistema?'); 
    if(resp){top.location.href='includes/login/logoff.php'}
}

$(document).ready(function(){
    $('.mask_cpf').mask('999.999.999-99');
    $(".mask_phone").mask("(99)99999-9999");
});
