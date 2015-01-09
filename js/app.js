(function(){
	var app = angular.module('ccm', [ ]);

	app.controller('eventsController', ['$http', function($http){
		var events = this;
		events.eventList = [];

		$http.get('/events.json').success(function(data){
			events.eventList = data;
		});
	}]);

})();