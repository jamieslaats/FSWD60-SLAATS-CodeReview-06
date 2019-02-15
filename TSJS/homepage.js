var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var address = /** @class */ (function () {
    function address(img, name, street, city, postCode, telephone) {
        this.img = "";
        this.img = img;
        this.name = name;
        this.street = street;
        this.city = city;
        this.postCode = postCode;
        this.telephone = telephone;
    }
    return address;
}());
var sight = /** @class */ (function (_super) {
    __extends(sight, _super);
    function sight(img, name, street, city, postCode, telephone, metro, openTimes, entryCost) {
        var _this = _super.call(this, street, city, postCode, telephone) || this;
        _this.openTimes = openTimes;
        _this.entryCost = entryCost;
        return _this;
    }
    return sight;
}(address));
var eatery = /** @class */ (function (_super) {
    __extends(eatery, _super);
    function eatery(img, name, street, city, postCode, telephone, type, value, webAddress) {
        var _this = _super.call(this, street, city, postCode, telephone) || this;
        _this.type = type;
        _this.value = value;
        _this.webAddress = webAddress;
        return _this;
    }
    return eatery;
}(address));
var events = /** @class */ (function (_super) {
    __extends(events, _super);
    function events(img, name, street, city, postCode, telephone, eventPlace, eventDate, eventTime, ticketPrice) {
        var _this = _super.call(this, street, city, postCode, telephone) || this;
        _this.eventPlace = eventPlace;
        _this.eventDate = eventDate;
        _this.eventTime = eventTime;
        _this.ticketPrice = ticketPrice;
        return _this;
    }
    return events;
}(address));
var locationDetails = new Array();
locationDetails[0] = new sight("2, Dvortsovaya Ploschad", "St. Petersburg", "190000", "+7 (812) 571-3420", "Admiralteyskaya", "Daily 10:30am to 6pm. Last admission is at 5:30pm. Wednesday and Friday, till 9pm. Last admission is at 8:30pm", "600 RUB");
locationDetails[1] = new sight("1, Teatralnaya Ploshchad", "St. Petersburg", "190000", "+7 (812) 326-4141", "Admiralteyskaya, Sadovaya / Sennaya Ploshchad / Spasskaya", "Daily 5pm to 12pm", "50 RUB");
locationDetails[2] = new eatery("12, Sadovaya Street", "St. Petersburg", "190000", "+7 (812) 640-1616", "European, Russian, Vegetarian Friendly", "€€€€", "http://ginza.ru/spb/restaurant/tsar?utm_source=tripadvisor&utm_medium=referral");
locationDetails[3] = new eatery("47, Nevskiy Avenue", "St. Petersburg", "191025", "+7 (812) 703-5371", "European, Russian, Vegetarian Friendly", "€€€€", "http://www.palkin.ru");
locationDetails[4] = new events("6, Ligovsky Pr", "St. Petersburg", "190000", "(+7) (812) 275-1300", "Oktyabrsky Grand Concert Hall (BKZ)", "7 April 2019", "19:00 MSK", "1,300 Rbl - 5,000 Rbl");
locationDetails[5] = new events("1, Teatralnaya Pl", "St. Petersburg", "190000", "+7 (812) 326-4141", "Mariinsky Theatre", "11 April 2019", "19:00 MSK", "2,800 Rbl - 5,000Rbl");
for (var index in locationDetails) {
    document.getElementById("traveldata").innerHTML += "<div id=x" + index + ">"
        + "<img src='img/" + index + ".jpg'>"
        + "<p> Address: " + locationDetails[index].street + ", " + locationDetails[index].city + ", " + locationDetails[index].postCode + "</p>"
        + "<p> Telephone" + locationDetails[index].telephone + "</p>";
}
