
const initialLoading = () =>{
    loadDate();
    returnGreeting();
}


const returnGreeting = () =>{
    const today = new Date()
    const curHr = today.getHours()
    const greeting = document.getElementById('greeting');

    if (curHr <= 8) {
        greeting.innerText = "Good morning, "
    } else if (curHr <= 12) {
        greeting.innerText = "Good day, "
    } else if (curHr <= 18) {
        greeting.innerText = "Good afternoon, "
    } else {
        greeting.innerText = "Good evening, "
    }
}

const loadDate = () =>{
  let d = new Date();
     
  let date = d.getDate();
  console.log(date);
  let month = d.getMonth(); // Since getUTCMonth() returns month from 0-11 not 1-12
  //let year = d.getUTCFullYear();
  let day = d.getDay();
  switch (day) {
    case 0:
      day = "SUN";
      break;
    case 1:
      day = "MON";
      break;
    case 2:
       day = "TUES";
      break;
    case 3:
      day = "WED";
      break;
    case 4:
      day = "THURS";
      break;
    case 5:
      day = "FRI";
      break;
    case 6:
      day = "SAT";
  }

  switch (month){
    case 0:
      month="JAN";
      break;
    case 1:
      month="FEB";
      break;
    case 2:
      month="MAR";
      break;
    case 3:
      month="APR";
      break;
    case 4:
      month="MAY";
      break;
    case 5:
      month="JUN";
      break;
    case 6:
      month="JUL";
      break;
    case 7:
      month="AUG";
      break;
    case 8:
      month="SEP";
      break;
    case 9:
      month="OCT";
      break;
    case 10:
      month="NOV";
      break;
    case 11:
      month="DEC";
      break;
  }
  let myDate = day + "," + " " + month + " " + date;
  document.getElementById('myDate').innerHTML = myDate;
}

let weather = {
    apiKey: "e04c24c7af0e248d068919373bb461f0",
    fetchWeather: function (city) {
      fetch(
        "https://api.openweathermap.org/data/2.5/weather?q=" 
        + city 
        + "&units=metric&appid=" 
        + this.apiKey
      )
  
        .then((response) => {
          if (!response.ok) {
            alert("No weather found.");
            throw new Error("No weather found.");
          }
          return response.json();
        })
        .then((data) => this.displayWeather(data));
    },
  
    displayWeather: function (data) {
      const { name } = data;
      const { icon, description } = data.weather[0];
      const { temp, feels_like, temp_min, temp_max } = data.main;
      const { speed } = data.wind;
  
      const average = ((temp_min+temp_max)/2);
      
      document.querySelector(".city").innerText = "Weather in " + name;
      document.querySelector(".description").innerText = description;
      document.querySelector(".temp").innerText = temp + "°C";
      document.querySelector(".feels_like").innerText = "Feels like: " + feels_like + "°C";
      document.querySelector(".wind").innerText = "Wind speed: " + speed + " km/h";
      document.querySelector(".weather").classList.remove("loading");
      
   
    const pictures = [
            [
                "img/shirts/shirt_1.jpeg",
                "img/shirts/shirt_2.jpeg",
                "img/shirts/shirt_3.jpeg",
              
            ],
            [
              "img/pants/pants_1.jpeg",
              "img/pants/pants_2.jpeg"
            ],
            [
              "img/sweaters/sweater_1.jpeg",
              "img/sweaters/sweater_2.jpeg",

            ],
            [
                "img/shoes/shoes_1.jpeg",
                "img/shoes/shoes_2.jpeg",
                "img/shoes/shoes_3.jpeg",
  
              ],
        ];
      
      const pants = Math.floor(Math.random() * pictures[0].length);
      const shirts = Math.floor(Math.random() * pictures[1].length);
      const sweaters = Math.floor(Math.random() * pictures[2].length);      
      const shoes = Math.floor(Math.random() * pictures[3].length);
    
     if (average > 23 ){
        document.querySelectorAll(".fit")[1].src = pictures[1][shirts];
        document.querySelectorAll(".fit")[0].src = pictures[0][pants];        
        document.querySelectorAll(".fit")[3].src = pictures[3][shoes];
        console.log(shirts);  
        console.log(pants);
        console.log(shoes);
        
        console.log(pictures[1][shirts]);
        console.log(pictures[0][pants]);
        console.log(pictures[3][shoes]);
      }else{
        document.querySelectorAll(".fit")[1].src = pictures[1][shirts];         
        document.querySelectorAll(".fit")[2].src = pictures[2][sweaters]; 
        document.querySelectorAll(".fit")[0].src = pictures[0][pants];   
        document.querySelectorAll(".fit")[3].src = pictures[3][shoes];  
        console.log(shirts);
        console.log(sweaters);
        console.log(pants);
        console.log(shoes);
        console.log(pictures[1][shirts]);
        console.log(pictures[2][sweaters]);
        console.log(pictures[0][pants]);
        console.log(pictures[3][shoes]);
      } 
        
  
        
    },
    search: function () {
      this.fetchWeather(document.querySelector(".search-bar").value);
    },
  
   
  };
  let geocode = {
      reverseGeocode: function(latitude, longitude){
          var api_key = '18097d18d0bf48f4a4c21fdbb1e09cec';
        
          var api_url = 'https://api.opencagedata.com/geocode/v1/json'
        
          var request_url = api_url
            + '?'
            + 'key=' + api_key
            + '&q=' + encodeURIComponent(latitude + ',' + longitude)
            + '&pretty=1'
            + '&no_annotations=1';
        
          // see full list of required and optional parameters:
          // https://opencagedata.com/api#forward
        
          var request = new XMLHttpRequest();
          request.open('GET', request_url, true);
        
          request.onload = function() {
            // see full list of possible response codes:
            // https://opencagedata.com/api#codes
        
              if (request.status === 200){
                  // Success!
                  var data = JSON.parse(request.responseText);
                  weather.fetchWeather(data.results[0].components.city)
              } else if (request.status <= 500){
                  // We reached our target server, but it returned an error
          
                  console.log("unable to geocode! Response code: " + request.status);
                  var data = JSON.parse(request.responseText);
                  console.log('error msg: ' + data.status.message);
              } else {
                  console.log("server error");
              }
              };
        
          request.onerror = function() {
            // There was a connection error of some sort
            console.log("unable to connect to server");
          };
        
          request.send();  // make the request
      },
      getlocation :function(){
          function success(data){
              geocode.reverseGeocode(data.coords.latitude, data.coords.longitude);
          }
          if(navigator.geolocation){
          navigator.geolocation.getCurrentPosition(success, console.error);
          }else{
              weather.fetchWeather("Pretoria");
          }
      }
  };
  
  //home screen buttons
  document.querySelector(".search button").addEventListener("click", function () {
      weather.search();
  });
  
  document.querySelector(".outfit button").addEventListener("click", function () {
    weather.search();
  });
  
  document
      .querySelector(".search-bar")
      .addEventListener("keyup", function (event) {
          if (event.key == "Enter") {
              weather.search();
          }
      });
  
  //geocode calling
  geocode.getlocation();
  