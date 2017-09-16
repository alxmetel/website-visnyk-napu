// STICKY MENU

var win = $(window),
    nav = $('nav'),
    pos = nav.offset().top,
    sticky = function() { 
      win.scrollTop() > pos ? nav.addClass('sticky') : nav.removeClass('sticky')
    }
win.scroll(sticky);


// RESPONSIVE MENU

function collapseMenu() {
  var x = document.getElementById("topNav");
  if (!x.classList.contains("responsive")) {
    x.classList.add("responsive");
  } else {
    x.classList.remove("responsive");
  }
}


// ACCORDION

var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}

// Make the first accordion section initially active

var initActiveButton = document.getElementById("initialActiveBut");
var initActivePanel = document.getElementById("initialActivePanel");
function setInitialActive() {
  initActiveButton.classList.toggle("active");
  initActivePanel.style.maxHeight = initActivePanel.scrollHeight + "px";
};


// MAP

function initMap() {
  var myLatLng = {lat: 50.467799, lng: 30.466985};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: myLatLng
  });
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Редакція журналу "Вісник Національної академії прокуратури України", вул. Мельникова, 81-б'
  });
}