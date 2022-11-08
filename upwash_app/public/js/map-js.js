function initialize() {
    const geocoder = new google.maps.Geocoder();
    const NEW_ZEALAND_BOUNDS = {
      north: 65.36,
      south: 59.7,
      west: 20.28,
      east: 32.81,
    };

    const map = new google.maps.Map(document.getElementById("map"), {
        center: {
            lat: 60.169860,
            lng: 24.938270
        },
        zoom: 13,
        mapTypeControl: false,
        mapTypeId: google.maps.MapTypeId.roadmap,
        clickableIcons: false,
        restriction: {
          latLngBounds: NEW_ZEALAND_BOUNDS,
          strictBounds: true,
        },
    });

    var options = {
      componentRestrictions: {country: "fi"}
     };

    // Create the search box and link it to the UI element.
    const input = document.getElementById("adress__location");
    const zipCodes = JSON.parse(document.getElementById("zipCodes").value);
    const postal_code = document.getElementById("postal_code");
    const zip_price = document.getElementById("zip_price");
    
    const header = document.querySelector(".burger");
    map.controls[google.maps.ControlPosition.BOTTOM_CENTER].push(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(header);
    var autocomplete = new google.maps.places.Autocomplete(input, options);
const searchBox = new google.maps.places.SearchBox(input);
    // Bias the SearchBox results towards current map's viewport.
    map.addListener("bounds_changed", () => {
        searchBox.setBounds(map.getBounds());
    });

    function geocodePosition(pos) {
        geocoder.geocode({
            latLng: pos
        }, function(responses) {
            let isZip = false;

            if (responses && responses.length > 0) {
                for(let i in responses[0].address_components) {
                    if(responses[0].address_components[i].types[0] == "postal_code") {
                        isZip = responses[0].address_components[i].long_name;
                        break;
                    }
                }

                const address = responses[0].formatted_address;
                if(isZip){
                    
                    postal_code.value = isZip;
                    if (address.toLowerCase().includes("helsinki") === true || address.toLowerCase().includes("vantaa") === true || address.toLowerCase().includes("espoo") === true || address.toLowerCase().includes("tampere") === true || address.toLowerCase().includes("helsingfors") === true || address.toLowerCase().includes("vanda") === true || address.toLowerCase().includes("esbo") === true || address.toLowerCase().includes("borgå") === true || address.toLowerCase().includes("porvoo") === true || address.toLowerCase().includes("порвоо") === true || address.toLowerCase().includes("sipoo") === true || address.toLowerCase().includes("sibbo") === true || address.toLowerCase().includes("сипоо") === true || address.toLowerCase().includes("хювинкяя") === true || address.toLowerCase().includes("järvenpää") === true || address.toLowerCase().includes("hyvinge") === true || address.toLowerCase().includes("träskända") === true || address.toLowerCase().includes("ярвенпяя") === true || address.toLowerCase().includes("хельсинки") === true || address.toLowerCase().includes("вантаа") === true || address.toLowerCase().includes("эспоо") === true || address.toLowerCase().includes("hyvinkää") === true || address.toLowerCase().includes("tammerfors") === true) {

                        let agree = true;
                        let isZipPrice = false;
                        for(let i in zipCodes){
                            if(zipCodes[i].code == isZip){
                                isZipPrice = zipCodes[i].price;
                                zip_price.value = isZipPrice;
                                break;
                            }
                        }
                        if(isZipPrice !== false) {
                            agree = confirm('Veloitamme sinulta ' + isZipPrice + '€ lisämaksun matkakulujen kattamiseksi')
                        }
                        if(agree){
                            document.getElementById("step2button").style.display = "block";
                        }

                    } else {
                        alert("Pahoittelemme, mutta emme toimi toistaiseksi tällä alueella.");
                        document.getElementById("step2button").style.display = "none";
                        document.querySelector(".step3").classList.remove("section_active");
                        document.querySelector(".step2").classList.add("section_active");
                    }
                }else {
                    alert("Syötäthän koko osoitteesi posti-indeksin ja kaupungin kera, kiitos");
                    document.getElementById("step2button").style.display = "none";
                    document.querySelector(".step3").classList.remove("section_active");
                    document.querySelector(".step2").classList.add("section_active");
                }
                input.value = address;
            } else {
                alert('Cannot determine address at this location.');
            }
        });
    }



    let markers = [];

    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener("places_changed", () => {
        const places = searchBox.getPlaces();
        if (places.length == 0) {
            return;
        }
        var step2button = document.querySelector("#step2button");
        var step2input = document.querySelector("#adress__location");

        let isZip = false;
        for(let i in places[0].address_components) {
            if(places[0].address_components[i].types[0] == "postal_code") {
                isZip = places[0].address_components[i].long_name;
                break;
            }
        }
        if(isZip !== false){
            postal_code.value = isZip;
            if (step2input.value.toLowerCase().includes("helsinki") === true || step2input.value.toLowerCase().includes("vantaa") === true || step2input.value.toLowerCase().includes("espoo") === true || step2input.value.toLowerCase().includes("tampere") === true || step2input.value.toLowerCase().includes("helsingfors") === true || step2input.value.toLowerCase().includes("vanda") === true || step2input.value.toLowerCase().includes("esbo") === true || step2input.value.toLowerCase().includes("borgå") === true || step2input.value.toLowerCase().includes("porvoo") === true || step2input.value.toLowerCase().includes("порвоо") === true || step2input.value.toLowerCase().includes("sipoo") === true || step2input.value.toLowerCase().includes("sibbo") === true || step2input.value.toLowerCase().includes("сипоо") === true || step2input.value.toLowerCase().includes("хювинкяя") === true || step2input.value.toLowerCase().includes("järvenpää") === true || step2input.value.toLowerCase().includes("hyvinge") === true || step2input.value.toLowerCase().includes("träskända") === true || step2input.value.toLowerCase().includes("ярвенпяя") === true || step2input.value.toLowerCase().includes("хельсинки") === true || step2input.value.toLowerCase().includes("вантаа") === true || step2input.value.toLowerCase().includes("эспоо") === true || step2input.value.toLowerCase().includes("hyvinkää") === true || step2input.value.toLowerCase().includes("tammerfors") === true) {
                let agree = true;
                let isZipPrice = false;
                for(let i in zipCodes){
                    if(zipCodes[i].code == isZip){
                        isZipPrice = zipCodes[i].price;
                        zip_price.value = isZipPrice;
                        break;
                    }
                }
                if(isZipPrice !== false) {
                    agree = confirm('Veloitamme sinulta ' + isZipPrice + '€ lisämaksun matkakulujen kattamiseksi')
                }
                if(agree){
                    document.getElementById("step2button").style.display = "flex";
                }

            } else {
                alert("Pahoittelemme, mutta emme toimi toistaiseksi tällä alueella.");
                step2button.style.display = "none";
                document.querySelector(".step3").classList.remove("section_active");
                document.querySelector(".step2").classList.add("section_active");
            }
        } else {
            alert("Syötäthän koko osoitteesi posti-indeksin ja kaupungin kera, kiitos");
            document.getElementById("step2button").style.display = "none";
            document.querySelector(".step3").classList.remove("section_active");
            document.querySelector(".step2").classList.add("section_active");
        }

        // Clear out the old markers.
        markers.forEach((marker) => {
            marker.setMap(null);
        });
        markers = [];



        // For each place, get the icon, name and location.
        const bounds = new google.maps.LatLngBounds();

        places.forEach((place) => {
            if (!place.geometry || !place.geometry.location) {
                console.log("Returned place contains no geometry");
                return;
            }

            const icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25),
            };



            // Create a marker for each place.
            const marker = new google.maps.Marker({
                map: map,

                icon: "../img/marker.svg",
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: place.geometry.location,
            })
            markers.push(marker);

            new google.maps.event.addListener(marker, 'dragend', function() {
                geocodePosition(marker.getPosition());
            });

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
            google.maps.event.addListener(marker, 'dragend', function(event) {
                var geocoder = new google.maps.Geocoder(); // create a geocoder object
                var location = new google.maps.LatLng(event.latLng.lat(), event.latLng.lng()); // turn coordinates into an object
                geocoder.geocode({
                    'latLng': location
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) { // if geocode success
                        var add = results[0].formatted_address; // if address found, pass to processing function


                    };
                });

            });


        });
        map.fitBounds(bounds);
    });

    searchBox.addListener("change", () => {
        const places = searchBox.getPlaces();
        if (places.length == 0) {
            return;
        }
        var step2button = document.querySelector("#step2button");
        var step2input = document.querySelector("#adress__location");

        let isZip = false;
        for(let i in places[0].address_components) {
            if(places[0].address_components[i].types[0] == "postal_code") {
                isZip = places[0].address_components[i].long_name;
                break;
            }
        }
        if(isZip !== false){
            postal_code.value = isZip;
            if (step2input.value.toLowerCase().includes("helsinki") === true || step2input.value.toLowerCase().includes("vantaa") === true || step2input.value.toLowerCase().includes("espoo") === true || step2input.value.toLowerCase().includes("tampere") === true || step2input.value.toLowerCase().includes("helsingfors") === true || step2input.value.toLowerCase().includes("vanda") === true || step2input.value.toLowerCase().includes("esbo") === true || step2input.value.toLowerCase().includes("borgå") === true || step2input.value.toLowerCase().includes("porvoo") === true || step2input.value.toLowerCase().includes("порвоо") === true || step2input.value.toLowerCase().includes("sipoo") === true || step2input.value.toLowerCase().includes("sibbo") === true || step2input.value.toLowerCase().includes("сипоо") === true || step2input.value.toLowerCase().includes("хювинкяя") === true || step2input.value.toLowerCase().includes("järvenpää") === true || step2input.value.toLowerCase().includes("hyvinge") === true || step2input.value.toLowerCase().includes("träskända") === true || step2input.value.toLowerCase().includes("ярвенпяя") === true || step2input.value.toLowerCase().includes("хельсинки") === true || step2input.value.toLowerCase().includes("вантаа") === true || step2input.value.toLowerCase().includes("эспоо") === true || step2input.value.toLowerCase().includes("hyvinkää") === true || step2input.value.toLowerCase().includes("tammerfors") === true) {
                let agree = true;
                let isZipPrice = false;
                for(let i in zipCodes){
                    if(zipCodes[i].code == isZip){
                        isZipPrice = zipCodes[i].price;
                        zip_price.value = isZipPrice;
                        break;
                    }
                }
                if(isZipPrice !== false) {
                    agree = confirm('Veloitamme sinulta ' + isZipPrice + '€ lisämaksun matkakulujen kattamiseksi')
                }
                if(agree){
                    document.getElementById("step2button").style.display = "flex";
                }

            } else {
                alert("Pahoittelemme, mutta emme toimi toistaiseksi tällä alueella.");
                step2button.style.display = "none";
                document.querySelector(".step3").classList.remove("section_active");
                document.querySelector(".step2").classList.add("section_active");
            }
        } else {
            alert("Syötäthän koko osoitteesi posti-indeksin ja kaupungin kera, kiitos");
            document.getElementById("step2button").style.display = "none";
            document.querySelector(".step3").classList.remove("section_active");
            document.querySelector(".step2").classList.add("section_active");
        }

        // Clear out the old markers.
        markers.forEach((marker) => {
            marker.setMap(null);
        });
        markers = [];



        // For each place, get the icon, name and location.
        const bounds = new google.maps.LatLngBounds();

        places.forEach((place) => {
            if (!place.geometry || !place.geometry.location) {
                console.log("Returned place contains no geometry");
                return;
            }

            const icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25),
            };



            // Create a marker for each place.
            const marker = new google.maps.Marker({
                map: map,

                icon: "../img/marker.svg",
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: place.geometry.location,
            })
            markers.push(marker);

            new google.maps.event.addListener(marker, 'dragend', function() {
                geocodePosition(marker.getPosition());
            });

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
            google.maps.event.addListener(marker, 'dragend', function(event) {
                var geocoder = new google.maps.Geocoder(); // create a geocoder object
                var location = new google.maps.LatLng(event.latLng.lat(), event.latLng.lng()); // turn coordinates into an object
                geocoder.geocode({
                    'latLng': location
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) { // if geocode success
                        var add = results[0].formatted_address; // if address found, pass to processing function


                    };
                });

            });


        });
        map.fitBounds(bounds);
    });
}

window.initialize = initialize;
