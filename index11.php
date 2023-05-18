<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Webmap 201</title>
        <link rel="stylesheet" href="src/leaflet.css">
        <link rel="stylesheet" href="src/css/bootstrap.css">
        <link rel="stylesheet" href="src/plugins/L.Control.Pan.css">
        <link rel="stylesheet" href="src/plugins/L.Control.Zoomslider.css">
        <link rel="stylesheet" href="src/plugins/L.Control.MousePosition.css">
        <link rel="stylesheet" href="src/plugins/L.Control.Sidebar.css">
        <link rel="stylesheet" href="src/plugins/Leaflet.PolylineMeasure.css">
        <link rel="stylesheet" href="src/plugins/easy-button.css">
        <link rel="stylesheet" href="src/plugins/leaflet-opencage/src/css/L.Control.OpenCageSearch.css">
        <link rel="stylesheet" href="src/plugins/leaflet-styleeditor/css/Leaflet.StyleEditor.css">
        <link rel="stylesheet" href="src/plugins/css/fontawesome.min.css">
        <link rel="stylesheet" href="src/plugins/leaflet.awesome-markers.css">
        <link rel="stylesheet" href="src/plugins/leaflet-mapkey-icon/L.Icon.Mapkey.css">
        <link rel="stylesheet" href="src/plugins/MarkerCluster.css">
        <link rel="stylesheet" href="src/plugins/MarkerCluster.Default.css">


        <script src="src/leaflet-src.js"></script>
        <script src="src/jquery-3.2.0.min.js"></script>
        <script src="src/plugins/L.Control.Pan.js"></script>
        <script src="src/plugins/L.Control.Zoomslider.js"></script>
        <script src="src/plugins/L.Control.MousePosition.js"></script>
        <script src="src/plugins/L.Control.Sidebar.js"></script>
        <script src="src/plugins/Leaflet.PolylineMeasure.js"></script>
        <script src="src/plugins/easy-button.js"></script>
        <script src="src/plugins/leaflet-providers.js"></script>
        <script src="src/plugins/leaflet-opencage/src/js/L.Control.OpenCageSearch.js"></script>
        <script src="src/plugins/leaflet-styleeditor/javascript/Leaflet.StyleEditor.js"></script>
        <script src="src/plugins/leaflet-styleeditor/javascript/Leaflet.StyleForms.js"></script>
        
<!--    ***************  Begin Leaflet.Draw-->
        
        <script src="src/plugins/leaflet-draw/Leaflet.draw.js"></script>
        <script src="src/plugins/leaflet-draw/Leaflet.Draw.Event.js"></script>
        <link rel="stylesheet" href="src/plugins/leaflet-draw/leaflet.draw.css"/>

        <script src="src/plugins/leaflet-draw/Toolbar.js"></script>
        <script src="src/plugins/leaflet-draw/Tooltip.js"></script>

        <script src="src/plugins/leaflet-draw/ext/GeometryUtil.js"></script>
        <script src="src/plugins/leaflet-draw/ext/LatLngUtil.js"></script>
        <script src="src/plugins/leaflet-draw/ext/LineUtil.Intersect.js"></script>
        <script src="src/plugins/leaflet-draw/ext/Polygon.Intersect.js"></script>
        <script src="src/plugins/leaflet-draw/ext/Polyline.Intersect.js"></script>
        <script src="src/plugins/leaflet-draw/ext/TouchEvents.js"></script>

        <script src="src/plugins/leaflet-draw/draw/DrawToolbar.js"></script>
        <script src="src/plugins/leaflet-draw/draw/handler/Draw.Feature.js"></script>
        <script src="src/plugins/leaflet-draw/draw/handler/Draw.SimpleShape.js"></script>
        <script src="src/plugins/leaflet-draw/draw/handler/Draw.Polyline.js"></script>
        <script src="src/plugins/leaflet-draw/draw/handler/Draw.Circle.js"></script>
        <script src="src/plugins/leaflet-draw/draw/handler/Draw.Marker.js"></script>
        <script src="src/plugins/leaflet-draw/draw/handler/Draw.Polygon.js"></script>
        <script src="src/plugins/leaflet-draw/draw/handler/Draw.Rectangle.js"></script>


        <script src="src/plugins/leaflet-draw/edit/EditToolbar.js"></script>
        <script src="src/plugins/leaflet-draw/edit/handler/EditToolbar.Edit.js"></script>
        <script src="src/plugins/leaflet-draw/edit/handler/EditToolbar.Delete.js"></script>

        <script src="src/plugins/leaflet-draw/Control.Draw.js"></script>

        <script src="src/plugins/leaflet-draw/edit/handler/Edit.Poly.js"></script>
        <script src="src/plugins/leaflet-draw/edit/handler/Edit.SimpleShape.js"></script>
        <script src="src/plugins/leaflet-draw/edit/handler/Edit.Circle.js"></script>
        <script src="src/plugins/leaflet-draw/edit/handler/Edit.Rectangle.js"></script>
        <script src="src/plugins/leaflet-draw/edit/handler/Edit.Marker.js"></script>
        <script src="src/plugins/leaflet.ajax.min.js"></script>
        <script src="src/plugins/leaflet.sprite.js"></script>
        <script src="src/plugins/leaflet.awesome-markers.min.js"></script>
        <script src="src/plugins/leaflet-mapkey-icon/L.Icon.Mapkey.js"></script>
        <script src="src/plugins/leaflet.markercluster.js"></script>
        
<!--    **************  End of Lealet Draw-->

        <style>
            #mapdiv {
                height:100vh;
            }
        </style>
    </head>
    <body>
        <div id="side-bar" class="col-md-3">
            <button id='btnLocate' class='btn btn-primary btn-block'>Locate</button>
            <button id='btnZocalo' class='btn btn-primary btn-block'>Zoom To Zocalo</button>
            <button id='btnMuseo' class='btn btn-primary btn-block'>Zoom To Anthropology Museum</button>
            <button id='btnBikeRoute' class='btn btn-primary btn-block'>Zoom To Bike Route</button>
            <button id='btnAddMuseo' class='btn btn-primary btn-block'>Add Museum to Vector Group</button>
            <button id='btnColor' class='btn btn-primary btn-block'>Change Color</button>
            <h4>Zoom Level: <span id='zoom-level'></span></h4>
            <h4>Map Center: <span id='map-center'></span></h4>
            <h4>Mouse Location: <span id='mouse-location'></span></h4>
            <h4>Image Opacity: <span id='image-opacity'>0.5</span></h4>
            <input type='range' id='sldOpacity' min='0' max='1' step='0.1' value='0.5'>
        </div>
        <div id="mapdiv" class="col-md-12"></div>
        <script>
            var mymap;
            var lyrOSM;
            var lyrWatercolor;
            var lyrTopo;
            var lyrImagery;
            var lyrOutdoors;
            var lyrChapultepec;
            var mrkCurrentLocation;
            var mrkMuseo;
            var plnBikeRoute;
            var plyParks;
            var fgpChapultepec;
            var fgpDrawnItems;
            var popZocalo;
            var ctlAttribute;
            var ctlScale;
            var ctlPan;
            var ctlZoomslider;
            var ctlMouseposition;
            var ctlMeasure;
            var ctlEasybutton;
            var ctlSidebar;
            var ctlSearch;
            var ctlLayers;
            var ctlDraw;
            var ctlStyle;
            var objBasemaps;
            var objOverlays;
            let iconoFontAwesome01;
            let iconoFontAwesome02;
            let iconoMapkey01;
            let iconoMapkey02;

            let markerCluster;

            let lyrMarkerCluster;
            let lyrRaptorNests;
            
            $(document).ready(function(){
                mymap = L.map('mapdiv', {center:[19.4, -99.2], zoom:13, zoomControl:false, attributionControl:false});
                lyrOSM = L.tileLayer.provider('OpenStreetMap.Mapnik');
                lyrTopo = L.tileLayer.provider('OpenTopoMap');
                lyrImagery = L.tileLayer.provider('Esri.WorldImagery');
                lyrOutdoors = L.tileLayer.provider('Thunderforest.Outdoors');
                lyrWatercolor = L.tileLayer.provider('Stamen.Watercolor');
                mymap.addLayer(lyrOSM);

                iconoFontAwesome01 = L.AwesomeMarkers.icon({
                    icon:'tree-conifer',
                    markerColor:'green',
                    iconColor:'orange',
                });

                iconoFontAwesome02 = L.AwesomeMarkers.icon({
                    icon:'tree-conifer',
                    markerColor:'red',
                    iconColor:'yellow',
                    spin:true,
                    // prefix:'far',
                });

                iconoMapkey01 = L.icon.mapkey({
                  icon:"school",
                  color:'#725139',
                  background:'#f2c357',
                  size:30
                });

                iconoMapkey02 = L.icon.mapkey({
                  icon:"tree-conifer",
                  color:'#00F1DD',
                  background:'#975353',
                  size:30
                });
                
                lyrChapultepec = L.imageOverlay('img/chapultepec.png', [[19.42993,-99.20843],[19.40621,-99.17453]], {opacity:0.5}).addTo(mymap);

                // let geoJson = L.geoJSON.ajax('data/argentina.geojson',{
                let geoJson = L.geoJSON.ajax('data/localidades-censalesArg.geojson',{
                // let geoJson = L.geoJSON.ajax('data/asentamientosArg.geojson',{
                    pointToLayer:returnEagleMarker,
                    filter:filterEagleNest
                }).addTo(mymap);

                geoJson.on('data:loaded', function(){
                    mymap.fitBounds(geoJson.getBounds());
                });

                // markerCluster = L.markerClusterGroup();
                // let geoJson2 = L.geoJSON.ajax('data/asentamientosArg.geojson',{
                //     pointToLayer:generarMarcador
                // });
                // geoJson2.on('data:loaded', function(){
                //     markerCluster.addLayer(geoJson2);
                //     markerCluster.addTo(mymap);
                // });

                lyrMarkerCluster = L.markerClusterGroup();
                lyrRaptorNests = L.geoJSON.ajax('data/asentamientosArg.geojson', {pointToLayer:generarMarcador});
                lyrRaptorNests.on('data:loaded', function(){
                    lyrMarkerCluster.addLayer(lyrRaptorNests);
                    lyrMarkerCluster.addTo(mymap);
                    mymap.fitBounds(lyrRaptorNests.getBounds());
                });

                objBasemaps = {
                    "Open Street Maps": lyrOSM,
                    "Topo Map":lyrTopo,
                    "Imagery":lyrImagery,
                    "Outdoors":lyrOutdoors,
                    "Watercolor":lyrWatercolor,
                };
                
                mrkMuseo = L.marker([19.42596, -99.1862], {draggable:true});
                mrkMuseo.bindTooltip("Anthropology Museum");
                
                plyParks = L.polygon([[[[19.4068, -99.2015], [19.4166, -99.1803], [19.4299, -99.1825], [19.4191, -99.2056]], [[19.4216, -99.1853], [19.4217, -99.1843], [19.4241, -99.1848], [19.4245, -99.1872]]], [[[19.4042, -99.1895], [19.405, -99.1884], [19.4076, -99.1898], [19.4055, -99.1909]]]], {color:'red', fillColor:'yellow', fillOpacity:0.8});
                
                plnBikeRoute = L.polyline([[[19.4138, -99.1876], [19.4167, -99.188], [19.4165, -99.1873], [19.4214, -99.1872], [19.4215, -99.1841], [19.4258, -99.1843], [19.4259, -99.1852]], [[19.4215, -99.1865], [19.4251, -99.1881], [19.4246, -99.1843]]], {color:'purple'});
                
                fgpChapultepec = L.featureGroup([plnBikeRoute, plyParks]).addTo(mymap);
                fgpDrawnItems = new L.FeatureGroup();
                fgpDrawnItems.addTo(mymap);
                
                objOverlays = {
                    "Chapultepec Image":lyrChapultepec,
                    "Chapultepec Vectors":fgpChapultepec,
                    "Drawn Items":fgpDrawnItems,
                    "Argentina":geoJson,
                };
                
                ctlLayers = L.control.layers(objBasemaps, objOverlays).addTo(mymap);
                
                ctlPan = L.control.pan().addTo(mymap);
                ctlZoomslider = L.control.zoomslider({position:'topright'}).addTo(mymap);
                
                ctlMeasure = L.control.polylineMeasure().addTo(mymap);
                ctlSidebar = L.control.sidebar('side-bar').addTo(mymap);
                
                ctlEasybutton = L.easyButton('glyphicon-transfer', function(){
                   ctlSidebar.toggle(); 
                }).addTo(mymap);
                
                ctlSearch = L.Control.openCageSearch({key: '3c38d15e76c02545181b07d3f8cfccf0',limit: 10}).addTo(mymap);
                
                ctlAttribute = L.control.attribution({position:'bottomleft'}).addTo(mymap);
                ctlAttribute.addAttribution('OSM');
                ctlAttribute.addAttribution('&copy; <a href="http://millermountain.com">Miller Mountain LLC</a>');
                
                ctlScale = L.control.scale({position:'bottomleft', metric:false, maxWidth:200}).addTo(mymap);
                ctlMouseposition = L.control.mousePosition().addTo(mymap);
                
                ctlStyle = L.control.styleEditor({position:'topright'}).addTo(mymap);
                
                ctlDraw = new L.Control.Draw({
                    draw:{
                        circle:false
                    },
                    edit:{
                        featureGroup:fgpDrawnItems
                    }
                });
                ctlDraw.addTo(mymap);
                
                mymap.on('draw:created', function(e){
                    console.log(e);
                    fgpDrawnItems.addLayer(e.layer);
                    alert(JSON.stringify(e.layer.toGeoJSON()));
                });
                
                popZocalo = L.popup({maxWidth:200,keepInView:true});
                popZocalo.setLatLng([19.43262, -99.13325]);
                popZocalo.setContent("<h2>Zocalo</h2><img src='img/zocalo.jpg' width='200px'>");
                
                mymap.on('contextmenu', function(e) {
                    var dtCurrentTime = new Date();
                    L.marker(e.latlng).addTo(mymap).bindPopup(e.latlng.toString()+"<br>"+dtCurrentTime.toString());
                });
                
                mymap.on('keypress', function(e) {
                    if (e.originalEvent.key=="l") {
                        mymap.locate();
                    }
                });
                
                mymap.on('locationfound', function(e) {
                    console.log(e);
                    if (mrkCurrentLocation) {
                        mrkCurrentLocation.remove();
                    }
                    mrkCurrentLocation = L.circle(e.latlng, {radius:e.accuracy/2}).addTo(mymap);
                    mymap.setView(e.latlng, 14);
                });
                
                mymap.on('locationerror', function(e) {
                    console.log(e);
                    alert("Location was not found");
                })
                
                mymap.on('zoomend', function(){
                    $("#zoom-level").html(mymap.getZoom());
                });
                
                mymap.on('moveend', function(){
                    $("#map-center").html(LatLngToArrayString(mymap.getCenter()));
                });
                
                mymap.on('mousemove', function(e){
                    $("#mouse-location").html(LatLngToArrayString(e.latlng));
                });
                
                mrkMuseo.on('dragend', function(){
                    mrkMuseo.setTooltipContent("Current Location: "+mrkMuseo.getLatLng().toString()+"<br>"+"Distance to Anthropology Museum: "+mrkMuseo.getLatLng().distanceTo([19.42596, -99.18620]).toFixed(0));
                })
                
                $("#btnLocate").click(function(){
                    mymap.locate();
                });
                
                $("#btnZocalo").click(function(){
                    mymap.setView([19.43262, -99.13325], 17);
                    mymap.openPopup(popZocalo);
                });
                
                $("#btnMuseo").click(function(){
                    mymap.setView([19.42596, -99.1862], 17);
                    mrkMuseo.setLatLng([19.42596, -99.1862]);
                    mrkMuseo.setTooltipContent("Anthropology Museum");
                })
                
                $("#btnBikeRoute").click(function(){
                    mymap.fitBounds(plnBikeRoute.getBounds());
                })
                
                $("#sldOpacity").on('change', function(){
                    $("#image-opacity").html(this.value);
                    lyrChapultepec.setOpacity(this.value);
                });
                
                $("#btnColor").click(function(){
                    fgpChapultepec.setStyle({color:'purple', fillColor:'green', fillOpacity:0.8});
                });
                
                $("#btnAddMuseo").click(function(){
                    if (fgpChapultepec.hasLayer(mrkMuseo)) {
                        fgpChapultepec.removeLayer(mrkMuseo);
                        $("#btnAddMuseo").html("Add Museo To Chapultepec Vectors");
                    } else {
                        fgpChapultepec.addLayer(mrkMuseo);
                        $("#btnAddMuseo").html("Remove Museo From Chapultepec Vectors");
                    }
                });

            });
            
            function LatLngToArrayString(ll) {
//                console.log(ll);
                return "["+ll.lat.toFixed(5)+", "+ll.lng.toFixed(5)+"]";
            }

            function returnEagleMarker(json, latlng){
              console.log('returnEagleMarker', json.properties);
              const att = json.properties;
              if(att.provincia.nombre == 'Tucumán'){
                return L.marker(latlng, {
                  icon:iconoFontAwesome01
                });
              }else if(att.provincia.nombre == 'Ciudad Autónoma de Buenos Aires'){
                return L.marker(latlng, {
                  icon:iconoMapkey01
                });
              }
              return L.circleMarker(latlng, {radius:10, color:'deeppink'}).bindTooltip(att.categoria + ' - ' + att.nombre);

            }
            function filterEagleNest(json){
              const att = json.properties;
              // console.log('filterEagleNest', json);
              // console.log('NAME_1', att.NAME_1);
              if(att.provincia.nombre == 'Tucumán' || att.provincia.nombre == 'Ciudad Autónoma de Buenos Aires'){
                return true;
              }else{
                return false;
              }
              if(att.NAME_1 == 'Tucumán' || att.NAME_1 == 'BuenosAires'){
                return true;
              }else{
                return false;
              }
            }
            
            function generarMarcador(json, latlng){ 
                return L.circle(latlng, optRaptor);
                // return L.marker(latlng, {
                //   icon:iconoMapkey01
                // });
            }         
        </script>
    </body>
</html>
<!-- https://datos.gob.ar/dataset/jgm-servicio-normalizacion-datos-geograficos/archivo/jgm_8.21 -->