class localizacao {
    constructor (callback) {
        if(navegador.geolocation) {
            navegador.geolocation.getCurrentPosition((position)=> {
                this.latitude= position.coords.latitude;
                this.longitude= position.coords.longitude;
            callback();    
        } 
            
            
        
    else {
            alert("Seu navegador não suporta geolocalização")
        }
        
    }


