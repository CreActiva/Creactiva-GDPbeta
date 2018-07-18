<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Presupuesto</title>
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" src="js/Html2Canvas0.4.1.js"></script>
    <script type="text/javascript" src="js/jspdf.debug.js"></script>
</head>
<body>
    <?php
    #Contadores de número de campos de información
    $ContD=$_POST['contDatos'];
    $ContI=$_POST['contInfo'];
    $Fecha = $_POST["Fecha"];
    $NombreCliente = $_POST["NC"];
    $NombreProyecto = $_POST["NP"];
    $DatoTrabajo = array($ContD);
    $NombreDatoTrabajo = array($ContD);
    $InfoAdicional = array($ContI);
    $BalanceTotal = $_POST["BT"];
    $Moneda = $_POST["Moneda"];
    settype($ContD,"integer");
    settype($ContI,"integer");
    for ($i = 0; $i < $ContD; $i++) {
        $a = $i + 1;
        $NombreDatoTrabajo[$i] = $_POST['NDT'.$a];
        $DatoTrabajo[$i] = $_POST['DT'.$a];
    }
    for ($i = 0; $i < $ContI; $i++) {
        $a = $i + 1;
        $InfoAdicional[$i] = $_POST['IA'.$a];
    }
    #Variables con html
    $TopContent = '<div id="IC"><div id="IC1"><h3><span class="N">Información para el cliente</span></h3><!--Nombre De Cliente---><h2 id="Name">'.$NombreCliente.'</h2><!--Nombre de Proyecto---><h2 id="NP">'.$NombreProyecto.'</h2></div><!--Logo Seccion Información del cliente---><div id="ICL"><aside><img src="image/CreActivaLogo.png" alt="LogoCreactiva"></aside></div></div><div id="Title"><div id="S"></div><div id="TitleT1"><div id="C"><h2 class="N">Nombre de Trabajo</h2></div></div><div id="TitleT2"><div id="C"><h2 class="N">Descripción de Trabajo</h2></div></div><div id="S"></div></div>';
    $TopInfo = '<div id="IA"><h3>Información Adicional</h3><ul>';
    $BottomInfo = '</ul></div>';
    $Footer = '<footer><div id="Mas"><p>Puedes contactarnos a través de <span class="N">proyectoscreactiva@gmail.com</span></p></div><!---BT = Balance total---><div id="Bal"><h2>Balance Total: <span class="BT">'.$BalanceTotal.''.$Moneda.'</span></h2></div></footer>';
    ?>
    <!--
    El header se divide en tres partes:
    • #CodBar: Código de barra.
    • #Tit: Título.
    • #ConSide: Zona de Contacto.
    --->
    <div class="container">
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
                    <aside><img src="image/tlf.png" alt="" style="width: 5%;margin:7px 0;"></aside>
                    <div class="m">
                    <p>+58-424-159-52-53</p>
                    </div>
                </div>
                <div id="C2">
                    <aside><img src="image/mundo.png" alt="" style="width: 9%;margin: 6px 0;"></aside>
                    <div class="m">
                    <p>www.soycreactivo.com</p>
                    </div>
                </div>
                <div id="Mail">
                    <aside><img src="image/buzon.png" alt="" style="width: 8%;margin: 11px 0;"></aside>
                    <div class="m">  
                    <p>proyectoscreactiva@gmail.com</p>
                    </div>
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
            <?php
            if ($ContD <= 8) {           
                for ($i=0; $i<$ContD; $i++) {
                    $DatosE = '<div id="DC" class="DC'.$i.'"><div id="S"></div><div id="NDT"><div id="C"><h2><span class="N">Nombre: </span>'.$NombreDatoTrabajo[$i].'</h2></div></div><div id="DT"><div id="C"><h2>'.$DatoTrabajo[$i].'</h2></div></div><div id="S"></div></div>';    
                    echo $DatosE;#E: Extraido

                }
                echo '</content>';
                echo $Footer;
            } else {
                for ($i=0; $i<8 ; $i++) {
                    $DatosE = '<div id="DC" class="DC'.$i.'"><div id="S"></div><div id="NDT"><div id="C"><h2><span class="N">Nombre: </span>'.$NombreDatoTrabajo[$i].'</h2></div></div><div id="DT"><div id="C"><h2>'.$DatoTrabajo[$i].'</h2></div></div><div id="S"></div></div>';    
                    echo $DatosE;#E: Extraido
                }
                echo '</content>';
            }
            ?>
    </div>
        <!--    
        El footer se divide en tres partes:
        • #IA: Información Adicional.
        • .ia.
        • #Mas: Leer Más.
        • #Bal: Balance total area.
        --->
    <div class="container1">
        <div class="more0">
            <?php
            if($ContD > 8 and $ContD <= 16) {
                echo $TopContent;
                for ($i=8;$i < $ContD;$i++) {
                    $DatosE = '<div id="DC" class="DC'.$i.'"><div id="S"></div><div id="NDT"><div id="C"><h2><span class="N">Nombre: </span>'.$NombreDatoTrabajo[$i].'</h2></div></div><div id="DT"><div id="C"><h2>'.$DatoTrabajo[$i].'</h2></div></div><div id="S"></div></div>';
                    echo $DatosE;
                }
                echo '</div>';
                echo $Footer;
            } else if($ContD > 16){
                echo $TopContent;
                for ($i=8;$i < 16;$i++) {
                    $DatosE = '<div id="DC" class="DC'.$i.'"><div id="S"></div><div id="NDT"><div id="C"><h2><span class="N">Nombre: </span>'.$NombreDatoTrabajo[$i].'</h2></div></div><div id="DT"><div id="C"><h2>'.$DatoTrabajo[$i].'</h2></div></div><div id="S"></div></div>';
                    echo $DatosE;
                }
                echo '</div>';
            } else { 
                $x = 0;
                echo '</div>';
                echo '<script>document.querySelector(".more'.$x.'").style.display= "none";</script>';}
            ?>
    </div>
    
    <div class="container2">
        <div class="more1">
            <?php
            if($ContD > 16 and $ContD <= 24) {
                echo $TopContent;
                for ($i=16;$i < $ContD;$i++) {
                    $DatosE = '<div id="DC" class="DC'.$i.'"><div id="S"></div><div id="NDT"><div id="C"><h2><span class="N">Nombre: </span>'.$NombreDatoTrabajo[$i].'</h2></div></div><div id="DT"><div id="C"><h2>'.$DatoTrabajo[$i].'</h2></div></div><div id="S"></div></div>';
                    echo $DatosE;
                }                 
                echo '</div>';
                echo $Footer;
            } else if($ContD > 24) {
                echo $TopContent;
                for ($i=16;$i < 24;$i++) {
                    $DatosE = '<div id="DC" class="DC'.$i.'"><div id="S"></div><div id="NDT"><div id="C"><h2><span class="N">Nombre: </span>'.$NombreDatoTrabajo[$i].'</h2></div></div><div id="DT"><div id="C"><h2>'.$DatoTrabajo[$i].'</h2></div></div><div id="S"></div></div>';
                    echo $DatosE;
                }
                echo '</div>';
            } else {
                $x = 1;
                echo '</div>';
                echo '<script>document.querySelector(".more'.$x.'").style.display= "none";</script>';
            }
            ?>
    </div>
   
    
    <div class="container3">
        <div class="more2">
            <?php
            if($ContD > 24 and $ContD <= 32) {
                echo $TopContent;
                for ($i=24;$i < $ContD;$i++) {
                    $DatosE = '<div id="DC" class="DC'.$i.'"><div id="S"></div><div id="NDT"><div id="C"><h2><span class="N">Nombre: </span>'.$NombreDatoTrabajo[$i].'</h2></div></div><div id="DT"><div id="C"><h2>'.$DatoTrabajo[$i].'</h2></div></div><div id="S"></div></div>';
                    echo $DatosE;
                }
                echo '</div>';
                echo $Footer;
            } else if($ContD > 32){
                echo $TopContent;
                for ($i=24;$i <= 32;$i++) {
                    $DatosE = '<div id="DC" class="DC'.$i.'"><div id="S"></div><div id="NDT"><div id="C"><h2><span class="N">Nombre: </span>'.$NombreDatoTrabajo[$i].'</h2></div></div><div id="DT"><div id="C"><h2>'.$DatoTrabajo[$i].'</h2></div></div><div id="S"></div></div>';
                    echo $DatosE;

                }
                echo '</div>';
            } else {
                $x = 2;
                echo '</div>';
                echo '<script>document.querySelector(".more'.$x.'").style.display= "none";</script>';
            }
            ?>
    </div>
    <!--Info: información Adicional -->
   <div class="info">
        <?php
            echo $TopInfo;
            for ($i=0;$i<$ContI;$i++) {
                echo '<li class="ia">'.$InfoAdicional[$i].'</li>';
            }
            echo $BottomInfo;
        ?>
   </div>
<script src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/impresion.js"></script>
<script>
$(document).ready(function() {
    ContD = '<?php echo $ContD; ?>';
    parseInt(ContD);
    pdf = new jsPDF('portrait, mm, a4');
    if (ContD <= 8) {
        pdf.addHTML($('.container'),function(){        
            pdf.addPage();
            pdf.addHTML($('.info'), function(){
                pdf.save('x.pdf');
            });
        });
    }
    else if (ContD > 8 && ContD <= 16) {
        pdf.addHTML($('.container'),function() {
           pdf.addPage();
           pdf.addHTML($('.container1'),function(){
                pdf.addPage();
                pdf.addHTML($('.info'), function(){
                    pdf.save('x.pdf');
                });
           });
        });
    } else if (ContD > 16 && ContD <= 24){
        pdf.addHTML($('.container'),function(){
            pdf.addPage();
            pdf.addHTML($('.container1'),function() {
                pdf.addPage();
                pdf.addHTML($('.container2'),function(){
                    pdf.addPage();
                    pdf.addHTML($('.info'), function() {
                        pdf.save('x.pdf');
                    });
                });
            });
        });
    } else if (ContD > 24 && ContD <= 32){
        pdf.addHTML($('.container'),function(){
            pdf.addPage();
            pdf.addHTML($('.container1'),function(){
                pdf.addPage();
                pdf.addHTML($('.container2'),function(){
                    pdf.addPage();
                    pdf.addHTML($('.container3'),function(){
                        pdf.addPage();
                        pdf.addHTML($('.info'), function(){
                            pdf.save('x.pdf');
                        });
                    });
                });
            });
        });
    } else {
        alert('Sin datos encontrados');
    }
});
</script>
</body>