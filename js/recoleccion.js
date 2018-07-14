/**********Duplicador de textarea "Datos del trabajo realizado"**********/
$(document).ready(function () {
    var contDatos = 1;
    var contInfo = 1;
    $('.C1').val(contDatos);
    $('.C2').val(contInfo);
    
    $("#MasDatos").click(function() {
        if ((contDatos >= 1 && contDatos < 10)){
            contDatos++;
            var NDATO = '<textarea maxlength="240" type="text" class="ndt' + contDatos + ' form-control mb-2" placeholder="Dato del trabajo' + contDatos + '" Name="NDT' + contDatos + '" required></textarea>';
            var DATO = '<textarea maxlength="550" type="text" class="dt'+ contDatos + ' form-control mb-2" placeholder="Descripción'+ contDatos + '" Name="DT'+ contDatos + '" required></textarea>';
            $('textarea[name ^= "NDT"]:last').after(NDATO);$('textarea[name ^= "DT"]:last').after(DATO);
            $('.C1').val(contDatos);
        } else {
            alert("Límite excedido");
        }
    });

    $("#MenosDatos").click(function () {
        if (contDatos > 1) {
            $('textarea[name ^= "DT"]:last, textarea[name ^= "NDT"]:last').remove();
            contDatos--;
            $('.C1').val(contDatos);
        } else {
            alert('Límite de reducción excedido');
        }
    });
    
    $("#MasInformacion").click(function () {
        if ((contInfo >= 1) && (contInfo <= 10)) {
            contInfo++;
            var INFO = '<textarea maxlength="210" type="text" class="ia' + contInfo + ' form-control mb-3" placeholder="Información Adicional" Name="IA' + contInfo + '" required></textarea>';
            $('textarea[class ^= "ia"]:last').after(INFO).val('');
            $('.C2').val(contInfo);
        } else {
            alert('Límite excedido');
        }
    });

    $('#MenosInfo').click(function () {
        if (contInfo > 1) {
            $('textarea[class ^= "ia"]:last').remove();
            contInfo--;
            $('.C2').val(contInfo);
        } else {
            alert('Límite de reducción excedido');
        }
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
});
