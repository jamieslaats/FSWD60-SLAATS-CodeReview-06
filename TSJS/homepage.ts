class address{
	img = ""
	name: string;
	street: string;
	city: string;
	postCode: string;
	telephone: number;
	constructor(img,name,street,city,postCode, telephone){
		this.img = img;
		this.name = name;
		this.street = street;
		this.city = city;
		this.postCode = postCode;
		this.telephone = telephone;
	}
}

class sight extends address{
	metro: string;
	openTimes: string;
	entryCost: string;
	constructor(img,name,street,city,postCode, telephone,metro,openTimes,entryCost) {
		super(street,city,postCode,telephone);
		this.openTimes = openTimes;
		this.entryCost = entryCost;
	}
}

class eatery extends address {
	type: string;
	value: string;
	webAddress: string;
	constructor(img,name,street,city,postCode, telephone,type,value,webAddress){
		super(street,city,postCode,telephone);
		this.type = type;
		this.value = value;
		this.webAddress = webAddress;
	}
}

class events extends address {
	eventPlace: string;
	eventDate: string;
	eventTime: string;
	ticketPrice: number;
	constructor(img,name,street,city,postCode, telephone,eventPlace,eventDate,eventTime,ticketPrice){
		super(street,city,postCode,telephone);
		this.eventPlace = eventPlace;
		this.eventDate = eventDate;
		this.eventTime = eventTime;
		this.ticketPrice = ticketPrice;
	}
}

var locationDetails = new Array();

locationDetails[0] = new sight("2, Dvortsovaya Ploschad", "St. Petersburg", "190000", "+7 (812) 571-3420", "Admiralteyskaya","Daily 10:30am to 6pm. Last admission is at 5:30pm. Wednesday and Friday, till 9pm. Last admission is at 8:30pm", "600 RUB");
locationDetails[1] = new sight("1, Teatralnaya Ploshchad", "St. Petersburg", "190000", "+7 (812) 326-4141", "Admiralteyskaya, Sadovaya / Sennaya Ploshchad / Spasskaya","Daily 5pm to 12pm", "50 RUB");
locationDetails[2] = new eatery("12, Sadovaya Street", "St. Petersburg", "190000", "+7 (812) 640-1616", "European, Russian, Vegetarian Friendly", "€€€€", "http://ginza.ru/spb/restaurant/tsar?utm_source=tripadvisor&utm_medium=referral");
locationDetails[3] = new eatery("47, Nevskiy Avenue", "St. Petersburg", "191025","+7 (812) 703-5371","European, Russian, Vegetarian Friendly","€€€€","http://www.palkin.ru");
locationDetails[4] = new events("6, Ligovsky Pr", "St. Petersburg", "190000", "(+7) (812) 275-1300", "Oktyabrsky Grand Concert Hall (BKZ)", "7 April 2019", "19:00 MSK", "1,300 Rbl - 5,000 Rbl");
locationDetails[5] = new events("1, Teatralnaya Pl", "St. Petersburg", "190000", "+7 (812) 326-4141","Mariinsky Theatre", "11 April 2019", "19:00 MSK", "2,800 Rbl - 5,000Rbl");


for (let index in locationDetails) {
	document.getElementById("traveldata").innerHTML += "<div id=x"+index+">"
	+ "<img src='img/" + index + ".jpg'>"
	+ "<p> Address: " + locationDetails[index].street + ", " + locationDetails[index].city + ", "+ locationDetails[index].postCode + "</p>"
	+ "<p> Telephone" + locationDetails[index].telephone + "</p>"
}