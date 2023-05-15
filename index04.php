<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="css/leaflet.css">
  <!-- <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet"> -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/leaflet.awesome-markers.css">
  <link rel="stylesheet" href="plugins/L.Control.Pan.css">
  <link rel="stylesheet" href="plugins/L.Control.Zoomslider.css">
  <link rel="stylesheet" href="plugins/L.Control.MousePosition.css">
  <link rel="stylesheet" href="plugins/Leaflet.PolylineMeasure.css">
  <link rel="stylesheet" href="plugins/easy-button.css">
  <link rel="stylesheet" href="plugins/leaflet-sidebar.min.css">

  <style>
    .cursor-pointer{
      cursor: pointer;
    }

    .wrapper .content-wrapper {
      min-height: 100vh;
    }
    .ovHid{
      overflow: hidden!important;
    }
  </style>
</head>

<body class="dark-mode text-sm">
  <div class="wrapper">
    <div class="content-wrapper kanban" style="margin-left: 0!important">
      <section class="content p-2">
        <div class="row h-100">
          <div class="col-3 h-100">
            <div class="card card-row card-default w-100 h-100">
              <div id="listado" class="card-body p-0 m-0 h-100 ovHid">
                <div class="row">
                  <div class="col-12 py-1 px-3">
                    <h5 class="text-info">Configuración</h5>
                    <hr class="bg-white p-0 m-0">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          Zoom <span id="zoom-nivel" class="float-right badge bg-primary">0</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          Centro mapa <span id="centro-mapa-lng" class="float-right badge bg-info">5</span><span id="centro-mapa-lat" class="float-right badge bg-info mr-1">5</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          Centro mouse <span id="centro-mouse-lng" class="float-right badge bg-info">5</span><span id="centro-mouse-lat" class="float-right badge bg-info mr-1">5</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <button type="button" id="geolocalizar" class="btn btn-primary btn-block mt-2">
                          Geolocalizar
                        </button>
                      </li>
                      <li class="nav-item" style="display: none;">
                        <button type="button" id="geolocalizar-zoom" class="btn btn-primary btn-block mt-2">
                          Zoom geolocalizar
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>            
          </div>
          <div class="col-9 h-100">
            <div class="card card-row card-default w-100 h-100">
              <div class="card-header bg-olive  d-none">
                <h3 class="card-title">
                  <i class="nav-icon fas fa-laptop-house"></i>
                  Nueva
                </h3>
               
              </div>
              <div id="sidebar" class="sidebar collapsed">
                  <!-- Nav tabs -->
                  <div class="sidebar-tabs">
                      <ul role="tablist">
                          <li><a href="#home" role="tab"><i class="fa fa-bars"></i></a></li>
                          <li><a href="#profile" role="tab"><i class="fa fa-user"></i></a></li>
                          <li class="disabled"><a href="#messages" role="tab"><i class="fa fa-envelope"></i></a></li>
                          <li><a href="https://github.com/Turbo87/sidebar-v2" role="tab" target="_blank"><i class="fa fa-github"></i></a></li>
                      </ul>

                      <ul role="tablist">
                          <li><a href="#settings" role="tab"><i class="fa fa-gear"></i></a></li>
                      </ul>
                  </div>

                  <!-- Tab panes -->
                  <div class="sidebar-content">
                      <div class="sidebar-pane" id="home">
                          <h1 class="sidebar-header">
                              sidebar-v2
                              <span class="sidebar-close"><i class="fa fa-caret-left"></i></span>
                          </h1>

                          <p>A responsive sidebar for mapping libraries like <a href="http://leafletjs.com/">Leaflet</a> or <a href="http://openlayers.org/">OpenLayers</a>.</p>

                          <p class="lorem">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

                          <p class="lorem">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

                          <p class="lorem">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

                          <p class="lorem">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                      </div>

                      <div class="sidebar-pane" id="profile">
                          <h1 class="sidebar-header">Profile<span class="sidebar-close"><i class="fa fa-caret-left"></i></span></h1>
                      </div>

                      <div class="sidebar-pane" id="messages">
                          <h1 class="sidebar-header">Messages<span class="sidebar-close"><i class="fa fa-caret-left"></i></span></h1>
                      </div>

                      <div class="sidebar-pane" id="settings">
                          <h1 class="sidebar-header">Settings<span class="sidebar-close"><i class="fa fa-caret-left"></i></span></h1>
                      </div>
                  </div>
                </div>
              <div id="map" class="card-body p-0 m-0 h-100 sidebar-map ovHid">
                
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
<script src="plugins/L.Control.Pan.js"></script>
<script src="plugins/L.Control.Zoomslider.js"></script>
<script src="plugins/L.Control.MousePosition.js"></script>
<script src="plugins/Leaflet.PolylineMeasure.js"></script>
<script src="plugins/easy-button.js"></script>
<script src="plugins/leaflet-sidebar.min.js"></script>
<script type="text/javascript">
  let map = L.map('map', {
    center : [ -40.257362, -65.893394 ],
    zoom : 4,
    attributionControl : false,
    // zoomControl : false,
    // dragging : false,
    // minZoom : 3,
    // maxZoom : 5,
  });
  var sidebar = L.control.sidebar('sidebar').addTo(map);
  let miPos;
  let miPosGeo;
  L.control.zoom({
    zoomInText: '<i class="fa fa-plus text-info text-center" style="line-height: 32px"></i>',
    zoomOutText: '<i class="fa fa-minus text-info text-center" style="line-height: 32px"></i>',
    position: 'bottomright'
  }).addTo(map);


  let ctlPan = L.control.pan().addTo(map);
  let ctlZoomSlider = L.control.zoomslider({
    position : 'topright'
  }).addTo(map);


  let tributo = L.control.attribution({
    position : 'bottomleft'
  }).addTo(map);
  tributo.addAttribution('Krateros');
  tributo.addAttribution('<a href="http://krateros-design.com/kitsune">Sitio web</a>');
  let ctlMousePos = L.control.mousePosition().addTo(map);
  L.control.scale({
    position : 'bottomleft'
  }).addTo(map);

  let ctlPolylineMeasure = L.control.polylineMeasure().addTo(map);
  let ctlEasyButton = L.easyButton('fa fa-medkit', function(){
    map.locate();
  }).addTo(map);

  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);

  let popupPersona = L.popup({
    maxWidth: 1000,
    keepInWiew: true
  });
  popupPersona.setLatLng([ -40.257362, -65.893394 ]);
  // popupPersona.setContent(`
  //   <img class="direct-chat-img" src="img/user1-128x128.jpg"></img><p>Hola mundo</p>
  // `);
  popupPersona.setContent(`
  <div class="small-box bg-danger">
    <div class="icon">
      <i class="fa fa-coffee"></i>
    </div>
    <div class="inner">
      <h3 class="text-warning">65</h3>
      <p class="m-0">Geolocalización</p>
    </div>
  </div>
  `);
  map.openPopup(popupPersona);

  setInterval(function (){
    // map.locate();
  }, 5000);

  L.marker([-40.257362, -65.893394], {icon: L.AwesomeMarkers.icon({icon: 'star', prefix: 'fa', markerColor: 'cadetblue', spin:true}) }).addTo(map);

  map.on("moveend", function () {
     console.log('getCenter', map.getCenter().toString());
  });
  map.on("zoomend", function () {
     console.log('getZoom', map.getZoom());
     setearZoom();
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
    var curtime = new Date();
    miPosGeo = e.latlng;
    miPos = L.circle(e.latlng, {
      radius : e.accuracy/2,
      color  : '#00ffff',
      opacity: 0.75,
    }).addTo(map);
    // alert('usted fue geolocalizado')

    L.marker(e.latlng, {icon: L.AwesomeMarkers.icon({icon: 'star', prefix: 'fa', markerColor: 'red', spin:false}) })
    .addTo(map)
    .bindPopup(e.latlng.toString()+'<br/>'+
     curtime.toString()).openPopup();
  });

  map.on("locationerror", function (e) {
    console.log('mapa no funciona');
  });

  setearZoom();
  function setearZoom(){
    $('#zoom-nivel').text(map.getZoom());
  }
  // centro-mapa
  // mause-geo

  map.on("moveend", function (e) {
    actualizarCentroMapa();
  });

  actualizarCentroMapa();
  function actualizarCentroMapa(){
    console.log('centroMapa', map.getCenter())
    $('#centro-mapa-lat').text('LAT: '+ map.getCenter().lat.toFixed(1));
    $('#centro-mapa-lng').text('LONG: '+ map.getCenter().lng.toFixed(1));
  }

  map.on("mousemove", function (e) {
    actualizarPosMause(e);
    console.log('mouseMove');
  });

  function actualizarPosMause(evento){
    $('#centro-mouse-lat').text('LAT: '+ evento.latlng.lat.toFixed(1));
    $('#centro-mouse-lng').text('LONG: '+ evento.latlng.lng.toFixed(1));
  }

  $(document).on('click', '#geolocalizar', function(e){
    map.locate();
    $('#geolocalizar-zoom').parent().show();
  });

  $(document).on('click', '#geolocalizar-zoom', function(e){
    map.setView(miPosGeo, 14);
  });



</script>