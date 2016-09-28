issste.controller('NombramientoCtrl', ["$scope","$http", function($scope, $http){
	if(window.nuevo){
		$scope.nuevo = window.nuevo;
	}
	if(window.action == "actualizar"){
		$scope.actualizar = true;
	}
	if(window.trabajadores){
		$scope.trabajadores = window.trabajadores;
	}
	if(window.tipoMovimiento){
		$scope.tipoMovimiento = window.tipoMovimiento;
	}

	if(window.plaza){
		$scope.plaza = window.plaza;
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
	  		toastr.success('Guardado correctamente');
	  	}
	  	if(window.action == 'actualizar'){
	  		window.location = window.base_url+'/'+window.controller;
	  	}else{
	  		$scope.nuevo = {}
	  		event.currentTarget.disabled = false;
	  		$scope.loading = false;
	  	}
	  })
	  .error(function (data, status, header, config) {
	  	toastr.success('Error en el servidor');
	  });
	}
}]);