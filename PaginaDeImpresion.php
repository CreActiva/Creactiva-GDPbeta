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
   <div class="TerminosYCondiciones">
        <div class="TC1">        
            <div>
                <h2 class="N">Términos y condiciones</h2>
            </div>
            <div>
                <h3>1. Información general</h3>
            </div>
            <div>
                <p>Seguidamente, estableceremos los Términos y Condiciones Generales de uso, denominado en lo sucesivo CONDICIONES GENERALES, que regulará la vinculación entre el usuario que decida contratar los “SERVICIOS” que presta SOLUCIONES Y PRODUCCIONES CREACTIVA, C.A., en lo adelante “LA EMPRESA”, responsable de la ejecución correspondiente.</p>
            </div>
            <div>
                <p>Debido a que los “SERVICIOS”, se encuentran en continua transformación como consecuencia del desarrollo de nuevas tecnologías, eventualmente se modificaran cambios que incidan en las presente CONDICIONES GENERALES, se harán los ajustes mediante publicación y actualización de las mismas.  Recomendamos leer con regularidad las CONDICIONES GENERALES.  Contaran con una actualización permanente de nuestras CONDICIONES GENERALES, en nuestro sitio web.</p>
            </div>
            <div>
                <p>Se encuentra  a disposición del “CLIENTE”, continuar o no disfrutando del “SERVICIO”, en caso de que la modificación de las CONDICIONES GENERALES no cubran sus expectativas.  La utilización de los servicios ofrecidos por “LA EMPRESA”, de acuerdo a sus particularidades con cada “CLIENTE”, establecerá las CONDICIONES PARTICULARES”, las que sustituyen, complementan y/o modifican las presentes CONDICIONES GENERALES.</p>
            </div>
            <div>
                <p>En virtud a lo expuesto en el párrafo anterior con antelación a la contratación de los servicios que ofrece “LA EMPRESA”, “EL CLIENTE”, deberá leer con especial atención y aceptar las CONDICIONES PARTICULARES, que se publicarán en los mismos medios que las CONDICIONES GENERALES.</p>
            </div>
            <div>
                <p>Adicionalmente, al contratar los “SERVICIOS” de “LA EMPRESA”, deriva en una vinculación en el acceso y tratamiento de la información que los “CLIENTES”, ingresen en nuestra base de datos.  En tal sentido, presupone el tratamiento de datos personales de nuestro “CLIENTE”, por parte del responsable de “LA EMPRESA”.  Por consiguiente, se regulará en el aparte correspondiente la relación entre el encargado de tratamiento que se creará entre el “CLIENTE” y el responsable por parte “LA EMPRESA”, que en lo sucesivo se denominará CONTRATO DE ENCARGADO DE TRATAMIENTO.</p>
            </div>
            <div>
                <p>Una vez suscrito el acuerdo de voluntades o aceptado el contrato de servicios, significa que el “CLIENTE”, acepta cabalmente todas y cada una de las disposiciones descritas en el las CONDICIONES GENERALES, LAS CONDICIONES PARTICULARES y LAS POLITICAS DE PRIVACIDAD, así como EL CONTRATO DE ENCARGADO DE TRATAMIENTO,  en las versiones publicadas en el momento en que el “CLIENTE”, disfrute del “SERVICIO”.</p>
            </div>
            <div>
                <p>Igualmente, en el supuesto caso que la no conformidad por parte del “CLIENTE”, en cuanto a las modificaciones de las CONDICIONES GENERALES, CONDICIONES PARTICULARES, POLITICAS DE PRIVACIDAD, o en cuanto al CONTRATO DE ENCARGADO DE TRATAMIENTO, deberá notificarlo para rescindir el contrato. En todo caso, en una eventual variación de estos apartados deberá confirmar su aceptación para continuar disfrutando del “SERVICIO”.</p>
            </div>
            <div>    
               <h3>2. IDENTIFICACIÓN DEL RESPONSABLE DE TRATAMIENTO</h3>
            </div>
            <div>
               <p>El responsable de tratamiento de datos vinculados con el servicio que ofrece es SAMUEL ENRIQUE GONZALEZ SANCHEZ, con domicilio en la ciudad de Caracas, Municipio Libertador, Parroquia El Recreo, con número de Cedula de Identidad V-19.933.272.  En lo sucesivo EL RESPONSABLE.</p>
            </div>
            <div><h3>3. CONDICIONES DEL SERVICIO</h3></div>
            <div>
                <p>SOLUCIONES Y PRODUCCIONES CREACTIVA, C.A., es una empresa de creativos multimedia, que brinda elaboración de sistemas computarizados con soporte técnico y con especial énfasis en la publicidad web corporativa.  “LA EMPRESA”, desarrolla proyectos audiovisuales de alta calidad contando con equipos multidisciplinarios que brindan diseño grafico, edición de videos, apegados a los más altos estándares de calidad y apegados al marco Legal internacional.</p>
            </div>
    
            <div>
                <p>Por lo anteriormente expuesto “LA EMPRESA”, insta a nuestros potenciales “CLIENTES”, leer con detenimiento, LAS CONDICIONES GENERALES, LAS CONDICIONES PARTICULARES, POLITICAS DE PRIVACIDAD, y en particular el  CONTRATO DE ENCARGADO DE TRATAMIENTO, ya que en ellos se encuentran claramente establecida una serie de consideraciones que determinan los Derechos, sobre la forma en la cual serán tratados los datos personales en cuanto a su obtención y disposición de los mismos por parte de “LA EMPRESA” y la relación entre el “CLIENTE” y el “RESPONSABLE”.</p>
            </div>
            <div>
                <p>Una vez que el usuario desea confirmar que desea contratar los servicios de “LA EMPRESA” y acepta los términos y condiciones, el RESPONSABLE, le enviara un mail confirmando su registro.  Teniendo el cliente la posibilidad de acceder a su cuenta, solicitar modificar o cancelar los datos facilitados, mediante un procedimiento que se determinará en LAS POLITICAS DE PRIVACIDAD.
                Una vez aceptado el “SERVICIO”, el “CLIENTE” declara que:</p>
            </div>
            <div>
                <p>Es mayor de dieciocho años y no se encuentra inhabilitado para contratar.  Además, ha leído y acepta las CONDICIONES GENERALES Y LAS PARTICULARES, ASI COMO LAS POLITICAS DE PRIVACIDAD Y EL CONTRATO DE ENCARGADO DE TRATAMIENTO, sujeto a las Leyes que rigen la materia.</p>
            </div>
        </div>
        <div class="TC2">
            <div>
                <h3>COSTO DEL SERVICIO Y MODALIDAD DE PAGO</h3>
            </div>
            <div>
                <p>“LA EMPRESA” brindará el “SERVICIO” una vez que el “CLIENTE” acepte las CONDICIONES GENERALES” y de acuerdo al requerimiento contratado por el “CLIENTE” en las “CONDICIONES PARTICULARES”, y el “CONTRATO DE TRATAMIENTO”.  Para lo cual “EL CLIENTE” realizará por adelantado el pago con base a las condiciones y/o facilidades seleccionadas en el presupuesto<?php (($Moneda === 'Bs.S.') xor ($Moneda === 'Bs.F.'))? print ', conforme al plan deberá sumársele el importe correspondiente al Impuesto al Valor Agregado IVA.': print '.'; ?></p>
            </div>
            <div>
                <p>Una vez cumplido el contrato y en caso de optar por la continuidad del “SERVICIO”, se podrá revisar la tarifa correspondiente dependiendo de las variaciones económicas.</p>
            </div>
            <div>
                <p>El pago se podrá realizar mediante transferencia bancaria a la cuenta bancaria designada por el RESPONSABLE.</p>
            </div>
            <div>
                <p> “EL RESPONSABLE”, se reserva el derecho de rescindir el contrato, suspendiendo “EL SERVICIO”, si constata que los fondos provenientes del “CLIENTE”, provienen de actividades ilícitas, o incumplen con el cronograma de pago establecido en el Presupuesto.  Lo anterior, sin perjuicio de las acciones de reclamación a que hubiere lugar por parte del “RESPONSABLE” por parte de “LA EMPRESA” exigiéndole al “CLIENTE” por deuda contraída durante la prestación del “SERVICIO”.</p>
            </div>
            <div>
                <h3>VIGENCIA DE LAS CONDICIONES GENERALES</h3>
            </div>
            <div>
                <p>Se considerará el inicio del plazo del contrato a partir del momento en que se haga efectiva la cancelación del primer pago, con lo cual comienza a entrar en vigencia para todas las partes los Términos y CONDICIONES GENERALES, CONDICIONES PARTICULARES, con la vigencia establecida dentro del tiempo y plazo acordado en el presupuesto.</p>
            </div>
            <div>
                <p>“LA EMPRESA” y “EL CLIENTE” podrán rescindir el contrato en cualquier momento, previa notificación a la parte incumplidora por parte de la parte cumplidora de las razones y fundamentos sobre las cuales sustenta el incumplimiento, sin perjuicio de las reclamaciones por los daños y perjuicios ocasionados y demás responsabilidades que existieren de ambas partes.</p>
            </div>
            <div>
                <h3>OBLIGACIONES DE “LA EMPRESA”</h3>
            </div>
            <div>
                <p>“LA EMPRESA”, se obliga al cumplimiento de las siguientes obligaciones fundamentales:</p>
            </div>
            <div>
                <p>• Brindar por escrito al cliente los requerimientos mínimos de operatividad en cuanto a los sistemas y herramientas tecnológicas que debe adquirir “EL CLIENTE”, asumidos con fondos no imputables en el presupuesto ya que no forman parte del “SERVICIO”, pero que son esenciales para la ejecución del proyecto.</p>
            </div>
            <div>
                <h3>OBLIGACIONES DEL “CLIENTE”.</h3>
            </div>
            <div>
                <p>“EL CLIENTE”, se obliga al cumplimiento de lo siguiente:</p>
            </div>
            <div>
                <p>• Notificar periódicamente el nivel de aprobación, aceptación y/o rechazo de cualquier etapa durante la ejecución del contrato, indicando con claridad los aspectos vinculados a su queja para ser atendido por el equipo multidisciplinario de “LA EMPRESA”.</p>
            </div>
            <div>
                <p>• No realizar la contratación durante la vigencia del presente contrato a otro equipo técnico que efectué mediante acceso autorizado por “EL CLIENTE”, a la plataforma informática para realizar cambios y/o modificaciones.</p>
            </div>
            <div>
                <p>• No Ceder, traspasar o vender los derechos asumidos en el presente contrato a un tercero.</p>
            </div>
            <div>
                <h3>PROPIEDAD INTELECTUAL</h3>
            </div>
            <div>
                <p>El Generador Presupuestario, se encuentra registrado a nombre de “LA EMPRESA”.  El “CLIENTE” no podrá utilizar el protocolo computarizado para disponer de este Generador Presupuestario para efectuar cálculos ajenos a la “EMPRESA”.</p>
            </div>    
        </div>
    </div>
<script src="js/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function() {
    ContD = '<?php echo $ContD; ?>';
    parseInt(ContD);
    pdf = new jsPDF('portrait, mm, a4');
    if (ContD <= 8) {
        pdf.addHTML($('.container'),function(){
            pdf.addPage();
            pdf.addHTML($('.info'), function(){
                pdf.addPage();
                pdf.addHTML($('.TC1'), function(){
                    pdf.addPage();
                    pdf.addHTML($('.TC2'),function(){
                       pdf.save('Presupuesto.pdf');
                    });
                });

            });
        });
    }
    else if (ContD > 8 && ContD <= 16) {
        pdf.addHTML($('.container'),function() {
           pdf.addPage();
           pdf.addHTML($('.container1'),function(){
            pdf.addPage();
            pdf.addHTML($('.TC1'), function(){
                pdf.addPage();
                pdf.addHTML($('.TC2'),function(){
                    pdf.save('Presupuesto.pdf');
                });
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
                    pdf.addHTML($('.TC1'), function(){
                        pdf.addPage();
                        pdf.addHTML($('.TC2'),function(){
                            pdf.save('Presupuesto.pdf');
                        });
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
                        pdf.addHTML($('.TC1'), function(){
                            pdf.addPage();
                            pdf.addHTML($('.TC2'),function(){
                                pdf.save('Presupuesto.pdf');
                            });
                        });
                    });
                });
            });
        });
    } else {
        
    }
});
</script>
</body>
