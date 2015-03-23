  function initialize(elem,lat,lng) {
      //alert(elem);
      // Create the autocomplete object, restricting the search
      // to geographical location types.
      autocomplete = new google.maps.places.Autocomplete(
          /** @type {HTMLInputElement} */(document.getElementById(elem)),
         { types: ['geocode'] });
        // { types: ['(cities)'] });
      // When the user selects an address from the dropdown,
      // populate the address fields in the form.
      google.maps.event.addListener(autocomplete, 'place_changed', function() {
        fillInAddress(lat,lng);
      });
    }

    // [START region_fillform]
    function fillInAddress(lat,lng) {
      // Get the place details from the autocomplete object.
      var place = autocomplete.getPlace();
      document.getElementById(lat).value = place.geometry.location.lat();
      document.getElementById(lng).value = place.geometry.location.lng();

    }

    function geolocate() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var geolocation = new google.maps.LatLng(
              position.coords.latitude, position.coords.longitude);
          autocomplete.setBounds(new google.maps.LatLngBounds(geolocation,
              geolocation));
        });
      }
    }

$( document ).ready(function() {
    var location_counter = 2;
    initialize('autocomplete1','hdnLat1','hdnLong1');
    $('#btnSaveLeague').on('click', function(){
            document.getElementById("formJoin").submit();
    });

    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    var placeSearch, autocomplete;
    var componentForm = {
      street_number: 'short_name',
      route: 'long_name',
      locality: 'long_name',
      administrative_area_level_1: 'short_name',
      country: 'long_name',
      postal_code: 'short_name'
    };



     $('#btnAddLocation').on('click', function(){
           var newTextBoxDiv1 = $(document.createElement('div')).attr({"class":"input-group locationField"})

           newTextBoxDiv1.after().html('</br><input type="text" name="autocomplete' + location_counter +
                '" id="autocomplete' + location_counter + '" placeholder=" Enter Location ' + location_counter + '" onFocus="geolocate()" class="form-control" value="">' +
                '<input type="hidden" id="hdnLat' + location_counter + '" name="hdnLat' + location_counter + '"/>' +
                '<input type="hidden" id="hdnLong' + location_counter + '" name="hdnLong' + location_counter + '"/>'
                );

           newTextBoxDiv1.appendTo("#locfindgroup");
           initialize('autocomplete' + location_counter,'hdnLat' + location_counter,'hdnLong' + location_counter);
           $('#locationCounter').val(location_counter);
           location_counter++;
      });

 });

