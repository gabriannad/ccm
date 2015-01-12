(function(){
	var app = angular.module('ccm', [ ]);

	app.controller('eventsController', function(){
		this.eventList = eventList;
		this.venueInfo = venueInfo;
	});

	var eventList = [
		{
			"date": "2014-09-13",
			"events": [
				{
					"eventType": "Jam Session",
					"time": "12 - 2 PM",
					"location": "morrison-hall"
				},
				{
					"eventType": "Concert",
					"time": "2:30 - 3:30 PM",
					"location": "kyakameena"
				}
			]
		},
		{
			"date": "2014-09-20",
			"events": [
				{
					"eventType": "Jam Session",
					"time": "12 - 2 PM",
					"location": "morrison-hall"
				},
				{
					"eventType": "Concert",
					"time": "2:30 - 3:30 PM",
					"location": "elmwood"
				}
			]
		},
		{
			"date": "2014-09-27",
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
		},
		{
			"date": "2014-10-04",
			"events": [
				{
					"eventType": "Jam Session",
					"time": "12 - 2 PM",
					"location": "morrison-hall"
				},
				{
					"eventType": "Concert",
					"time": "2:30 - 3:30 PM",
					"location": "chaparral-house"
				}
			]
		}
	];

	var venueInfo = {
		"aseb": {"name": "Alzheimer's Services of the East Bay", "address": "2330 Channing Ave"},
		"ashby": {"name": "Ashby Care Center", "address": "2270 Ashby Ave" },
		"berkeley-pines": {"name": "Berkeley Pines", "address": "2223 Ashby Ave"},
		"berkshire": {"name": "Berkshire Convalescent", "address": "2235 Sacramento St"},
		"chaparral-house": {"name": "Chaparral House", "address": "1309 Allston Way"},
		"redwood-gardens": {"name": "Redwood Gardens", "address": "2951 Derby St"},
		"elmwood": {"name": "Elmwood Convalescent Hospital", "address": "2829 Shattuck Ave"},
		"kyakameena": {"name": "Kyakameena Skilled Nursing Facility", "address": "2131 Carleton St"},
		"morrison-hall": {"name": "Morrison Hall Lounge", "address": "(bottom floor)"}
	};

})();