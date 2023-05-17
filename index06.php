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
  <!-- <link rel="stylesheet" href="plugins/leaflet-opencage-geosearch/leaflet-opencage-geosearch.css"> -->

  <style>
    .cursor-pointer{
      cursor: pointer;
    }

    .wrapper .content-wrapper {
      min-height: 100vh;
    }
    .ovHid{
/*      overflow: hidden!important;*/
    }
  </style>
</head>

<body class="dark-mode text-sm">
  <div class="wrapper">
    <div class="content-wrapper kanban" style="margin-left: 0!important">
      <section class="content p-2">
        <div class="row h-100">
          <div class="col-3 h-100 d-none">
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
          <div class="col-12 h-100">
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
<script src="https://cdn.jsdelivr.net/npm/@opencage/geosearch-bundle"></script>
<!-- <script src="plugins/leaflet-opencage-geosearch/leaflet-opencage-geosearch.js"></script> -->
<script src="plugins/leaflet-providers.js"></script>
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


  // const options = {
  //     key: 'dfc2dfb00cxd04b60b9a56xef0d5809x551',
  //     // limit: 3,
  //     // noResults: 'Pas de résultat.',
  //     // onActive: () => { console.log('Happy') },
  //     // leafletjs options:
  //     position: 'topright', // Possible values are 'topleft', 'topright', 'bottomleft' or 'bottomright'
  // };

  // var geosearchControl = L.Control.openCageGeosearch(options).addTo(map);

  // L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);
  // var lyrOSM = L.tileLayer.provider('OpenStretMap.Mapnik');
  var defaultLayer = L.tileLayer.provider('OpenStreetMap.Mapnik').addTo(map);

  var baseLayers = {
    'OpenStreetMap Default': defaultLayer,
    'OpenStreetMap German Style': L.tileLayer.provider('OpenStreetMap.DE'),
    'OpenStreetMap H.O.T.': L.tileLayer.provider('OpenStreetMap.HOT'),
    'MapTilesAPI OpenStreetMap in English': L.tileLayer.provider('MapTilesAPI.OSMEnglish'),
    'MapTilesAPI OpenStreetMap en Français': L.tileLayer.provider('MapTilesAPI.OSMFrancais'),
    'MapTilesAPI OpenStreetMap en Español': L.tileLayer.provider('MapTilesAPI.OSMEspagnol'),
    'Thunderforest OpenCycleMap': L.tileLayer.provider('Thunderforest.OpenCycleMap'),
    'Thunderforest Transport': L.tileLayer.provider('Thunderforest.Transport'),
    'Thunderforest Landscape': L.tileLayer.provider('Thunderforest.Landscape'),
    'Stamen Toner': L.tileLayer.provider('Stamen.Toner'),
    'Stamen Terrain': L.tileLayer.provider('Stamen.Terrain'),
    'Stamen Watercolor': L.tileLayer.provider('Stamen.Watercolor'),
    'Jawg Streets': L.tileLayer.provider('Jawg.Streets'),
    'Jawg Terrain': L.tileLayer.provider('Jawg.Terrain'),
    'Esri WorldStreetMap': L.tileLayer.provider('Esri.WorldStreetMap'),
    'Esri DeLorme': L.tileLayer.provider('Esri.DeLorme'),
    'Esri WorldTopoMap': L.tileLayer.provider('Esri.WorldTopoMap'),
    'Esri WorldImagery': L.tileLayer.provider('Esri.WorldImagery'),
    'Esri WorldTerrain': L.tileLayer.provider('Esri.WorldTerrain'),
    'Esri WorldShadedRelief': L.tileLayer.provider('Esri.WorldShadedRelief'),
    'Esri WorldPhysical': L.tileLayer.provider('Esri.WorldPhysical'),
    'Esri OceanBasemap': L.tileLayer.provider('Esri.OceanBasemap'),
    'Esri NatGeoWorldMap': L.tileLayer.provider('Esri.NatGeoWorldMap'),
    'Esri WorldGrayCanvas': L.tileLayer.provider('Esri.WorldGrayCanvas'),
    'Geoportail France Maps': L.tileLayer.provider('GeoportailFrance'),
    'Geoportail France Orthos': L.tileLayer.provider('GeoportailFrance.orthos'),
    'USGS USTopo': L.tileLayer.provider('USGS.USTopo'),
    'USGS USImagery': L.tileLayer.provider('USGS.USImagery'),
    'USGS USImageryTopo': L.tileLayer.provider('USGS.USImageryTopo'),
  };

  let objOverlays = {};

  let controlLayers = L.control.layers(baseLayers, objOverlays).addTo(map);

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

  let marcadorCentro = L.marker([-40.257362, -65.893394], {
    icon: L.AwesomeMarkers.icon({icon: 'star', prefix: 'fa', markerColor: 'cadetblue', spin:true}),
    draggable: true

  }).addTo(map);
  marcadorCentro.on("dragend", function () {
    console.log('se movio el punto centro');
     marcadorCentro.setTooltipContent('El marcador se movio a: ' + marcadorCentro.getLatLng().toString() ).openTooltip();
  });

  let marcadorCentro2 = L.marker([-40.257362, -64.893394],{draggable:true}).addTo(map)
  marcadorCentro2.on("dragend", function () {
    console.log('se movio el punto centro 2');
     marcadorCentro2.bindPopup('El marcador se movio a: ' + marcadorCentro.getLatLng().toString() ).openPopup();
  });

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

  let polilineaVectores = [];
  

     let polyline = L.polyline(polilineaVectores, {color:'red'}).addTo(map);
  map.on("contextmenu", function (e) { //! boton derecho del mause
     var curtime = new Date();
     L.marker(e.latlng, {icon: L.AwesomeMarkers.icon({icon: 'coffee', prefix: 'fa', markerColor: 'red', spin:false}) })
     .addTo(map)
     .bindPopup(e.latlng.toString()+'<br/>'+
      curtime.toString());
     polyline.addLatLng([e.latlng.lat,e.latlng.lng]);
     // map.fitBounds(polyline.getBounds())
     polilineaVectores.push([e.latlng.lat,e.latlng.lng]);
     exportarArrayPoligono(polilineaVectores);
     // polyline.redraw(polilineaVectores)
     console.log(polilineaVectores);
  });

  // [-34.918381721449165, -34.918381721449165], [-34.920026340114156, -34.920026340114156], [-34.92140640714219, -34.92140640714219], [-34.92100251931215, -34.92100251931215]


  // [-34.91931430915507, -34.91931430915507], [-34.92046631731897, -34.92046631731897], [-34.92037860861853, -34.92037860861853]

  // metodo de subtracción
  // let poligono = L.polygon([
  //   [
  //     [-34.41574976988924, -63.48086012258717], [-40.66334448439318, -63.351433807537255], [-41.028627866312405, -62.713258315589606], [-40.66302566560311, -62.1860298585298], [-40.22832528829828, -62.4933472843853], [-38.80475819905606, -62.42746390351734], [-38.992835879111816, -61.85647460266186], [-38.701960517893156, -59.37477502228391], [-37.54402915318741, -57.19996628388273], [-36.31473985398963, -56.804089533974114], [-36.11976839727389, -57.353013944227456], [-35.42460236400931, -57.111453077005685], [-34.57880195342491, -58.29735393262863], [-33.99746923332372, -58.4514392294351], [-33.35805143728287, -60.25189423171088], [-33.68768039060563, -60.40563364969677], [-33.59623017001325, -60.86681731577235], [-34.41577238262803, -61.76721199167354]
  //   ],
  //   [
  //     [-35.06591954211348, -58.756986908658575], [-35.424764923663766, -59.48170409820594], [-35.8710827283639, -60.27230466862123], [-36.18201848548881, -61.13976918338245], [-36.93202209402684, -60.250343541665245], [-36.81778764743727, -59.887984946891585], [-35.9867163841181, -59.03150099560834], [-35.44266547184034, -58.82287028952651]
  //   ]
  // ],{
  //   color:'red',
  //   fillColor:'blue',
  //   fillOpacity:.6,
  // }).addTo(map);

  // metodo de subtracción con suma de poligono extra
  let poligono = L.polygon([
    [
      //! aray forma principal
      [
        [-34.41574976988924, -63.48086012258717], [-40.66334448439318, -63.351433807537255], [-41.028627866312405, -62.713258315589606], [-40.66302566560311, -62.1860298585298], [-40.22832528829828, -62.4933472843853], [-38.80475819905606, -62.42746390351734], [-38.992835879111816, -61.85647460266186], [-38.701960517893156, -59.37477502228391], [-37.54402915318741, -57.19996628388273], [-36.31473985398963, -56.804089533974114], [-36.11976839727389, -57.353013944227456], [-35.42460236400931, -57.111453077005685], [-34.57880195342491, -58.29735393262863], [-33.99746923332372, -58.4514392294351], [-33.35805143728287, -60.25189423171088], [-33.68768039060563, -60.40563364969677], [-33.59623017001325, -60.86681731577235], [-34.41577238262803, -61.76721199167354]
      ],
      //! substracción
      [
        [-35.06591954211348, -58.756986908658575], [-35.424764923663766, -59.48170409820594], [-35.8710827283639, -60.27230466862123], [-36.18201848548881, -61.13976918338245], [-36.93202209402684, -60.250343541665245], [-36.81778764743727, -59.887984946891585], [-35.9867163841181, -59.03150099560834], [-35.44266547184034, -58.82287028952651]
      ]
    ],
    //! suma forma secundaria
    [
      [-21.789969900274194, -66.25964596945389], [-22.12617137226227, -66.28160709640986], [-22.29905438599115, -66.70984907205147], [-22.60362000825057, -66.98436315900123], [-22.846788614782607, -67.20397442856104], [-22.98843675624309, -66.99534372247922], [-23.69443730471966, -67.22593555551703], [-24.146295034135004, -66.61102400074957], [-24.096166821629506, -66.36945160423377], [-23.472956518675876, -66.18278202510794], [-23.563607459660172, -65.95219019207015], [-24.01592087967161, -65.94120962859218], [-24.42664896859696, -65.48002596251658], [-24.54661065909471, -65.05178398687495], [-24.466648906485506, -64.45883355906348], [-24.236476270142933, -64.18431947211373], [-23.583743630820823, -64.17333890863573], [-23.52332585877856, -64.37098905123956], [-23.64413360302509, -64.45883355906348], [-23.45280339475969, -64.70040595557926], [-23.49310656481703, -64.90903666166109], [-22.61376065232421, -65.3482592007807], [-22.090533062704885, -65.19957771600806], [-22.09562218063092, -65.77056701686357], [-21.953057637856563, -65.91880462381644], [-21.912298590407065, -66.03410054033533], [-21.82054810421414, -66.10547420294225]
    ]
  ],{
    color:'red',
    fillColor:'blue',
    fillOpacity:.6,
  }).addTo(map);

 

  map.fitBounds(poligono.getBounds());


  function guardarPortapapeles(text) {
    var textArea = document.createElement("textarea");
    textArea.style.position = 'fixed';
    textArea.style.top = 0;
    textArea.style.left = 0;
    textArea.style.width = '2em';
    textArea.style.height = '2em';
    textArea.style.padding = 0;
    textArea.style.border = 'none';
    textArea.style.outline = 'none';
    textArea.style.boxShadow = 'none';
    textArea.style.background = 'transparent';
    textArea.value = text;
    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();
    try {
      var successful = document.execCommand('copy');
      var msg = successful ? 'successful' : 'unsuccessful';
      console.log('Copying text command was ' + msg);
    } catch (err) {
      console.log('Oops, unable to copy');
    }
    document.body.removeChild(textArea);
  }

  function exportarArrayPoligono(arrayPoligono){
    let poligonoArray = ``;
    $.each(arrayPoligono, function (indP, objP) {
      poligonoArray += `[${objP[0]}, ${objP[1]}], `;
    });
    poligonoArray = poligonoArray.slice(0, -2);
    guardarPortapapeles(poligonoArray);
  }

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