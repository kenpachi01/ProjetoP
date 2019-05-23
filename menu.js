function initMap() {
    const ubicacion = new localizacao(()=>{
        const options = {
            center: {
                lat:ubicacion.latitude,
                lgn:ubicacion.logitude
            },
            zoom: 15
        }
        var map=document.getElementById('map');
        const mapa = new google.maps.Map(map,options);
    });
}


