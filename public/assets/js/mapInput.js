function initialize() {

    $('.address-input').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            return false;
        }
    });
    const locationInputs = document.getElementsByClassName("map-input");

    const autocompletes = [];
    const geocoder = new google.maps.Geocoder;
    for (let i = 0; i < locationInputs.length; i++) {

        const input = locationInputs[i];
        const fieldKey = input.id.replace("-input", "");
        const isEdit = document.getElementsByClassName(fieldKey + "-latitude").value != '' && document.getElementsByClassName(fieldKey + "-longitude").value != '';

        const latitude = parseFloat(document.getElementsByClassName(fieldKey + "-latitude").value) || -33.8688;
        const longitude = parseFloat(document.getElementsByClassName(fieldKey + "-longitude").value) || 151.2195;

        const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {
            center: {lat: latitude, lng: longitude},
            zoom: 13
        });
        const marker = new google.maps.Marker({
            map: map,
            position: {lat: latitude, lng: longitude},
        });

        alert(latitude+'--'+longitude);

        

        marker.setVisible(isEdit);

        const autocomplete = new google.maps.places.Autocomplete(input);
        if(is_map_search_perticular_country){
            autocomplete.setComponentRestrictions({'country': [is_map_search_perticular_country]});
        }
        autocomplete.key = fieldKey;
        autocompletes.push({input: input, map: map, marker: marker, autocomplete: autocomplete});
    }

    for (let i = 0; i < autocompletes.length; i++) {
        const input = autocompletes[i].input;
        const autocomplete = autocompletes[i].autocomplete;
        const map = autocompletes[i].map;
        const marker = autocompletes[i].marker;

        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            marker.setVisible(false);
            const place = autocomplete.getPlace();

            geocoder.geocode({'placeId': place.place_id}, function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    const lat = results[0].geometry.location.lat();
                    const lng = results[0].geometry.location.lng();
                    //setLocationCoordinates(autocomplete.key, lat, lng);

                    $('.address-input').find(".address-latitude-latitude").val(lat);
                    $('.address-input').find(".address-latitude").val(lng);
                }
            });

            if (!place.geometry) {
                window.alert("No details available for input: '" + place.name + "'");
                input.value = "";
                return;
            }

            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

        });
    }
}

function setLocationCoordinates(key, lat, lng) {
   /* const latitudeField = document.getElementsByClassName(key + "-" + "latitude");
    const longitudeField = document.getElementsByClassName(key + "-" + "longitude");
    document.getElementsByClassName(key + "-" + "latitude").value = lat;
    longitudeField.value = lng;*/
}