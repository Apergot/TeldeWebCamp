(function(){
    'use strict';

    var regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function(){


        console.log('Perdocorrecto');

        //Campos de los datos de usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');
        

        //Campos para los pases por días
        var pase_dia = document.getElementById('pase_dia');
        var pase_dos_dias = document.getElementById('pase_dos_dias');
        var pase_completo = document.getElementById('pase_completo');

        //Botones y divs
        var calcular = document.getElementById('calcular');
        var errordiv = document.getElementById('error');
        var btnRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var total = document.getElementById('suma-total');

        //Extras
        var numCamisetas = document.getElementById('camiseta');
        var paquetePegatinas = document.getElementById('pegatina');
        if(calcular){
            calcular.addEventListener('click', calcularFactura);
        }
        

        //Para que no se muestren los días que no concuerdan con tu pase
        if(pase_dia){pase_dia.addEventListener('blur', mostrarDias);}
        if(pase_dos_dias){pase_dos_dias.addEventListener('blur', mostrarDias);}
        if(pase_completo){pase_completo.addEventListener('blur', mostrarDias);}
        if(nombre){nombre.addEventListener('blur', validarCampos);}
        if(apellido){apellido.addEventListener('blur',validarCampos);}
        if(email){email.addEventListener('blur',validarCampos);
        email.addEventListener('blur', validarMail);}
 
        function validarCampos(){
            if(this.value == ''){
                errordiv.style.display = 'block';
                errordiv.innerHTML = "Este campo es obligatorio";
                this.style.border = '1px solid red';
                errordiv.style.border= '1px solid red';
            }else{
                errordiv.style.display = 'none';
                this.style.border = '1px solid #cccccc'
            }
        }

        function validarMail(){
            if(this.value.indexOf("@") > -1){
                errordiv.style.display = 'none';
                this.style.border = '1px solid #cccccc'
            }else{
                errordiv.style.display = 'block';
                errordiv.innerHTML = "Correo electrónico incorrecto";
                this.style.border = '1px solid red';
                errordiv.style.border= '1px solid red';
            }
        }

        function calcularFactura(event){

            event.preventDefault();
            if(regalo.value ===''){
                alert('¡Chacho, que es gratis! Elige un regalo, jacos@');
                regalo.focus();
            }else{
                //con el 10 || 0 indicamos que queremos usar el sistema decimal.
                var entradasDia = parseInt(pase_dia.value, 10 || 0),
                    entradasDosDias = parseInt(pase_dos_dias.value, 10 || 0),
                    entradasCompletas = parseInt(pase_completo.value, 10 || 0),
                    totalCamisetas = parseInt(numCamisetas.value, 10 || 0),
                    totalPegatinas = parseInt(paquetePegatinas.value, 10 || 0);

                var totalPagar = (entradasDia*30) +(entradasDosDias*45)+ (entradasCompletas*50) 
                + (totalCamisetas*(12*0.15)) + (totalPegatinas*2);

                var listadoProductos = new Array();
                if(entradasDia >= 1){listadoProductos.push(`${entradasDia} Pases de un día`);}
                if(entradasDosDias >= 1){listadoProductos.push(`${entradasDosDias} Pases de dos días`);}
                if(entradasCompletas >= 1){listadoProductos.push(`${entradasCompletas} Pases fin de semana completo`);}
                if(totalCamisetas >= 1){listadoProductos.push(`${totalCamisetas} Camisetas del evento`);}
                if(totalPegatinas >= 1){listadoProductos.push(`${totalPegatinas} Paquetes de pegatinas`);}
                console.log(listadoProductos);

                lista_productos.innerHTML = '';
                for(let i = 0; i < listadoProductos.length; i++){
                    lista_productos.innerHTML += listadoProductos[i] + '<br>'
                }
                console.log(`${totalPagar}`);
                total.innerHTML = totalPagar.toFixed(2) + '€';
            }
        }

        /**En el caso concreto de los input number me he percatado de que click no vale cuando
         * el usuario llega e introduce el número manualmente, por eso usamos blur*/
        function mostrarDias(){
            var entradasDia = parseInt(pase_dia.value, 10 || 0),
                entradasDosDias = parseInt(pase_dos_dias.value, 10 || 0),
                entradasCompletas = parseInt(pase_completo.value, 10 || 0);
            
            var diasElegidos = new Array();

            if(entradasDia > 0){diasElegidos.push('viernes')}
            if(entradasDosDias > 0){diasElegidos.push('viernes' ,'sabado')}
            if(entradasCompletas > 0){diasElegidos.push('viernes','sabado' ,'domingo')}

            for(let i = 0; i < diasElegidos.length;i++){
                document.getElementById(diasElegidos[i]).style.display = 'block';
            }
        }

    }); //DOM Content loaded

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