<?php

get_search_form();



?>

<h2 style="color:<?= get_theme_mod('specials_color'); ?>;">

Specials Of The Day: <?= get_theme_mod('food_choice'); ?>

</h2>

The current year is <?= the_current_date(); ?>


<h2>Visit Us On The Map</h2>


<div id="map"></div>
<script>
  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 8
    });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
async defer></script>