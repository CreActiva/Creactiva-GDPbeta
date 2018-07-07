<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Presupuesto</title>

    <link rel="stylesheet" href="css/styles.css">

    <script type="text/javascript" src="js/Html2Canvas0.4.1.js"></script>
    <script type="text/javascript" src="js/jspdf.debug.js"></script>

</head>

<body>
    <script src="js/jquery-3.3.1.min.js"></script>
<?php

$Fecha = $_POST["Fecha"];
$NombreCliente = $_POST["NC"];
$NombreProyecto = $_POST["NP"];

$NombreDatoTrabajo = array($_POST["NDT1"],$_POST["NDT2"],$_POST["NDT3"],$_POST["NDT4"],$_POST["NDT5"]);
$DatoTrabajo = array($_POST["DT1"],$_POST["DT2"],$_POST["DT3"],$_POST["DT4"],$_POST["DT5"]);    
$InfoAdicional = array($_POST["IA1"],$_POST["IA2"],$_POST["IA3"]);

if (($NombreDatoTrabajo[1]) == '') {
    $NombreDatoTrabajo[1] ="<script>$('.D1').remove();</script>";
    $DatoTrabajo[1] ="<script>$('.D1').remove();</script>";
    $NombreDatoTrabajo[2] ="<script>$('.D2').remove();</script>";
    $DatoTrabajo[2] ="<script>$('.D2').remove();</script>";
    $NombreDatoTrabajo[3] ="<script>$('.D3').remove();</script>";
    $DatoTrabajo[3] ="<script>$('.D3').remove();</script>";
    $NombreDatoTrabajo[4] ="<script>$('.D4').remove();</script>";
    $DatoTrabajo[4] ="<script>$('.D4').remove();</script>";
}
    
elseif (($NombreDatoTrabajo[2]) == '') {
    $NombreDatoTrabajo[2] ="<script>$('.D2').remove();</script>";
    $DatoTrabajo[2] ="<script>$('.D2').remove();</script>";
    $NombreDatoTrabajo[3] ="<script>$('.D3').remove();</script>";
    $DatoTrabajo[3] ="<script>$('.D3').remove();</script>";
    $NombreDatoTrabajo[4] ="<script>$('.D4').remove();</script>";
    $DatoTrabajo[4] ="<script>$('.D4').remove();</script>";
}

elseif (($NombreDatoTrabajo[3]) == '') {
    $NombreDatoTrabajo[3] ="<script>$('.D3').remove();</script>";
    $DatoTrabajo[3] ="<script>$('.D3').remove();</script>";
    $NombreDatoTrabajo[4] ="<script>$('.D4').remove();</script>";
    $DatoTrabajo[4] ="<script>$('.D4').remove();</script>";
}
    
elseif (($NombreDatoTrabajo[4]) == '') {
    $NombreDatoTrabajo[4] ="<script>$('.D4').remove();</script>";
    $DatoTrabajo[4] ="<script>$('.D4').remove();</script>";
}

elseif (($InfoAdicional[1]) == '') {
    $InfoAdicional[1] ="";
    $InfoAdicional[2] =" ";
    $InfoAdicional[3] =" ";
}

elseif (($InfoAdicional[2]) == '') {
    $InfoAdicional[2] =" ";
    $InfoAdicional[3] =" ";
}

elseif (($InfoAdicional[3]) == '') {
    $InfoAdicional[3] =" ";
}

$BalanceTotal = $_POST["BT"];
$Moneda = $_POST["Moneda"];

?>
    <!--
        El header se divide en tres partes:
        • #CodBar: Código de barra.
        • #Tit: Título.
        • #ConSide: Zona de Contacto.
    --->

    <header>
        <div id="CodBar">
            <aside id="img"><img src="image/220px-EAN13.png" alt="Codigo de Barras" class="img1"></aside>
        </div>

        <div id="Tit">
            <h2>Presupuesto</h2>
            <!---F=Fecha-->
            <p>FECHA: <span id="Fecha"><?php echo "{$Fecha}"?></span></p>
        </div>

        <div id="ConSide">

            <div id="C1">
                <aside><img src="image/tlf.png" alt="" style="width: 7%;"></aside><p>+58-0414-155-74-01</p>

            </div>

            <div id="C2">
                <aside><img src="image/mundo.png" alt="" style="width: 12%;"></aside>
                <p>https://soycreactivo.com/</p>
            </div>
            <div id="Mail">
                <aside><img src="image/buzon.png" alt="" style="width: 16%;"></aside>
                <p>proyectoscreactiva@gmail.com</p>
            </div>

        </div>
    </header>

    <!--
        El content contiene estos elementos:
        • IC: Información del cliente
        • DC: Data central TABLA
    --->

    <content>
        <!--
            Información del Cliente Area
        --->
        <div id="IC">
                <div id="IC1">
                    <h3><span class="N">Información para el cliente</span></h3>
                    <!--Nombre De Cliente--->
                    <h2 id="Name"><?php echo "{$NombreCliente}"?></h2>
                    <!--Nombre de Proyecto--->
                    <h2 id="NP"><?php echo"{$NombreProyecto}"?></h2>
                </div>

                <!--Logo Seccion Información del cliente--->
                <div id="ICL">
                    <aside><img src="image/CreActivaLogo.png" alt="LogoCreactiva"></aside>
                </div>
        </div>


        <!--
            Data Central Area
        -->
        <!--
        #S = Separador /*width*/
        #C = Contenedor dentro /*padding*/
        --->
        <div id="Title">
           <div id="S"></div>
            <div id="TitleT1">
                <div id="C">
                    <h2 class="N">Nombre de Trabajo</h2>
                </div>
            </div>


            <div id="TitleT2">
                <div id="C">
                    <h2 class="N">Descripción de Trabajo</h2>
                </div>
            </div>
            <div id="S"></div>
        </div>

        <div id="DC">
           <div id="S"></div>
            <div id="NDT">
                <div id="C">
                    <h2><span class="N">Nombre: </span><?php echo"{$NombreDatoTrabajo[0]}"?></h2>
                </div>
            </div>


            <div id="DT">
                <div id="C">
                    <h2><?php echo"{$DatoTrabajo[0]}"?>
                    </h2>
                </div>
            </div>
            <div id="S"></div>
        </div>

        <div id="DC" class="D1">
           <div id="S"></div>
            <div id="NDT">
                <div id="C">
                    <h2><span class="N">Nombre: </span><?php echo"{$NombreDatoTrabajo[1]}"?></h2>
                </div>
            </div>


            <div id="DT">
                <div id="C">
                    <h2><?php echo"{$DatoTrabajo[1]}"?>
                    </h2>
                </div>
            </div>
            <div id="S"></div>
        </div>

        <div id="DC" class="D2">
           <div id="S"></div>
            <div id="NDT">
                <div id="C">
                    <h2><span class="N">Nombre: </span><?php echo"{$NombreDatoTrabajo[2]}"?></h2>
                </div>
            </div>


            <div id="DT">
                <div id="C">
                    <h2><?php echo"{$DatoTrabajo[2]}"?>
                    </h2>
                </div>
            </div>
            <div id="S"></div>
        </div>

        <div id="DC" class="D3">
           <div id="S"></div>
            <div id="NDT">
                <div id="C">
                    <h2><span class="N">Nombre: </span><?php echo"{$NombreDatoTrabajo[3]}"?></h2>
                </div>
            </div>


            <div id="DT">
                <div id="C">
                    <h2><?php echo"{$DatoTrabajo[3]}"?>
                    </h2>
                </div>
            </div>
            <div id="S"></div>
        </div>

        <div id="DC" class="D4">
           <div id="S"></div>
            <div id="NDT">
                <div id="C">
                    <h2><span class="N">Nombre: </span><?php echo"{$NombreDatoTrabajo[4]}"?></h2>
                </div>
            </div>


            <div id="DT">
                <div id="C">
                    <h2><?php echo"{$DatoTrabajo[4]}"?> </h2>
                </div>
            </div>
            <div id="S"></div>
        </div>
    </content>

    <!--
        El footer se divide en tres partes:
        • #IA: Información Adicional.
        • .ia.
        • #Mas: Leer Más.
        • #Bal: Balance total area.
    --->

    <footer>
        <div id="IA">
        <h3>Información Adicional</h3>
        <!--6 listas desordenadas--->
        <ul>
           <!--
           ia = información adicional 
           --->
           <!--207 caracteres--->
            <li class="ia"><?php echo "{$InfoAdicional[0]}"?></li>
            <li class="ia"><?php echo "{$InfoAdicional[1]}"?></li>
            <li class="ia"><?php echo "{$InfoAdicional[2]}"?></li>
        </ul>
        </div>
        <div id="Mas">
            <p>Puedes contactarnos a través de <span class="N">proyectoscreactiva@gmail.com</span></p>
        </div>
        <!---
           BT = Balance total
        --->
          
        <div id="Bal">
            <h2>Balance Total: <span class="BT"><?php echo "{$BalanceTotal}{$Moneda}"?></span></h2>
        </div>
    </footer>
    
    <script type="text/javascript" src="js/impresion.js">
    </script>
</body>