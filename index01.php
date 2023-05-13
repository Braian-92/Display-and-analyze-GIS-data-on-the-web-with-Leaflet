<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/leaflet.css">
  <style>
    .cursor-pointer{
      cursor: pointer;
    }

    .wrapper .content-wrapper {
      min-height: 100vh;
    }
    #mapID{
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
              <div class="card-header bg-olive d-none">
                <h3 class="card-title">
                  Nueva
                </h3>
               
              </div>
              <div id="mapID" class="card-body p-0 m-0 h-100">
                
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
<script type="text/javascript">
	let map = L.map('mapID', {
		center : [ -40.257362, -65.893394 ],
		zoom : 4
	});
	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);
	map.on("moveend", function () {
	   console.log('getCenter', map.getCenter().toString());
	});
	map.on("zoomend", function () {
	   console.log('getZoom', map.getZoom());
	});
</script>