<?php include ("cabecalho.php"); ?>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKG5V-TtmWbPq2urULv2uha2-ZGi6_uc0&callback=initMap">
    </script>
<?php include("rodape.php"); ?>