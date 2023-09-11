<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Editar Paciente</title>
</head>
<body>
    <header>
        <a href="https://hraei.gob.mx/" target="_blank">HRAEI</a>
        <p style="color:#DDC9A3; margin-top: 15px;">Editar Paciente</p>
        <br>
    </header>
<br>

    <div class="container"  width="100%" height="800px" style="margin-bottom: 100px;">
        <div class="row">
            <div class="col col-2">
                <!--botones-->
                <a href="index.php">
                    <button type="button" class="btn btn-warning">Volver</button>
                </a>
                
            </div> <!-- se cierra div <div class="col col-2">-->
        
            <div class="col col-10">
            <div style="background-color: rgb(154,34,65,0.85);
                        color: aliceblue;
                        text-align: center;
                        margin-top: 20px;">
                <h6>DATOS DEL PACIENTE</h6> 
            </div> 

            <div class="row">
                <div class="col-md-4" id="idcurp"> 
                    <strong style="font-size: 14px;">CURP</strong>
                    <input type="text" class="form-control" id="curp" placeholder="CURP" style="font-size: 13px;">
                </div>

                <div class="col-md-4" id="idnombre">
                    <strong style="font-size: 14px;">Nombre Completo</strong>
                    <input id="nombre" name="nombre" onblur="calcularEdad();" type="text" class="control form-control" value="" style="font-size: 13px;" required>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px; background">Fecha de Nacimiento</strong>
                    <input id="fecha" name="fecha" type="date" value="" onblur="curp2date();" class="control form-control" style="font-size: 13px;" readonly>
                </div>
                <div class="col-md-2">
                    <strong style="font-size: 14px;">Edad</strong>
                    <input id="edad" name="edad" type="text" class="control form-control" value="" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 14px;">Sexo</strong>
                    <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" style="font-size: 13px;" readonly>
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 14px;">Altura Sobre Nivel del Mar</strong>
                    <select name="asnm" id="asnm" class="form-control" style="font-size: 13px;">
                        <option value="Sin Registro">Sin Registro...</option>
                        <option value="Al Nivel del Mar">Al Nivel del Mar</option>
                        <option value="1000 msnm">1000 msnm</option>
                        <option value="2000 msnm">2000 msnm</option>
                        <option value="3000 msnm">3000 msnm</option>
                        <option value="4000 msnm">4000 msnm</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 14px;">Talla</strong>
                    <input type="text" class="form-control" id="talla" name="talla" placeholder="Ejemplo: 1.50" style="font-size: 13px;" required>
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 14px;">Peso</strong>
                    <input type="number" step="any" class="form-control" id="peso" onblur="calculaIMC();" name="peso" style="font-size: 13px;" required>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">IMC</strong>
                    <input type="text" class="form-control" id="imc" onblur="calculaIMC();" name="imc" value="" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Resultado IMC</strong>
                    <input type="text" class="form-control" id="imcdescripcion" name="imcdescripcion" value="" style="font-size: 13px;" readonly>
                </div>

<!-- ***********************************ATENCIÓN MÉDICA*********************************** -->

<div class="col-md-12">
                    <div class="form-header">
                        <h5 class="form-title"
                        style="text-align: center;
                        background-color: rgb(154,34,65,0.55);
                        color: aliceblue;
                        margin-top:5px;
                        font-size: 13px;">
                        CONMORBILIDADES</h5>
                    </div>
                </div>



                <div class="container">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="TIP" value="TIP">
                        <label class="form-check-label" for="TIP" style="font-size:14px;">TIP</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Cáncer" value="Cancer">
                        <label class="form-check-label" for="Cáncer" style="font-size:14px;">Cáncer</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Neumonia" value="Neumonia">
                        <label class="form-check-label" for="Neumonia" style="font-size:14px;">Neumonia</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="DrogasIV" value="Drogas IV">
                        <label class="form-check-label" for="DrogasIV" style="font-size:14px;">Drogas IV</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Eclampsia" value="Eclampsia">
                        <label class="form-check-label" for="Eclampsia" style="font-size:14px;">Eclampsia</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Artropatía" value="Artropatia">
                        <label class="form-check-label" for="Artropatía" style="font-size:14px;">Artropatía</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="LESActivo" value="LESActivo">
                        <label class="form-check-label" for="LESActivo" style="font-size:14px;">LES activo</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Miomatosis" value="Miomatosis">
                        <label class="form-check-label" for="Miomatosis" style="font-size:14px;">Miomatosis</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Nefropatia" value="Nefropatia">
                        <label class="form-check-label" for="Nefropatia" style="font-size:14px;">Nefropatía</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Colelitiasis" value="Colelitiasis">
                        <label class="form-check-label" for="Colelitiasis" style="font-size:14px;">Colelitiasis</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="SxdeHELLP" value="SxdeHELLP">
                        <label class="form-check-label" for="SxdeHELLP" style="font-size:14px;">Sx de HELLP</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="SxNefrotico" value="SxNefrotico">
                        <label class="form-check-label" for="SxNefrotico" style="font-size:14px;">Sx Nefrótico</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Drepanocitica" value="Drepanocitica">
                        <label class="form-check-label" for="Drepanocitica" style="font-size:14px;">Drepanocítica</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Hipotiroidismo" value="Hipotiroidismo">
                        <label class="form-check-label" for="Hipotiroidismo" style="font-size:14px;">Hipotiroidismo</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Hipotiroidismo" value="Hipotiroidismo">
                        <label class="form-check-label" for="Hipotiroidismo" style="font-size:14px;">Miastenia Gravis</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="RupturaEsplenica" value="RupturaEsplenica">
                        <label class="form-check-label" for="RupturaEsplenica" style="font-size:14px;">Ruptura esplénica</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="LESRenalAguda" value="LESRenalAguda">
                        <label class="form-check-label" for="LESRenalAguda" style="font-size:14px;">Lesión renal aguda</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="EnfermedadesGraves" value="EnfermedadesGraves">
                        <label class="form-check-label" for="EnfermedadesGraves" style="font-size:14px;">Enfermedades Graves</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="diabetesgestacional" value="DiabetesGestacional">
                        <label class="form-check-label" for="diabetesgestacional" style="font-size:14px;">Diabetes Gestacional</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="candilomatosisvalvular" value="candilomatosisvalvular">
                        <label class="form-check-label" for="candilomatosisvalvular" style="font-size:14px;">Condilomatosis vulvar</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="HASGestacional" value="HASGestacional">
                        <label class="form-check-label" for="HASGestacional" style="font-size:14px;">Hipertensión Gestacional</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="FallaCardiacaCardiopatia" value="FallaCardiacaCardiopatia">
                        <label class="form-check-label" for="FallaCardiacaCardiopatia" style="font-size:14px;">Falla cardiaca/cardiopatía</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="InfeccionViasUrinarias" value="InfeccionViasUrinarias">
                        <label class="form-check-label" for="InfeccionViasUrinarias" style="font-size:14px;">Infección de vías urinarias</label>
                    </div>



                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="DesequilibrioHidro" value="DesequilibrioHidroelectrolitico">
                        <label class="form-check-label" for="DesequilibrioHidro" style="font-size:14px;">Desequilibrio Hidroelectrolítico</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="DesequilibrioHidro" value="DesequilibrioHidroelectrolitico">
                        <label class="form-check-label" for="DesequilibrioHidro" style="font-size:14px;">Ninguna de las anteriores</label>
                    </div>

                </div>

<!-- ***********************************ATENCIÓN MÉDICA*********************************** -->

<div class="col-md-12">
    <div class="form-header">
        <h5 class="form-title" style="text-align: center;
            background-color: rgb(154,34,65,0.85);
            color: aliceblue;
            margin-top:5px;
            font-size: 15px;">
            ATENCIÓN MÉDICA</h5>
    </div>
</div>

<div class="col-md-6">
    <strong style="font-size: 14px;">Embarazo</strong>
    <select name="Embarazo" id="Embarazo" class="form-control" style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>

<div class="col-md-6">
    <strong style="font-size: 14px;">Puerperio</strong>
    <select name="Puerperio" id="Puerperio" class="form-control" style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>

<!-- ***********************************Previa Aplicación de Hierro*********************************** -->
<div class="col-md-12">
    <div class="form-header">
    <h5 class="form-title" style="text-align: center;
            background-color: rgb(154,34,65,0.85);
            color: aliceblue;
            margin-top:5px;
            font-size: 15px;">
            PREVIA APLICACIÓN DE HIERRO</h5>
    </div>
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Hemoglobina pre </strong>
    <input type="number" id="" name="" class="form-control" style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Vitamina B12 pre  </strong>
        <input type="number" id="" name="" class="form-control" style="font-size: 13px;">
    </select>
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Ferritina pre </strong>
    <input type="number" id="" name="" class="form-control"  style="font-size: 13px;">
    </select>
</div>

<div class="col-md-4">
    <strong  style="font-size: 14px;">Cálculo deficiencia de hierro pre </strong>
    <input type="number" id="" name="" class="form-control"  style="font-size: 13px;">
    </select>
</div>

<div class="col-md-4">
    <strong  style="font-size: 14px;">Tratamiento con hierro pre </strong>
    <select name="tratamientohierro" id="tratamientohierro" class="form-control"  style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>



<div class="col-md-4">
    <strong  style="font-size: 14px;">Sacarato férrico Pre</strong>
    <select name="sacaratoferrico" id="sacaratoferrico" class="form-control"  style="font-size: 13px;" onchange="mostrarOcultarCampos()">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>

<div class="col-md-4" id="iddosissacaratoferrico" style=";">
    <strong style="color:#902b55; font-size: 14px;">Dosis Sacarato férrico</strong>
    <select name="dosisscaratoferrico" id="dosisscaratoferrico" class="form-control" style="font-size: 13px;" >
        <option value="Sin registro">Sin registro</option>
        <option value="300">300</option>
        <option value="500">500</option>
        <option value="1000">1000</option>
    </select>
</div>

<div class="col-md-4" id="idnodosissfpre" style=";">
    <strong style="color:#902b55; font-size: 14px;">No. Dosis Sacarato férrico</strong>
    <input type="number" class="form-control" id="nodosissfpre" name="nodosissfpre" style="font-size: 13px;">
</div>


<div class="col-md-4">
    <strong style="font-size: 14px;">Carboximaltosa férrica</strong>
    <select name="carboximaltosaferrica" id="carboximaltosaferrica" class="form-control" style="font-size: 13px;" onchange="mostrarOcultarCamposCF()">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>

<div class="col-md-4" id="iddosiscarboximaltosaferrica" style=";">
    <strong style="color:#902b55; font-size: 14px;">Dosis Carboximaltosa férrica</strong>
    <select name="dosiscarboximaltosaferrica" id="dosiscarboximaltosaferrica" class="form-control" style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="500">500</option>
        <option value="1000">1000</option>
    </select>
</div>

<div class="col-md-4" id="idnocarboximaltosaferrica" style=";">
    <strong style="color:#902b55; font-size: 14px;">No. Carboximaltosa férrica</strong>
    <input type="number" class="form-control" id="nocarboximaltosaferrica" name="nocarboximaltosaferrica" style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Hierro dextrano</strong>
    <select name="hierrodextrano" id="hierrodextrano" class="form-control" style="font-size: 13px;" onchange="mostrarOcultarCamposHierro()">
        <option value="Sin registro" >Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>

<div class="col-md-4" id="iddosishierro" style=";">
    <strong style="color:#902b55; font-size: 14px;">Dosis Hierro dextrano</strong>
    <select name="dosishierro" id="dosishierro" class="form-control" style="font-size: 13px;">
        <option value="0">Sin registro</option>
        <option value="300">300</option>
        <option value="400">400</option>
        <option value="500">500</option>
    </select>
</div>

<div class="col-md-4" id="idnodosishierrodextrano" style=";">
    <strong style="color:#902b55; font-size: 14px;">No. Dosis Hierro dextrano</strong>
    <input type="number" class="form-control" id="nodosishierro" name="nodosishierro" style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Premedicación</strong>
    <select name="premedicacion" id="premedicacion" class="form-control" style="font-size: 13px;" onchange="mostrarOcultarCamposPremedicacion()">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>

<div class="col-md-4" id="idmedicamento" style=";">
    <strong style="color:#902b55; font-size: 14px;">Medicamento</strong>
    <select name="medicamento" id="medicamento" class="form-control" style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="Clorpinamida">Clorpinamida</option>
        <option value="Hidrocortisona">Hidrocortisona</option>
    </select>
</div>


<div class="col-md-4">
    <strong style="font-size: 14px;">Solución infundida </strong>
    <select name="solucioninfundida" id="solucioninfundida" class="form-control" style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="Cloruro de Sodio">Cloruro de Sodio</option>
        <option value="Hartmann">Hartmann</option>
    </select>
</div>


<!--**************************-->
<div class="col-md-12">
    <div class="form-header">
    <h5 class="form-title"
        style="text-align: center;
        background-color: rgb(154,34,65,0.55);
        color: aliceblue;
        margin-top:5px;
        font-size: 14px;">
            Reacciones Adversas Previa Aplicación de Hierro</h5>
    </div>
</div>



<div class="container">
   

    <div class="form-check form-check-inline">
        <input class="form-check-input ra-checkbox" type="checkbox" id="cefaleaRA" value="cefalea">
        <label class="form-check-label" for="cefalea" style="font-size: 14px;">Cefalea</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input ra-checkbox" type="checkbox" id="nauseasRA" value="nauseas">
        <label class="form-check-label" for="nauseas" style="font-size: 14px;">Náuseas</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input ra-checkbox" type="checkbox" id="hipertensionRA" value="hipertension">
        <label class="form-check-label" for="hipertension" style="font-size: 14px;">Hipertensión</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input ra-checkbox" type="checkbox" id="hipotensionRA" value="hipotension">
        <label class="form-check-label" for="hipotension" style="font-size: 14px;">Hipotensión</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input ra-checkbox" type="checkbox" id="taquicardiaRA" value="taquicardia">
        <label class="form-check-label" for="taquicardia" style="font-size: 14px;">Taquicardia</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input ra-checkbox" type="checkbox" id="bradicardiaRA" value="bradicardia">
        <label class="form-check-label" for="bradicardia" style="font-size: 14px;">Bradicardia</label>
    </div>

    

    <div class="form-check form-check-inline">
        <input class="form-check-input ra-checkbox" type="checkbox" id="otroRA" value="otro">
        <label class="form-check-label" for="otro" style="font-size: 14px;">Otro</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="ningunaRA" value="ningunara">
        <label class="form-check-label" for="ningunara" style="font-size: 14px;">Ninguna</label>
    </div>
</div>

<div class="col-md-4" id="grado-reaccion" style=";">
    <strong style="color:#902b55; font-size: 14px;">Grado Reacción Adversa</strong>
    <select name="reaccionadversa" id="reaccionadversa" class="form-control" style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="leve">Leve</option>
        <option value="Moderado">Moderado</option>
        <option value="Severo">Severo</option>
    </select>
</div>




<!-- ***********************************Procedimiento Qx*********************************** -->
<div class="col-md-12">
    <div class="form-header">
        <h5 class="form-title" style="text-align: center;
            background-color: rgb(154,34,65,0.85);
            color: aliceblue;
            margin-top:5px;
            font-size: 14px;">
            Procedimiento Qx Programado</h5>
    </div>
</div>


<!-- ***********************************Tipo*********************************** -->
<div class="col-md-12">
    <div class="form-header">
    <h5 class="form-title"
        style="text-align: center;
        background-color: rgb(154,34,65,0.55);
        color: aliceblue;
        margin-top:5px;
        font-size: 14px;">
            Tipo cirugía</h5>
    </div>
</div>

<div class="col-md-3">
    <strong style="font-size: 14px;">Cirugía</strong>
    <select name="cirugia" id="cirugia" class="form-control" style="font-size: 13px;" onchange="mostrarFechaCirugiaTipo()">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>

<div class="col-md-3" id="idfechacirugia" style=";">
    <strong style="color:#902b55; font-size: 14px;" >Fecha de Cirugía</strong>
    <input type="date" id="fechacirugia" name="fechacirugia" class="form-control" style="font-size: 13px;">
</div>


<div class="col-md-3">
    <strong style="font-size: 14px;">Hemoglobina Pre </strong>
    <input type="number" id="hemoglobinapre" name="hemoglobinapre" class="form-control" style="font-size: 13px;">
</div>

<div class="col-md-3">
    <strong style="font-size: 14px;">Cesárea</strong>
    <select name="cesarea" id="cesarea" class="form-control" style="font-size: 13px;" onchange="mostrarFechaCesarea()">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>

<div class="col-md-3" id="idfechacesarea" style=";">
    <strong style="color:#902b55; font-size: 14px;">Fecha de Cesárea</strong>
    <input type="date" id="fechacesarea" name="fechacesarea" class="form-control" style="font-size: 13px;">
</div>

<div class="col-md-3">
    <strong style="font-size: 14px; font-size: 13px;">Hemorragia Masiva</strong>
    <select name="HemorragiaMasiva" id="HemorragiaMasiva" class="form-control" style="font-size: 13px;" onchange="mostrarCantidadSangrado()">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>

<div class="col-md-3" id="idcantidadsangrado" style=";">
    <strong style="color:#902b55; font-size: 14px;">Cantidad de Sangrado</strong>
    <input type="number" id="cantidadsangrado" name="cantidadsangrado" class="form-control" style="font-size: 13px;">
</div>


<!-- ***********************************Durante Procedimiento*********************************** -->
<div class="col-md-12">
    <div class="form-header">
    <h5 class="form-title"
        style="text-align: center;
        background-color: rgb(154,34,65,0.55);
        color: aliceblue;
        margin-top:5px;
        font-size: 14px;">
            Durante Procedimiento</h5>
    </div>
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Hemorragia</strong>
    <select name="Hemorragia" id="Hemorragia" class="form-control" style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>



<div class="col-md-4">
    <strong style="font-size: 14px;">Complicaciones</strong>
    <select name="Complicaciones" id="Complicaciones" class="form-control" style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>

<div class="col-md-4">
<strong style="font-size: 14px;">Transfusión</strong>
    <select name="Transfusion" id="Transfusion" class="form-control" style="font-size: 13px;" onchange="mostrarTransfusion()">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>


<div class="container" style="font-size: 14px;">
<br>
    <div id="checkboxes-container" style=";">
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="ninguncomponente" value="ninguna">
                <label class="form-check-label" for="ninguncomponente">Ninguno</label>
            </div>
    
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="plasma" value="plasma">
                <label class="form-check-label" for="plasma">Plasma</label>
            </div>
       
            <div class="form-group form-group-inline" id="idcomponenteplasma" style=";">
                <h6 style="color:#902b55; font-size: 14px;">Número de componentes Plasma</h6>
                <input type="number" id="componenteplasma" name="componenteplasma" class="form-control">
            </div>
        
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="plaquetas" value="plaquetas">
                <label class="form-check-label" for="plaquetas">Plaquetas</label>
            </div>

            <div class="form-group" id="idcomponenteplaquetas" style=";">
                <h6 style="color:#902b55; font-size: 14px;">Número de componentes laquetas</h6>
                <input type="number" id="componenteplaquetas" name="componenteplaquetas" class="form-control">
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="Crioprecipitados" value="crioprecipitados">
                <label class="form-check-label" for="Crioprecipitados">Crioprecipitados</label>
            </div>

            <div class="form-group" id="idcomponenteCrioprecipitados" style=";">
                <h6 style="color:#902b55; font-size: 14px;">Número de componentes Crioprecipitados</h6>
                <input type="number" id="componentescrioprecipitados" name="componentescrioprecipitados" class="form-control">
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="PaqueteGlobular" value="paqueteglobular">
                <label class="form-check-label" for="PaqueteGlobular">Paquete Globular</label>
            </div>

            <div class="form-group" id="idcomponentePG" style=";">
                <h6 style="color:#902b55; font-size: 14px;">Número de componentes Paquete Globular</h6>
                <input type="number" id="componentePG" name="componentePG" class="form-control">
            </div>
        </div>
        <br>
    </div>


<!-- ***********************************Post Infusión*********************************** -->
<div class="col-md-12">
    <div class="form-header">
        <h5 class="form-title" style="text-align: center;
            background-color: rgb(154,34,65,0.85);
            color: aliceblue;
            margin-top:5px;
            font-size: 14px;">
            Post Infusión</h5>
    </div>
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Hemoglobina post </strong>
    <input type="number" id="" name="" class="form-control" style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Vitamina B12 post</strong>
    <input type="number" id="" name="" class="form-control" style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Ferritina post </strong>
    <input type="number" id="" name="" class="form-control" style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Cálculo Deficiencia de hierro</strong>
    <input type="number" id="" name="" class="form-control" style="font-size: 13px;">
    </select>
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Tratamiento con hierro </strong>
    <select name="tratamientohierro" id="tratamientohierro" class="form-control" style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Tratamiento vía oral con hierro</strong>
    <select name="tratamientoviaoral" id="tratamientoviaoral" class="form-control" style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>


<div class="col-md-4">
    <strong style="font-size: 14px;">Sacarato férrico</strong>
    <select name="sacaratoferricopost" id="sacaratoferricopost" class="form-control" style="font-size: 13px;" onchange="mostrarOcultarCamposPost()">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>

<div class="col-md-4" id="iddosissacaratoferricopost" style=";">
    <strong style="color:#902b55; font-size: 14px;">Dosis Sacarato férrico</strong>
    <select name="dosisscaratoferricopost" id="dosisscaratoferricopost" class="form-control" style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="300">300</option>
        <option value="500">500</option>
        <option value="1000">1000</option>
    </select>
</div>

<div class="col-md-4" id="idnodosissacaratoferricopost" style=";">
    <strong style="color:#902b55; font-size: 14px;">No. Dosis Sacarato férrico</strong>
    <input type="number" class="form-control" id="nodosissacaratoferricopost" name="nodosissacaratoferricopost" style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Carboximaltosa férrica</strong>
    <select name="carboximaltosaferricapost" id="carboximaltosaferricapost" class="form-control" style="font-size: 13px;" onchange="mostrarOcultarCamposCarboPost()">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>

<div class="col-md-4" id="iddosiscarboximaltosaferricapost" style=";">
    <strong style="color:#902b55; font-size: 14px;">Dosis Carboximaltosa férrica</strong>
    <select name="dosiscarboximaltosaferricapost" id="dosiscarboximaltosaferricapost" class="form-control" style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="500">500</option>
        <option value="1000">1000</option>
    </select>
</div>

<div class="col-md-4" id="idnocarboximaltosaferricapost" style=";">
    <strong style="color:#902b55;font-size: 14px;">No. Carboximaltosa férrica</strong>
    <input type="number" class="form-control" id="nocarboximaltosaferricapost" name="nocarboximaltosaferricapost"style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Hierro dextrano</strong>
    <select name="hierrodextranopost" id="hierrodextranopost" class="form-control" style="font-size: 13px;" onchange="mostrarOcultarCamposHierroDexPost()">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>

<div class="col-md-4" id="iddosishierropost" style=";">
    <strong style="color:#902b55; font-size: 14px;">Dosis Hierro dextrano</strong>
    <select name="dosishierropost" id="dosishierropost" class="form-control" style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="300">300</option>
        <option value="400">400</option>
        <option value="500">500</option>
    </select>
</div>

<div class="col-md-4" id="idnodosishierrodextranopost" style=";">
    <strong style="color:#902b55; font-size: 14px;">No. Dosis Hierro dextrano</strong>
    <input type="number" class="form-control" id="nodosishierropost" name="nodosishierropost" style="font-size: 13px;" >
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;" >Premedicación</strong>
    <select name="premedicacionpost" id="premedicacionpost" class="form-control" style="font-size: 13px;" onchange="mostrarOcultarCamposPostPremedicacion()">
        <option value="Sin registro">Sin registro</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>
</div>

<div class="col-md-4" id="idmedicamentopost" style=";">
    <strong style="color:#902b55; font-size: 14px;">Medicamento</strong>
    <select name="medicamentopost" id="medicamentopost" class="form-control" style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="Clorpinamida">Clorpinamida</option>
        <option value="Hidrocortisona">Hidrocortisona</option>
    </select>
</div>


<div class="col-md-4">
    <strong style="font-size: 14px;">Solución infundida post</strong>
    <select name="solucioninfundida" id="solucioninfundida" class="form-control" style="font-size: 13px;">
        <option value="Sin registro">Sin registro</option>
        <option value="Cloruro de Sodio">Cloruro de Sodio</option>
        <option value="Hartmann">Hartmann</option>
    </select>
</div>

<!--**************************-->
<div class="col-md-12">
    <div class="form-header">
    <h5 class="form-title"
        style="text-align: center;
        background-color: rgb(154,34,65,0.55);
        color: aliceblue;
        margin-top:5px;
        font-size: 14px;">
            Reacciones Adversas Post Aplicación de Hierro</h5>
    </div>
</div>

<div class="container" style="font-size: 14px;">


    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="cefaleaRApost" value="cefalea">
        <label class="form-check-label" for="cefaleaRApost">Cefalea</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="nauseasRApost" value="nauseas">
        <label class="form-check-label" for="nauseasRApost">Náuseas</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="hipertensionRApost" value="hipertension">
        <label class="form-check-label" for="hipertensionRApost">Hipertensión</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="hipotensionRApost" value="hipotension">
        <label class="form-check-label" for="hipotensionRApost">Hipotensión</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="taquicardiaRApost" value="taquicardia">
        <label class="form-check-label" for="taquicardiaRApost">Taquicardia</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="bradicardiaRApost" value="bradicardia">
        <label class="form-check-label" for="bradicardiaRApost">Bradicardia</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="otroRApost" value="otro">
        <label class="form-check-label" for="otroRApost">Otro</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="ningunaRApost" value="ninguna">
        <label class="form-check-label" for="ningunaRApost">Ninguna</label>
    </div>

    </div>

    <div class="col-md-4" id="grado-reaccion-post">
        <strong style="color:#902b55; font-size: 14px;">Grado Reacción Adversa Post</strong>
        <select name="reaccionadversapost" id="reaccionadversapost" class="form-control">
            <option value="Sin registro">Sin registro</option>
            <option value="leve">Leve</option>
            <option value="Moderado">Moderado</option>
            <option value="Severo">Severo</option>
        </select>
    </div>
<br>

</div>
        <div class="container" style="text-align: right;">
            <button type="button" class="btn btn-success">Guardar Cambios</button>
        </div>

        </div>
        </div>
       



            </div> <!-- se cierra div de <div class="col col-10">-->
        </div> <!-- se cierra <div class="row">-->
    </div> <!-- se cierra div de <div class="container"  width="100%" height="800px" style="margin-bottom: 100px;">-->

<!-- se agrega el footer-->
    <footer>Hospital Regional de Alta Especialidad de Ixtapaluca<p style="font-size: 10px">
            Dirección de Operaciones - Subdirección de Tecnologías de la Información 
            <br> Gestión Digital en Salud - 2023</p> 
    </footer>
</body>
</html>