(function(){
	var app = angular.module('ccm', [ ]);

	app.controller('eventsController', ['$http', function($http){
		var events = this;
		events.eventList = [];

		$http.get('events.json').success(function(data){
			events.eventList = data;
		}).error(function(data){
			events.eventList = [{
		"date": "1994-03-02",
		"events": [
			{
				"eventType": "Jam Session",
				"time": "12 - 2 PM",
				"location": "morrison-hall"
			},
			{
				"eventType": "Concert",
				"time": "2:30 - 3:30 PM",
				"location": "ashby"
			}
		]
	}]
		});
	}]);

})();