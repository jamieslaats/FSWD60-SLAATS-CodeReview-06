class hotspot{
	image: "";
	name: string;
	street: string;
	city: string;
	postCode: string;
	telephone: number;
	constructor(image,name,street,city,postCode,telephone){
		this.image = image;
		this.name = name;
		this.street = street;
		this.city = city;
		this.postCode = postCode;
		this.telephone = telephone;
	}
}

class sights extends hotspot {
	metro: string;
	openTimes: string;
	entryCost: string;
	constructor(img,name,street,city,postCode,telephone,metro,openTimes,entryCost) {
		super(img,name,street,city,postCode,telephone);
		this.metro = metro;
		this.openTimes = openTimes;
		this.entryCost = entryCost;
	}
	render () {
        return document.querySelector("#sights").innerHTML += 
        "<div class='col-lg-3 col-md-3 col-sd-12'><div class='card'><img class='card-img-top'src='" + this.image + "'alt='Card image cap'><div class='card-body'><h3 class='card-title'>" + this.name + "</h3>\n <p class='card-text'><span>Address:</span> " + this.street + ", " + this.city + ", " + this.postCode +  "</p><p class='card-text'><span>Tel:</span> " + this.telephone + "</p><p class='card-text'><span>Metro:</span> " + this.metro + "</p><p class='card-text'><span>Opening Times:</span> " + this.openTimes + "</p><p class='card-text'><span>Entry Cost:</span> " + this.entryCost + "</p></div></div></div"
        };
};

class eatery extends hotspot {
	type: string;
	value: string;
	webAddress: string;
	constructor(img,name,street,city,postCode, telephone,type,value,webAddress){
		super(img,name,street,city,postCode,telephone);
		this.type = type;
		this.value = value;
		this.webAddress = webAddress;
	}
	render () {
        return document.querySelector("#eatery").innerHTML += 
        "<div class='col-lg-3 col-md-3 col-sd-12'><div class='card'><img class='card-img-top'src='" + this.image + "'alt='Card image cap'><div class='card-body'><h3 class='card-title'>" + this.name + "</h3>\n <p class='card-text'>Address: " + this.street + ", " + this.city + ", " + this.postCode +  "</p><p class='card-text'>Tel: " + this.telephone + "</p><p class='card-text'>Style: " + this.type + "</p><p class='card-text'>Value: " + this.value + "</p><p class='card-text'>Web: " + this.webAddress + "</p></div></div></div"
        };
};

class events extends hotspot {
	eventPlace: string;
	eventDate: string;
	eventTime: string;
	ticketPrice: number;
	constructor(img,name,street,city,postCode, telephone,eventPlace,eventDate,eventTime,ticketPrice){
		super(img,name,street,city,postCode,telephone);
		this.eventPlace = eventPlace;
		this.eventDate = eventDate;
		this.eventTime = eventTime;
		this.ticketPrice = ticketPrice;
	}
	render () {
        return document.querySelector("#events").innerHTML += 
        "<div class='col-lg-3 col-md-3 col-sd-12'><div class='card'><img class='card-img-top'src='" + this.image + "'alt='Card image cap'><div class='card-body'><h3 class='card-title'>" + this.name + "</h3>\n <p class='card-text'>Address: " + this.street + ", " + this.city + ", " + this.postCode +  "</p><p class='card-text'>Tel: " + this.telephone + "</p><p class='card-text'>Location: " + this.eventPlace + "</p><p class='card-text'>Date: " + this.eventDate + "</p><p class='card-text'>Showings: " + this.eventTime + "</p><p class='card-text'>Price: " + this.ticketPrice + "</p></div></div></div"
        };
}


var locationDetails = []; //Store all objects into this location. 

//Details on Location Sightseeing
locationDetails.push(new sights("./IMG/0.jpg", "The Hermitage (The Winter Palace", "2, Dvortsovaya Ploschad", "St. Petersburg", "190000", "+7 (812) 571-3420", "Admiralteyskaya","Daily 10:30am to 6pm. Last admission is at 5:30pm. Wednesday and Friday, till 9pm. Last admission is at 8:30pm", "600 Rbl"));
locationDetails.push(new sights("./IMG/1.jpg", "The Mariinsky Theatre", "1, Teatralnaya Ploshchad", "St. Petersburg", "190000", "+7 (812) 326-4141", "Admiralteyskaya, Sadovaya / Sennaya Ploshchad / Spasskaya","Daily 5pm to 12pm", "50 Rbl"));
locationDetails.push(new sights("./IMG/st-isaacs-cathedral-in-st-petersburg.jpg", "St. Isaac's Cathedral & Colonnade", "4, Isaakievskaya Square", "St. Petersburg", "190000", "+7 (812) 315-9732", "Admiralteyskaya","Daily 10.30 am to 6 pm. Last admission is at 5.30 pm. Evening openings of the Cathedral in the summer only (May 1 - September 30): 6 pm to 10.30 pm. Evening openings of the Colonnade in the summer only (May 1 - October 31): 6 pm to 10.30 pm. Night openings of the Colonnade in the White Nights only (June 1 - August 20): 10.30 pm to 4.30 am.", "Adult: 250 Rbl, Child: 50 Rbl"));
locationDetails.push(new sights("./IMG/peterpaulfortress.jpg", "The Peter & Paul Fortress", "Zayachy (Hare) Island", "St. Petersburg", "190000", "+7 (812) 326-4141", "Gorkovskaya / Sportivnaya","The grounds of the fortress at open 6am to 10pm. All exhibitions are open daily, except Wednesdays, 10 am to 6 pm. Last admission is at 5 pm. Tuesdays, 10 am to 5 pm. Last admission is at 4 pm.", "350 Rbl"));



//Details on Location Eateries
locationDetails.push(new eatery("./IMG/2.jpg","TSAR","12, Sadovaya Street", "St. Petersburg", "190000", "+7 (812) 640-1616", "European, Russian, Vegetarian Friendly", "€€€€", "http://ginza.ru/spb/restaurant/tsar?utm_source=tripadvisor&utm_medium=referral"));
locationDetails.push(new eatery("./IMG/3.jpg","Palkin","47, Nevskiy Avenue", "St. Petersburg", "191025","+7 (812) 703-5371","European, Russian, Vegetarian Friendly","€€€€","www.palkin.ru"));
locationDetails.push(new eatery("./IMG/flakerscafe.jpg","Flakers Cafe","10, Naberezhnaya reki Karpovki", "St. Petersburg", "197022","+7 (921) 644-0664","Cafe, European, Vegetarian Friendly","€","www.facebook.com/flakerscafe/?"));
locationDetails.push(new eatery("./IMG/cafebarbonch.jpg","Cafe Bar Bonch","16, Bolshaya Morskaya St.", "St. Petersburg", "191186","+7 (812) 703-5371","European, Russian, Vegetarian Friendly","€€-€€€","www.facebook.com/bonchcoffebar?"));


//Details on Location Events
locationDetails.push(new events("./IMG/4.jpg","Bel Suono","6, Ligovsky Pr", "St. Petersburg", "190000", "(+7) (812) 275-1300", "Oktyabrsky Grand Concert Hall (BKZ)", "7 April 2019", "19:00 MSK", "1,300 - 5,000 Rbl"));
locationDetails.push(new events("./IMG/5.jpg","Eugene Onegin","1, Teatralnaya Pl", "St. Petersburg", "190000", "+7 (812) 326-4141","Mariinsky Theatre", "11 April 2019", "19:00 MSK", "2,800 - 5,000Rbl"));
locationDetails.push(new events("./IMG/balletathotel.jpg","Tchaikovsky nights at L’Europe Restaurant","1/7, Mikhailovskaya Ul.", "St. Petersburg", "191186", " +7 (812) 329-6622  ", "Belmond Grand Hotel Europe", "Every Friday", "19:00 MSK", "N/A"));
locationDetails.push(new events("./IMG/hamletrussian.jpg","Russian Hamlet","2, Pl. Ostrovskogo", "St. Petersburg", "191011", "+7 (812) 312-1545 ", "Alexandrinsky Theatre", "1-2 April 2019", "20:00 MSK", "1,000 - 7,000 Rbl"));



for(var index in locationDetails) {
	locationDetails[index].render(); //Used to render and print the details to the html output above on the render function. 
}