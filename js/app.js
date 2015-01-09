(function(){
	var app = angular.module('ccm', [ ]);

	app.controller('ccmController', function(){
		this.days = eventList;
	});

	var eventList = [
		{
			date: '2014-09-13',
			events: [
				{
					eventType: 'Jam Session',
					time: '12 - 2 PM',
					location: 'morrison-hall',
				},
				{
					eventType: 'Concert',
					time: '2:30 - 3:30 PM',
					location: 'kyakameena',
				}
			]
		},
		{
			date: '2014-09-20',
			events: [
				{
					eventType: 'Jam Session',
					time: '12 - 2 PM',
					location: 'morrison-hall',
				},
				{
					eventType: 'Concert',
					time: '2:30 - 3:30 PM',
					location: 'elmwood',
				}
			]
		},
		{
			date: '2014-09-27',
			events: [
				{
					eventType: 'Jam Session',
					time: '12 - 2 PM',
					location: 'morrison-hall',
				},
				{
					eventType: 'Concert',
					time: '2:30 - 3:30 PM',
					location: 'ashby',
				}
			]
		},
		{
			date: '2014-10-04',
			events: [
				{
					eventType: 'Jam Session',
					time: '12 - 2 PM',
					location: 'morrison-hall',
				},
				{
					eventType: 'Concert',
					time: '2:30 - 3:30 PM',
					location: 'chaparral-house',
				}
			]
		}
	]

})();