/*Duplicador de textarea "Información adicional"*/

var contInfo = 1;
$(document).ready(function () {
    
    $("#MasInformacion").click(function () {
        if (contInfo <= 3) {
            //Selector class="NC"
            var $Informacion = $('textarea[class^="ia"]:last'); 
            
            //Parse: Analizar gramaticalmente; Int: enteros
            //La función parseInt, analiza un texto y obtiene los valores integer
            //meta aracter /\d/g : Da valor numérico del  0 al 9 separado en ","
            //meta caracter /\D/g : Da valor char separado en ","
            //.prop obtiene el valor de la propiedad
            var num = parseInt($Informacion.prop("class").match(/\d/g)) + 1;
            
            //el metodo .attr() puede editar los atributos en el html 
            var $klonInfo = $Informacion.clone().attr({
                name: 'IA' + num,
                class: 'ia' + num + ' form-control mb-3'
            });
            
            //el metodo .after() coloca contenido después de elementos seleccionados
            //.text() da un texto por medio de elementos seleccionados
            $Informacion.after($klonInfo.text(''));
            contInfo++;
        } else {
            alert("Límite excedido");
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

                var NUM = parseInt($NDT.prop("id").match(/\d/g)) + 1;

                var $ClonarNDT = $NDT.clone().attr({
                    name: 'NDT' + NUM,
                    id: 'NDT' + NUM,
                    placeholder: 'Dato del trabajo' + NUM
                }); 
            
                var $ClonarDT = $DT.clone().attr({
                    name: 'DT' + NUM,
                    id: 'DT' + NUM,
                    placeholder: 'Descripción' + NUM
                });
            
            $NDT.after($ClonarNDT.text(''));
            $DT.after($ClonarDT.text(''));
            contMasInfo++;
        } else {
            alert("Límite excedido");
        }
    });
});
