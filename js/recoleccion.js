/*Duplicador de textarea "Información adicional"*/
var contInfo = 1;
var $klonInfo;
$(document).ready(function () {

    $("#MasInformacion").click(function () {
        if (contInfo < 3) { 
            contInfo++;
            //Selector class="NC"
            var $Informacion = $('textarea[class^="ia"]:last');

            //Parse: Analizar gramaticalmente; Int: enteros
            //La función parseInt, analiza un texto y obtiene los valores integer
            //meta aracter /\d/g : Da valor numérico del  0 al 9 separado en ","
            //meta caracter /\D/g : Da valor char separado en ","
            //.prop obtiene el valor de la propiedad
            var num = parseInt($Informacion.prop("class").match(/\d/g)) + 1;

            //el metodo .attr() puede editar los atributos en el html 
            $("#DelIA" + contInfo).remove();
            
            //val('') edita el value del input
            $klonInfo = $Informacion.clone().attr({
                name: 'IA' + num,
                class: 'ia' + num + ' form-control mb-3'
            }).val('');
            
            //el metodo .after() coloca contenido después de elementos seleccionados
            $('header #CodBar').append('<p>Hola<p>');
            $Informacion.after($klonInfo);
        } else {
            alert("Límite excedido");
        }
    });

    $('#MenosInfo').click(function () {
        if (contInfo > 1) {
            //Remueve la class que seleccioné y le resta al contador del inputs
            
            $kloneInfo = $('textarea[name ^= "IA"]:last').clone().attr({
                name: 'IA' + contInfo,
                class: 'd-none',
                id: 'DelIA' + contInfo  
            }).val('');
            
            $('textarea[class^="ia"]:last').remove();
            
            $('textarea[class^="ia"]:last').after($kloneInfo);
            contInfo--;
        } else {
            alert('Límite de reducción excedido');
        }
    });

});



/*Duplicador de textarea "Datos del trabajo realizado"*/
var contMasInfo = 1;
$(document).ready(function () {
    $("#MasDatos").click(function () {
        if (contMasInfo <= 4) {
            var $NDT = $('textarea[id ^= "NDT"]:last');
            var $DT = $('textarea[id ^= "DT"]:last');

            $('')
            var NUM = parseInt($NDT.prop("id").match(/\d/g)) + 1;

            var $ClonarNDT = $NDT.clone().attr({
                name: 'NDT' + NUM,
                id: 'NDT' + NUM,
                placeholder: 'Dato del trabajo' + NUM
            }).val('');

            var $ClonarDT = $DT.clone().attr({
                name: 'DT' + NUM,
                id: 'DT' + NUM,
                placeholder: 'Descripción' + NUM
            }).val('');

            $NDT.after($ClonarNDT.text(''));
            $DT.after($ClonarDT.text(''));
            contMasInfo++;
        } else {
            alert("Límite excedido");
        }
    });

    $("#MenosDatos").click(function () {
        if (contMasInfo > 1) {
            $('textarea[id ^= "NDT"]:last').remove();
            $('textarea[id ^= "DT"]:last').remove();
            contMasInfo--;
        } else {
            alert('Límite de reducción excedido');
        }
    });
});

/*Limitador de caracteres en input numérico*/
function Contar() {
    var max = 15;
    var cadena = document.getElementById("BT").value;
    var i = cadena.length;
    if (i <= max) {
        //Contador retro de caracteres
        //document.getElementById("Cont").value = max - i;
        //
    } else {
        document.getElementById("BT").value = cadena.substr(0, max);
    }
}
/*MAQUETACION DE IDEA. CUANDO SE DUPLIQUE EL FORMULARIO, SE ELIMINARA LOS ID "Del" correspondiente al nùmero de inputs creados */