@extends('layout')
@section('content')
  <!DOCTYPE html>
  <html lang="en">
  <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>NOSOTROS</title>
     <link rel=StyleSheet href="{{asset ('css/about.css')}}">
  </head>
  <body>
     <div>
        <img class= "banner" src="{{asset ('img/PAGINA_WEB_JIVSOFT-24-02.png')}}" alt= "banner">
        <img class= "jump" src="{{asset ('img/PAGINA_WEB_JIVSOFT-24-07.png')}}" alt= "salto">
     </div>
     
     <div class="galeria">
        <div>
          <img class="imagen" src="{{asset ('img/PAGINA_WEB_JIVSOFT-24-09.png')}}" alt= "salto">
        </div>
        <div>
           <img class="imagen" src="{{asset ('img/PAGINA_WEB_JIVSOFT-24-15.png')}}" alt= "salto">
        </div>
        <div class="texto">
           <p>Kevin Luna, profesional en el ámbito de remodelación, instalación de pisos y gabinetes, ofrece servicios de calidad a todas las necesidades del proyecto, desde la consulta hasta el ultimo detalla de la obra.</p>
        </div>
     </div>
     <div class="galeria">
        <div>
          <img  class="imagen" src="{{asset ('img/PAGINA_WEB_JIVSOFT-24-10.png')}}" alt= "salto">
        </div>
        <div>
           <img  class="imagen" src="{{asset ('img/PAGINA_WEB_JIVSOFT-24-16.png')}}" alt= "salto">
        </div>
        <div class="texto">
           <p>Un grupo de finqueros de la Provincia de El Oro constituyen una organización para comercializar asociativa mente su producción en el mercado de comercio justo, aprovechar la asociatividad en lo económico, social y de incidencia</p>
        </div>
     </div>
     <div class="galeria">
        <div>
          <img class="imagen" src="{{asset ('img/PAGINA_WEB_JIVSOFT-24-11.png')}}" alt= "salto">
        </div>
        <div>
           <img class="imagen" src="{{asset ('img/PAGINA_WEB_JIVSOFT-24-17.png')}}" alt= "salto">
        </div>
        <div>
           <p>Una empresa líder en el sector radiológico dental en el Ecuador, ofreciendo la mas alta calidad, ademas de seguridad en los estudios, y en las tomas radiográficas </p>
        </div>
     </div>
     <div>
       <img class= "jump" src="{{asset ('img/PAGINA_WEB_JIVSOFT-24-08.png')}}" alt= "salto">
     </div>

     <div>
       <img class="ex" src="{{asset ('img/PAGINA_WEB_JIVSOFT-24-21.png')}}" alt= "salto">
       <img class="ex" src="{{asset ('img/PAGINA_WEB_JIVSOFT-24-22.png')}}" alt= "salto">
     </div>

     
   
  </body>
  </html>
@endsection