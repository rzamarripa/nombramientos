issste.controller('UniversalCtrl', ["$scope","$http", function($scope, $http){
	$scope.nuevo = {};
	if(window.nuevo){
		$scope.nuevo = window.nuevo;
		console.log($scope.nuevo);
	}
	if(window.action == "actualizar"){
		$scope.actualizar = true;
	}
	if(window.tiposMovimiento){
		$scope.tiposMovimiento = window.tiposMovimiento;
		console.log($scope.tiposMovimiento);
	}
	if(window.unidadAdministrativa){
		$scope.unidadAdministrativa = window.unidadAdministrativa;
	}

	if(window.adscripcionPresupuestal){
		$scope.adscripcionPresupuestal = window.adscripcionPresupuestal;
	}

	if(window.adscripcionFisica){
		$scope.adscripcionFisica = window.adscripcionFisica;
	}

	if(window.servicio){
		$scope.servicio = window.servicio;
	}

	if(window.turno){
		$scope.turno = window.turno;
	}

	if(window.horario){
		$scope.horario = window.horario;
	}

	if(window.trabajador){
		$scope.trabajador = window.trabajador;
	}
/*
//// html
<ui-select-choices refresh="funcAsync($select.search)" refresh-delay repeat="t.id as t in trabajador | filter: $select.search">
    <span>{{t.nombre}}</span>
</ui-select-choices>
////
	$scope.funcAsync = function(search){
		data = $.param({
	      search: search
	  });
	  config = {
	    headers : {
	        'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
	    }
	  }
	  $http.post(window.base_url+'/'+window.controller+'/search', data, config)
	  .success(function (data, status, headers, config) {
	  	$scope.trabajador = data;
	  })
	  .error(function (data, status, header, config) {
	  	toastr.success('Error en el servidor');
	  });
	}
*/
	$scope.guardar = function(nuevo, form, event){
		if(form.$invalid){
			toastr.warning('Completa correctamente los campos marcados');
			return
		}
		nuevo.estatus = 1;
		data = $.param({
	      attributes: nuevo
	  });
	  event.currentTarget.disabled = true;
	  $scope.loading = true;
	  config = {
	    headers : {
	        'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
	    }
	  }

	  $http.post(window.base_url+'/'+window.controller+'/'+window.action, data, config)
	  .success(function (data, status, headers, config) {
	  	if(data == 1){
	  		$scope.nuevo = {};
	  		toastr.success('Guardado correctamente');
	  	}else{
	  		event.currentTarget.disabled = false;
	  		$scope.loading = false;
	  		message = '<ul>';
	  		angular.forEach(data, function(errors){
	  			angular.forEach(errors, function(error){
	  				message = message + '<li>'+ error +'</li>';
	  			});
	  		});
	  		message = message + '</ul>';
	  		toastr.warning(message);
	  		return
	  	}
	  	if(window.action == 'actualizar'){
	  		window.location = window.base_url+'/'+window.controller;
	  	}else{
	  		$scope.errors = data;
	  		event.currentTarget.disabled = false;
	  		$scope.loading = false;
	  	}
	  })
	  .error(function (data, status, header, config) {
	  	event.currentTarget.disabled = false;
	  	$scope.loading = false;
	  	toastr.success('Error en el servidor');
	  });
	}
}]);