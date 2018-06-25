var contInfo = 1;
$(document).ready(function () {
    
    $("#MasInformacion").click(function () {
        if (contInfo <= 3) {
            var $Informacion = $('textarea[class^="ia"]:last');
            var num = parseInt($Informacion.prop("class").match(/\d/g)) + 1;
            var $klonInfo = $Informacion.clone().attr({
                name: 'IA' + num,
                class: 'ia' + num + ' form-control mb-3'
            });
            $Informacion.after($klonInfo.text(''));
            contInfo++
        } else {
            alert("Límite excedido");
        }
    });
    
});
/*
var contInfo = 1;
var contMasInfo = 1;
$(document).ready(function () {
    $("#MasDatos").click(function () {
        if (contMasInfo <= 4) {

        } else {
            alert("Límite excedido");
        }
    });
});
*/