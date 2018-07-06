<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Página de recolección</title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Recoleccion.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-primary">Generar Presupuesto</h1>
            </div>

            <div class="w-100"></div>


            <div class="col-12">
                <!--
        #forajax: Formulario Ajax NO LO PUDE HACER
        #PhpPost HECHO
    --->
                <form action="PaginaDeImpresion.php" method="POST">
                    <div class="from-group mt-5">
                        <h3>Ingresar Fecha</h3>
                        <!--
                #Fecha
            --->
                        <!--
                Los inputs numéricos no pueden ser limitados por maxlength, usar funcion substr() para limitar los caracteres 
            --->
                        <input maxlength="8" type="date" class="form-control-sm" placeholder="DD/MM/AA" name="Fecha" id="Fecha" required>
                    </div>

                    <div class="from-group mt-4">
                        <h3>Nombre de Cliente</h3>

                        <!--
                #NC: Nombre Del Cliente
            --->
                        <input maxlength="95" type="text" class="form-control" placeholder="Nombre" Name="NC" id="NC " required>
                    </div>

                    <div class="from-group mt-4">
                        <h3>Nombre del proyecto</h3>

                        <!--
                #NP:Nombre del Proyecto
            --->
                        <input maxlength="95" type="text" class="form-control" placeholder="Nombre de proyecto" Name="NP" id="NP" required>
                    </div>
                    <h2 class="mt-5 text-primary">Datos del trabajo realizado</h2>

                    <div id="DatosTabla">
                        <div class="from-group mt-4">
                            <h3>Nombre del dato</h3>
                            <!--
                <h6>Nota: ingrese esta etiqueta "br/" entre estas comillas españolas "<>". si desea hacer un salto de linea por favor no agreguen mas de 5-6 saltos.</h6>
                --->
                            <!--
                    #NDT: Nombre del dato de trabajo
                --->
                            <textarea maxlength="240" type="text" class="form-control mb-3" placeholder="Dato del trabajo1" Name="NDT1" id="NDT1" required></textarea>
                            <!--MAQUETACION DE IDEA-->
                            <textarea id="delDT2" class="d-none" name="NDT2"></textarea>
                            <textarea id="del3" class="d-none" name="NDT3"></textarea>
                            <textarea id="del4" class="d-none" name="NDT4"></textarea>
                            <textarea id="del5" class="d-none" name="NDT5"></textarea>
                            
                        </div>

                        <div class="from-group mt-4">
                            <h3>Desarrollo de descripción de dato realizado</h3>
                            <!--
                    #DT: Dato del trabajo
                --->
                            <textarea maxlength="550" type="text" class="form-control mb-3" placeholder="Descripción1" Name="DT1" id="DT1" required></textarea>
                            <!--MAQUETACION DE IDEA-->
                            <textarea id="del2" class="d-none" name="DT2"></textarea>
                            <textarea id="del3" class="d-none" name="DT3"></textarea>
                            <textarea id="del4" class="d-none" name="DT4"></textarea>
                            <textarea id="del5" class="d-none" name="DT5"></textarea>
                            
                        </div>
                    </div>
                    <div id="Despues"></div>

                    <button id="MasDatos" type="button" class="btn btn-outline-primary">Agregar más datos del trabajo</button>

                    <button id="MenosDatos" type="button" class="btn btn-outline-danger">Eliminar datos</button>


                    <div id="Informacion" class="from-group mt-4">
                        <h3>Introducir información adicional</h3>

                        <!--
                .ia: información adicional
                #BS: Boton safe
            --->
                        <textarea maxlength="210" type="text" class="ia1 form-control mb-3" placeholder="Información Adicional" Name="IA1" required></textarea>
                        <!--Textareas ocultos envían información en blanco--> 
                        <textarea id="DelIA2" class="d-none" name="IA2"></textarea>
                        <textarea id="DelIA3" class="d-none" name="IA3"></textarea>
                        
                        
                    </div>

                    <div id="despues"></div>
                    <button id="MasInformacion" type="button" class="btn btn-outline-primary">Agregar más información</button>
                    <button id="MenosInfo" type="button" class="btn btn-outline-danger">Eliminar información</button>
                    <div class="w-100"></div>

                    <div class="from-group mt-4">
                        <h3>Ingresar el balance total del presupuesto</h3>

                        <!--
                BT: Balance Total
            --->
                        <input maxlength="20" type="number" class="form-control-sm mb-3" placeholder="XXXX" Name="BT" id="BT" required onKeyDown="Contar()" onKeyUp="Contar()">
                        <!-- Contador retroceso de caracteres
                        <input type="text" id="Cont" value="15" >
                        -->
                        <h5>Moneda</h5>
                        <!--Estructura del label
                        <label for="element_id">
                        
                        --->
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="BsF" name="Moneda" class="custom-control-input" value = "BsF" required>
                            <label class="custom-control-label" for="BsF">BsF</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="BsS" name="Moneda" class="custom-control-input"  value = "BsS" required>
                            <label class="custom-control-label" for="BsS">BsS</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="Dolar" name="Moneda" class="custom-control-input" value = "$" required>
                            <label class="custom-control-label" for="Dolar">Dolar</label>
                        </div>
                        
                    </div>

                    <input type="submit" class="btn btn-primary mt-4" name="submit" id="BS" value="Clickear para generar presupuesto">
                    
                    <?php $ContInfo = '<script>document.write(contInfo)</script>'?>
                </form>
            </div>


        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/recoleccion.js"></script>
</body>

</html>