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
                <form action="PaginaDeImpresion.php" method="POST">
                    <div class="from-group mt-5">
                        <h3>Ingresar Fecha</h3>
                        <!--#Fecha--->
                        <input maxlength="8" type="date" class="form-control-sm" name="Fecha" id="Fecha" required>
                    </div>
                    <div class="from-group mt-4">
                        <h3>Nombre de Cliente</h3>
                        <!--#NC: Nombre Del Cliente--->
                        <input maxlength="95" type="text" class="form-control" placeholder="Nombre" Name="NC" id="NC " required>
                    </div>
                    <div class="from-group mt-4">
                        <h3>Nombre del proyecto</h3>
                        <!--#NP:Nombre del Proyecto--->
                        <input maxlength="95" type="text" class="form-control" placeholder="Nombre de proyecto" Name="NP" id="NP" required>
                    </div>
                    <h2 class="mt-5 text-primary">Ingrese datos del trabajo realizado</h2>

                    <!--#NDT: Nombre del dato de trabajo-->
                    <div class="form-row mt-4">
                        <div class="form-group col-md-4">
                            <h4>Nombre del dato de trabajo</h4>
                            <textarea maxlength="240" type="text" class="ndt1 form-control mb-2" placeholder="Dato del trabajo1" Name="NDT1" required></textarea>
                        </div>
                        <div class="form-group col-md-8">
                            <h4>Introduzca dato de trabajo</h4>
                            <textarea maxlength="550" type="text" class="dt1 form-control mb-2" placeholder="Descripción1" Name="DT1" required></textarea>
                        </div>
                        <div class="w-100"></div>
                        <button id="MasDatos" type="button" class="btn btn-outline-primary mr-1">Agregar más datos del trabajo</button>
                        <button id="MenosDatos" type="button" class="btn btn-outline-danger">Eliminar datos</button>
                    </div>


                    <div id="Informacion" class="from-group mt-4">
                        <h3>Introducir información adicional</h3>
                        <!--.ia: información adicional;--->
                        <textarea maxlength="210" type="text" class="ia1 form-control mb-3" placeholder="Información Adicional" Name="IA1" required></textarea>
                    </div>
                    <button id="MasInformacion" type="button" class="btn btn-outline-primary">Agregar más información</button>
                    <button id="MenosInfo" type="button" class="btn btn-outline-danger">Eliminar información</button>
                    <div class="w-100"></div>
                    <div class="from-group mt-4">
                        <h3>Ingresar el balance total del presupuesto</h3>
                        <!--BT: Balance Total--->
                        <input maxlength="20" type="number" class="form-control-sm mb-3" placeholder="XXXX" Name="BT" id="BT" required onKeyDown="Contar()" onKeyUp="Contar()">
                        <h5>Moneda</h5>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="BsF" name="Moneda" class="custom-control-input" value="BsF" required>
                            <label class="custom-control-label" for="BsF">BsF</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="BsS" name="Moneda" class="custom-control-input" value="BsS" required>
                            <label class="custom-control-label" for="BsS">BsS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="Dolar" name="Moneda" class="custom-control-input" value="$" required>
                            <label class="custom-control-label" for="Dolar">Dolar</label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary mt-4" name="submit" id="BS" value="Clickear para generar presupuesto">
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/recoleccion.js"></script>
</body>

</html>
