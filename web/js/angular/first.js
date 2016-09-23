var issste = angular.module('issste', []);

issste.directive('validaForm', function validaForm () {
  return {
    restrict: 'A',
      scope:{
          formulario:"="
      },
     link: function(scope, element, attrs) {
			element.on("click", function () {
				$("div").removeClass("has-error");
				errorsType = scope.formulario.$error;
        if(errorsType != undefined){
  				angular.forEach(errorsType, function(errors){
  					errors.forEach(function(error){
	  					if(error.$invalid == true){
	  						var elem = document.getElementsByName(error.$name)[0].parentElement;
	  						elem.className += " has-error";
	  					}
  					})
  				});
        }else{
          setTimeout(function() {$("div").removeClass("has-error");}, 10);  
        }
			});
		}
  }
});

issste.config(['$httpProvider', function ($httpProvider) {
    $httpProvider.defaults.headers.post['X-CSRF-Token'] = $('meta[name="csrf-token"]').attr("content");
    $httpProvider.defaults.headers.common['Accept'] = 'application/json, text/javascript';
    $httpProvider.defaults.headers.common['Content-Type'] = 'application/json; charset=utf-8';
}]);