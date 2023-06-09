<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="css/leaflet.css">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="css/leaflet.awesome-markers.css">
  <style>
    .cursor-pointer{
      cursor: pointer;
    }

    .wrapper .content-wrapper {
      min-height: 100vh;
    }
    #map{
    	overflow: hidden;
    }
  </style>
</head>

<body class="dark-mode text-sm">
  <div class="wrapper">
    <div class="content-wrapper kanban" style="margin-left: 0!important">
      <section class="content p-2">
        <div class="row h-100">
          <div class="col-12 h-100">
            <div class="card card-row card-default w-100 h-100">
              <div class="card-header bg-olive  d-none">
                <h3 class="card-title">
                	<i class="nav-icon fas fa-laptop-house"></i>
                  Nueva
                </h3>
               
              </div>
              <div id="map" class="card-body p-0 m-0 h-100">
                
              </div>
            </div>            
          </div>
        </div>
      </section>
    </div>
  </div>
</body>
</html>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/leaflet-src.js"></script>
<script src="js/leaflet.awesome-markers.js"></script>
<script type="text/javascript">
  let map = L.map('map', {
    center : [ -40.257362, -65.893394 ],
    zoom : 4,
    // zoomControl : false,
    // dragging : false,
    // minZoom : 3,
    // maxZoom : 5,
  });
  let miPos;
  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);

  setInterval(function (){
    // map.locate();
  }, 5000);

  L.marker([-40.257362, -65.893394], {icon: L.AwesomeMarkers.icon({icon: 'move', prefix: 'fa', markerColor: 'cadetblue', spin:true}) }).addTo(map);

  map.on("moveend", function () {
     console.log('getCenter', map.getCenter().toString());
  });
  map.on("zoomend", function () {
     console.log('getZoom', map.getZoom());
  });

  map.on("click", function (e) {
    if(!e.originalEvent.shiftKey){
     console.log(e);
     console.log(e.latlng.toString()); 
    }else{
      console.log('shift');
    }
  });

  var colors = ['red', 'blue', 'green', 'purple', 'orange', 'darkred', 'lightred', 'beige', 'darkblue', 'darkgreen', 'cadetblue', 'darkpurple', 'white', 'pink', 'lightblue', 'lightgreen', 'gray', 'black', 'lightgray'];

  var awesomeIcons = ['font', 'cloud-download', 'medkit', 'github-alt', 'coffee', 'twitter', 'shopping-cart', 'tags', 'star'];

  map.on("contextmenu", function (e) { //! boton derecho del mause
     var curtime = new Date();
     L.marker(e.latlng, {icon: L.AwesomeMarkers.icon({icon: 'coffee', prefix: 'fa', markerColor: 'red', spin:false}) })
     .addTo(map)
     .bindPopup(e.latlng.toString()+'<br/>'+
      curtime.toString());
  });

  map.on("keypress", function (e) {
    if(e.originalEvent.key == 'l'){
     console.log('tecla en mapa l');
     map.locate();
    }
  });

  map.on("locationfound", function (e) {
    // L.circleMarker(e.latlng);
    if(miPos){
      miPos.remove();
    }
    // miPos = L.circleMarker(e.latlng, {
    //   radius : 15,
    //   color  : '#00ffff',
    //   opacity: 0.75,
    // }).addTo(map);

    miPos = L.circle(e.latlng, {
      radius : e.accuracy/2,
      color  : '#00ffff',
      opacity: 0.75,
    }).addTo(map);
    alert('usted fue geolocalizado')

    L.marker(e.latlng, {icon: L.AwesomeMarkers.icon({icon: 'star', prefix: 'fa', markerColor: 'red', spin:false}) })
    .addTo(map)
    .bindPopup(e.latlng.toString()+'<br/>'+
     curtime.toString());
  });

  map.on("locationerror", function (e) {
    console.log('mapa no funciona');
  });

</script>