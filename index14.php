<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Webmap 201</title>
        <link rel="stylesheet" href="src/leaflet.css">
        <link rel="stylesheet" href="css/adminlte.min.css">
        <link rel="stylesheet" href="src/plugins/L.Control.MousePosition.css">
        <link rel="stylesheet" href="src/plugins/L.Control.Sidebar.css">
        <link rel="stylesheet" href="src/plugins/Leaflet.PolylineMeasure.css">
        <link rel="stylesheet" href="src/plugins/easy-button.css">
        <link rel="stylesheet" href="src/plugins/leaflet-styleeditor/css/Leaflet.StyleEditor.css">
        <!-- <link rel="stylesheet" href="src/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="src/plugins/css/fontawesome.min.css">
        <link rel="stylesheet" href="src/plugins/leaflet.awesome-markers.css">
        <!-- <link rel="stylesheet" href="src/plugins/leaflet-mapkey/MapkeyIcons.css"> -->
        <!-- <link rel="stylesheet" href="src/plugins/leaflet-mapkey/L.Icon.Mapkey.css"> -->
        <link rel="stylesheet" href="src/plugins/leaflet-mapkey-icon/L.Icon.Mapkey.css">
        <link rel="stylesheet" href="src/plugins/MarkerCluster.css">
        <link rel="stylesheet" href="src/plugins/MarkerCluster.Default.css">
        
        <script src="src/leaflet-src.js"></script>
        <script src="src/jquery-3.2.0.min.js"></script>
        <script src="src/plugins/L.Control.MousePosition.js"></script>
        <script src="src/plugins/L.Control.Sidebar.js"></script>
        <script src="src/plugins/Leaflet.PolylineMeasure.js"></script>
        <script src="src/plugins/easy-button.js"></script>
        <script src="src/plugins/leaflet-providers.js"></script>
        <script src="src/plugins/leaflet-styleeditor/javascript/Leaflet.StyleEditor.js"></script>
        <script src="src/plugins/leaflet-styleeditor/javascript/Leaflet.StyleForms.js"></script>
        <script src="src/plugins/leaflet.ajax.min.js"></script>
        <script src="src/plugins/leaflet.sprite.js"></script>
        <script src="src/plugins/leaflet.awesome-markers.min.js"></script>
        <!-- <script src="src/plugins/leaflet-mapkey/L.Icon.Mapkey.js"></script> -->
        <script src="src/plugins/leaflet-mapkey-icon/L.Icon.Mapkey.js"></script>
        <script src="src/plugins/leaflet.markercluster.js"></script>
        
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
        <script src="src/plugins/turf.min.js"></script>
        
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
        </div>
        <div id="mapdiv" class="col-md-12"></div>
        <script>
            var mymap;
            var lyrOSM;
            var lyrWatercolor;
            var lyrTopo;
            var lyrImagery;
            var lyrOutdoors;
            var lyrEagleNests;
            var lyrRaptorNests;
            var lyrMarkerCluster;
            var mrkCurrentLocation;
            var fgpDrawnItems;
            var ctlAttribute;
            var ctlScale;
            var ctlMouseposition;
            var ctlMeasure;
            var ctlEasybutton;
            var ctlSidebar;
            var ctlLayers;
            var ctlDraw;
            var ctlStyle;
            var objBasemaps;
            var objOverlays;

            let lyrBuffer;
            let jsonBuffer;
            
            $(document).ready(function(){
                
                mymap = L.map('mapdiv', {center:[19.4, -99.2], zoom:13, zoomControl:false, attributionControl:false});
                lyrOSM = L.tileLayer.provider('OpenStreetMap.Mapnik');
                lyrTopo = L.tileLayer.provider('OpenTopoMap');
                lyrImagery = L.tileLayer.provider('Esri.WorldImagery');
                lyrOutdoors = L.tileLayer.provider('Thunderforest.Outdoors');
                lyrWatercolor = L.tileLayer.provider('Stamen.Watercolor');
                mymap.addLayer(lyrOSM);
                
                objBasemaps = {
                    "Open Street Maps": lyrOSM,
                    "Topo Map":lyrTopo,
                    "Imagery":lyrImagery,
                    "Outdoors":lyrOutdoors,
                    "Watercolor":lyrWatercolor
                };
                
                fgpDrawnItems = new L.FeatureGroup();
                fgpDrawnItems.addTo(mymap);
                
                lyrMarkerCluster = L.markerClusterGroup();
                lyrRaptorNests = L.geoJSON.ajax('data/localidades-censalesArg.geojson', {pointToLayer:returnRaptorMarker});
                lyrRaptorNests.on('data:loaded', function(){
                    lyrMarkerCluster.addLayer(lyrRaptorNests);
                    lyrMarkerCluster.addTo(mymap);
                });

                // let lyrBuffer;
                // let jsonBuffer;
                let contornosArg = L.geoJSON.ajax('data/argentina.geojson', {
                    style:estiloContornoArg,
                    onEachFeature:procesarLineasContornoArgentina,
                    filter: filtroContornosArgentina
                }).addTo(mymap);

                contornosArg.on('data:loaded', function(){
                    jsonBuffer = turf.buffer(contornosArg.toGeoJson(), 0.3, 'kilometers');
                    lyrBuffer  = L.geoJSON(jsonBuffer, {
                        style : {
                            color:'yellow',
                            dashArray: '5,5',
                            fillOpacity: 0
                        }
                    }).addTo(mymap);

                    contornosArg.bringToFont();
                });

                lyrEagleNests = L.geoJSON.ajax('data/localidades-censalesArg.geojson', {pointToLayer:returnEagleMarker}).addTo(mymap);
                lyrEagleNests.on('data:loaded', function(){
                    mymap.fitBounds(lyrEagleNests.getBounds());
                });
                
                objOverlays = {
                    "Eagle Nest":lyrEagleNests,
                    "Raptor Nest":lyrMarkerCluster,
                    "Drawn Items":fgpDrawnItems
                };
                
                ctlLayers = L.control.layers(objBasemaps, objOverlays).addTo(mymap);
                
                ctlSidebar = L.control.sidebar('side-bar').addTo(mymap);
                
                ctlEasybutton = L.easyButton('glyphicon-transfer', function(){
                   ctlSidebar.toggle(); 
                }).addTo(mymap);
                
                ctlAttribute = L.control.attribution().addTo(mymap);
                ctlAttribute.addAttribution('OSM');
                ctlAttribute.addAttribution('&copy; <a href="http://millermountain.com">Miller Mountain LLC</a>');
                
                ctlScale = L.control.scale({position:'bottomleft', metric:false, maxWidth:200}).addTo(mymap);

                ctlMouseposition = L.control.mousePosition().addTo(mymap);
                
                ctlStyle = L.control.styleEditor({position:'topright'}).addTo(mymap);
                
                ctlDraw = new L.Control.Draw({
                    draw:{
                        circle:false,
                        rectangle:false,
                    },
                    edit:{
                        featureGroup:fgpDrawnItems
                    }
                });
                ctlDraw.addTo(mymap);
                ctlMeasure = L.control.polylineMeasure().addTo(mymap);
                
                mymap.on('draw:created', function(e){
                    fgpDrawnItems.addLayer(e.layer);
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
                
                $("#btnLocate").click(function(){
                    mymap.locate();
                });
            });
            
            function LatLngToArrayString(ll) {
//                console.log(ll);
                return "["+ll.lat.toFixed(5)+", "+ll.lng.toFixed(5)+"]";
            }
            
            function returnEagleMarker(json, latlng){
                var att = json.properties;
                console.log('att', att);
                if (att.status=='ACTIVE NEST') {
                    var clrNest = 'deeppink';
                } else {
                    var clrNest = 'red';
                }
                return L.circle(latlng, {radius:2000, color:clrNest,fillColor:'green', fillOpacity:0.0, opacity: 0.3}).bindTooltip("<h4>Nombre: "+att.nombre+"</h4>Categoria: "+att.categoria);
            }
            
            function returnRaptorMarker(json, latlng){
                var att = json.properties;
                switch (att.recentspecies) {
                    case 'Red-tail Hawk':
                        var radRaptor = 533;
                        break;
                    case 'Swainsons Hawk':
                        var radRaptor = 400;
                        break;
                    default:
                        var radRaptor = 804;
                        break;
                }
                switch (att.recentstatus) {
                    case 'ACTIVE NEST':
                        var optRaptor = {radius:radRaptor, color:'deeppink', fillColor:"blue", fillOpacity:0.5};
                        break;
                    case 'INACTIVE NEST':
                        var optRaptor = {radius:radRaptor, color:'blue', fillColor:'blue', fillOpacity:0.5};
                        break;
                    case 'FLEDGED NEST':
                        var optRaptor = {radius:radRaptor, color:'deeppink', fillColor:"blue", fillOpacity:0.5, dashArray:"2,8"};
                        break;
                }
                return L.circle(latlng, optRaptor).bindPopup("<h4>Raptor Nest: "+att.Nest_ID+"</h4>Status: "+att.recentstatus+"<br>Species: "+att.recentspecies+"<br>Last Survey: "+att.lastsurvey);
                
            }

            function random_color( format ){
              var rint = Math.floor( 0x100000000 * Math.random());
              switch( format ){
                case 'hex':
                  return '#' + ('00000'   + rint.toString(16)).slice(-6).toUpperCase();
                case 'hexa':
                  return '#' + ('0000000' + rint.toString(16)).slice(-8).toUpperCase();
                case 'rgb':
                  return 'rgb('  + (rint & 255) + ',' + (rint >> 8 & 255) + ',' + (rint >> 16 & 255) + ')';
                case 'rgba':
                  return 'rgba(' + (rint & 255) + ',' + (rint >> 8 & 255) + ',' + (rint >> 16 & 255) + ',' + (rint >> 24 & 255)/255 + ')';
                default:
                  return rint;
              }
            }

            let coloresProvincias = {};

            function estiloContornoArg(json){
                const prop = json.properties;
                if(typeof coloresProvincias[prop.NAME_1] == 'undefined'){
                  coloresProvincias[prop.NAME_1] = random_color('hex');
                }
                if(prop.NAME_2 == 'AlmiranteBrown'){
                    // console.log(coloresProvincias[prop.NAME_1]);
                    return { color : coloresProvincias[prop.NAME_1] , fillColor:'red', fillOpacity: .4 };
                }else{
                    return { color : coloresProvincias[prop.NAME_1] };
                }
            }

            function procesarLineasContornoArgentina(json, lyr){
                const prop = json.properties;
                // console.log(prop);
                lyr.bindTooltip(`<h6>Provincia: ${prop.NAME_1} - Localidad: ${prop.NAME_2}</h6>`);
            }

            function filtroContornosArgentina(json){
                const prop = json.properties;
                // console.log(prop.NAME_1);
                if(prop.NAME_1 == 'Chaco' || prop.NAME_1 == 'LaPampa'){
                    return false;
                }else{
                    return true;
                }
            }
            
        </script>
    </body>
</html>