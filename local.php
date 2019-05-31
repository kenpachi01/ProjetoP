<form method="post" action="" id="">
     <meta charset="UTF-8">
    <fieldset>
        <legend>Google Maps</legend>   
        <head>
           
            
        </head>
        <body>
 
      <div>
            <label for="txtEndereco">Endereço:</label>
            <input type="text" id="txtEndereco" name="txtEndereco" />
      </div>
        <div>
            <input type="button" id="btnEndereco" name="btnEndereco" value="Mostrar no mapa" />
        </div>
 
      <div id="mapa" style="height: 500px; width: 500px">
      </div>
 <iframe 
width="600"
heigth="450"
frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCeq5P7v-Nm-AaPau8vlHA50VeTTCjm4qM &q=Brasilia+DF" allowfullscreen>
</iframe>
        <div>
            <input type="submit" value="Enviar" name="btnEnviar" >
            
        </div>
 
        <input type="hidden" id="txtLatitude" name="txtLatitude" >
        <input type="hidden" id="txtLongitude" name="txtLongitude" >
        <script src="mapa.js"></script>
    </fieldset>
</form>
  </body>
