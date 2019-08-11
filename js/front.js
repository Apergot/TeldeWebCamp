(function(){
    'use strict';
    document.addEventListener('DOMContentLoaded', function(){
        //Usando leaflet, la libreria para el mapa que queremos mostrar.
        var map = L.map('map', {
            zoomControl: false
          }).setView([27.998418, -15.413518], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([27.998418, -15.413518]).addTo(map)
            .bindPopup('TeldeWebCamp')//aquí admite html, con lo cual podemos hacer lo que queramos con css agregando una clase
            .openPopup();

            /*Esto es un hover para el pin básicamente.
            .bindTooltip('Prueba')
            .openTooltip();
            */
           /*zindex no me funcionaba y 
           https://stackoverflow.com/questions/34270421/z-index-not-working-as-intended
           */ 
           var mapNav = document.getElementById("map-nav");

           var mapPane = document.querySelector(".leaflet-map-pane");
   
           var rxTranslate = /translate(?:3d)?\(([^\)]+)\)/i;
   
        var observer = new MutationObserver(function(mutations) {
           if (mutations.some(m => m.attributeName === "style")) {
               // apply an inverse transform
               mapNav.style.transform = "translate(" + mapPane
               .style
               .transform
               .match(rxTranslate)[1]
               .split(",")
               .slice(0, 2) /* extract only x and y; discard z */
               .map(n => parseFloat(n) * -1 + "px") /* invert values */ + ")";
           }
        });
   
        observer.observe(mapPane, {
            attributes: true
        });
    });

})();

$(function(){

    //Navbar fija
    var windowHeight = $(window).height();
    var barrAltura = $('.barra').innerHeight();

    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > windowHeight){
            $('.barra').addClass('fixed');
            $('body').css({'margin-top': barrAltura+'px'});
        }else{
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top': '0'});
        }
    });

    //Menú móvil responsive
    $('.menu-movil').on('click', function(){
        $('.navegacion-principal').slideToggle();
    });

    //Programa del evento
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');

    $('.menu-programa a').on('click', function(){
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);
    });
});