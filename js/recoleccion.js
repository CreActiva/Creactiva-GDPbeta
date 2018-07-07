/**********Duplicador de textarea "Datos del trabajo realizado"**********/
var contMasInfo = 1;
$(document).ready(function () {
    $("#MasDatos").click(function () {
        if ((contMasInfo >= 1 && contMasInfo < 10)){
            contMasInfo++;
            var NDATO = '<textarea maxlength="240" type="text" class="ndt' + contMasInfo + ' form-control mb-2" placeholder="Dato del trabajo' + contMasInfo + '" Name="NDT' + contMasInfo + '" required></textarea>';
            var DATO = '<textarea maxlength="550" type="text" class="dt'+ contMasInfo + ' form-control mb-2" placeholder="Descripción'+ contMasInfo + '" Name="DT'+ contMasInfo + '" required></textarea>';
            $('textarea[name ^= "NDT"]:last').after(NDATO);$('textarea[name ^= "DT"]:last').after(DATO);
        } else {
            alert("Límite excedido");
        }
    });

    $("#MenosDatos").click(function () {
        if (contMasInfo > 1) {
            $('textarea[name ^= "DT"]:last, textarea[name ^= "NDT"]:last').remove();
            contMasInfo--;
        } else {
            alert('Límite de reducción excedido');
        }
    });
});
/**********Duplicador de textarea "Información adicional"**********/
var contInfo = 1;
$(document).ready(function () {
    $("#MasInformacion").click(function () {
        if ((contInfo >= 1) && (contInfo <= 10)) {
            contInfo++;
            var INFO = '<textarea maxlength="210" type="text" class="ia' + contInfo + ' form-control mb-3" placeholder="Información Adicional" Name="IA' + contInfo + '" required></textarea>';
            $('textarea[class ^= "ia"]:last').after(INFO).val('');
        } else {
            alert('Límite excedido');
        }
    });

    $('#MenosInfo').click(function () {
        if (contInfo > 1) {
            $('textarea[class ^= "ia"]:last').remove();
            contInfo--;
        } else {
            alert('Límite de reducción excedido');
        }
    });

});
/**********Limitador de caracteres en input numérico**********/
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