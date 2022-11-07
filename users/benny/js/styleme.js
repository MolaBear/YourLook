function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");
  }

  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn1')) {
      var dropdowns = document.getElementsByClassName("dropdown-content1");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
    if (!event.target.matches('.dropbtn2')) {
      var dropdowns = document.getElementsByClassName("dropdown-content2");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

  document.getElementById("buttons").onclick = function() {reset(),filterOutfits()};

  function reset() {
    document.getElementsByClassName("dropbtn1")[0].innerText = "Sunny";
    document.getElementsByClassName("dropbtn2")[0].innerText = "School";
    filterOutfits()
  }

  document.getElementById("w1").addEventListener("click", function() {Sunny()});
  // document.getElementById("w1").addEventListener("click", filterOutfits);

  document.getElementById("w2").addEventListener("click", function() {Rainy()});
  // document.getElementById("w2").addEventListener("click", filterOutfits);

  document.getElementById("w3").addEventListener("click", function() {Windy()});
  // document.getElementById("w3").addEventListener("click", filterOutfits);

  function Sunny() {
    document.getElementsByClassName("dropbtn1")[0].innerText = "Sunny";
    filterOutfits()
  }

  function Rainy() {
    document.getElementsByClassName("dropbtn1")[0].innerText = "Rainy";
    filterOutfits()
  }

  function Windy() {
    document.getElementsByClassName("dropbtn1")[0].innerText = "Windy";
    filterOutfits()
  }

  document.getElementById("o1").addEventListener("click", function() {School()});
  // document.getElementById("o1").addEventListener("click", filterOutfits);

  document.getElementById("o2").addEventListener("click", function() {Work()});
  // document.getElementById("o2").addEventListener("click", filterOutfits);

  document.getElementById("o3").addEventListener("click", function() {_Date()});
  // document.getElementById("o3").addEventListener("click", filterOutfits);

  function School() {
    document.getElementsByClassName("dropbtn2")[0].innerText = "School";
    filterOutfits()
  }

  function Work() {
    document.getElementsByClassName("dropbtn2")[0].innerText = "Work";
    filterOutfits()
  }

  function _Date() {
    document.getElementsByClassName("dropbtn2")[0].innerText = "Date";
    filterOutfits()
  }


  const filterOutfits = () =>{
    console.log('filter function is called');
    var btn_list = document.getElementsByClassName('dropdown')
    var weather = document.getElementsByClassName("dropbtn1")[0].innerText
    var occasion = document.getElementsByClassName("dropbtn2")[0].innerText
    console.log(weather,occasion)
    const images = document.querySelectorAll("img");
    // console.log(images);
    for (image of images){
        // console.log(image);
        var isMatch1 = image.alt.includes(weather)
        var isMatch2 = image.alt.includes(occasion)
        console.log(isMatch1, isMatch2)
        console.log(isMatch1 && isMatch2)
        if (isMatch1 && isMatch2){
            image.parentElement.style.display='flex';
        }
        else{
            image.parentElement.style.display='none';
        }
    }

};

