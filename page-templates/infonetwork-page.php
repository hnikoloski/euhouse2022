<?php

/*Template Name: Info network*/

get_header(); ?>


<header class="single-page-header page-padding-x">

  <div class="the-content">
    <h1 class="heading w-fit-content red-bg animated text-animation add-active fadeInUp"><?= the_title(); ?></h1>
  </div>
</header>

<div class="container page-padding-x">
  <div class="row">
    <div class="col-md-12">
      <?php while (have_posts()) : the_post(); ?>


        <div class="page-content">
          <?php echo the_content(); ?>
        </div>

      <?php endwhile; ?>


      <div id="map_wrapper">
        <div id="map_canvas1" class="mapping"></div>
      </div>



      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBgAkv0vX0ZZ-VI6Z7vdqj1_RUKgNnTFmY'></script>

      <script type="text/javascript">
        jQuery(function($) {
          // Asynchronously Load the map API 
          //var script = document.createElement('script');
          // script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
          //document.body.appendChild(script);
        });

        function initialize() {
          var map;
          var bounds = new google.maps.LatLngBounds();
          var mapOptions = {
            center: new google.maps.LatLng(41.5359184, 21.6917782),

            mapTypeId: google.maps.MapTypeId.ROADMAP,
            closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",

            zoomControl: true,
            zoomControlOptions: {
              position: google.maps.ControlPosition.RIGHT_CENTER
            },

            scaleControl: true,
            streetViewControl: false,
            streetViewControlOptions: {
              position: google.maps.ControlPosition.RIGHT_TOP
            },
          };

          var styles = [{
            "featureType": "poi.park",
            "stylers": [{
              "color": "#CBDFAA"
            }]
          }, {
            "featureType": "landscape.man_made",
            "stylers": [{
                "hue": "#E9E5DC"
              },
              {
                "saturation": 5
              }
            ]
          }];

          // Display a map on the page
          map = new google.maps.Map(document.getElementById("map_canvas1"), mapOptions);
          map.setOptions({
            styles: styles
          });
          map.setTilt(45);

          // Multiple Markers
          var markers = [

            <?php
            $c = 0;

            $args = array('post_type' => 'infonetwork', 'posts_per_page' => 200, 'suppress_filters' => 0);
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
              $c++; ?>['<?php the_field('city'); ?>', <?php the_field('latitude'); ?>, <?php the_field('longitude'); ?>, 'https://www.euhouse.mk/wp-content/themes/euhouse/img/eu-pin.png'],


            <?php endwhile; ?>

            <?php wp_reset_query(); ?>

          ];

          // Info Window Content
          var infoWindowContent = [

            <?php
            $c = 0;

            $args = array('post_type' => 'infonetwork', 'posts_per_page' => 200, 'suppress_filters' => 0);
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
              $c++; ?>['<div class="info_content">' +
                '<div class="info">' +
                '<h3><?php strip_tags(the_title()); ?></h3>' +
                '<p class="telefon"><?php echo __('Phone:', 'euhouse'); ?> <?php the_field('phone'); ?></p>' +
                '<p class="adresa"><?php echo __('Address:', 'euhouse'); ?> <strong><?php the_field('address'); ?> </strong>' +



                '</div></div>'],


            <?php endwhile; ?>

            <?php wp_reset_query(); ?>


          ];

          // Display multiple markers on a map
          var infoWindow = new google.maps.InfoWindow(),
            marker, i;

          // Loop through our array of markers & place each one on the map  
          for (i = 0; i < markers.length; i++) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
              position: position,
              map: map,
              title: markers[i][0],
              icon: markers[i][3]
            });

            // Allow each marker to have an info window    
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
              return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
              }
            })(marker, i));

            // Automatically center the map fitting all markers on the screen
            map.fitBounds(bounds);
          }

          // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
          var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(9);
            google.maps.event.removeListener(boundsListener);
          });

        }
        google.maps.event.addDomListener(window, 'load', initialize);
      </script>


    </div>

  </div>
</div>



<?php get_footer(); ?>