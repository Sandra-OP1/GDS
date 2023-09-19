<?php
    include('php/edit.php');
?>
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
<form id="edit_form">
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
            <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $id_paciente; ?>">
            <div class="row">
                <div class="col-md-4" id="idcurp"> 
                    <strong style="font-size: 14px;">CURP</strong>
                    <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP" value="<?php echo $curp; ?>" style="font-size: 13px;">
                </div>

                <div class="col-md-4" id="idnombre">
                    <strong style="font-size: 14px;">Nombre Completo</strong>
                    <input id="nombre" name="nombre" onblur="calcularEdad();" type="text" class="control form-control" value="<?php echo $nombre_paciente; ?>" style="font-size: 13px;" required>
                </div>

                <div class="col-md-4">
                    <strong style="font-size: 14px; background">Fecha de Nacimiento</strong>
                    <input id="fecha" name="fecha" type="date" value="<?php echo $fecha_nacimiento; ?>" onblur="curp2date();" class="control form-control" style="font-size: 13px;" readonly>
                </div>
                <div class="col-md-2">
                    <strong style="font-size: 14px;">Edad</strong>
                    <input id="edad" name="edad" type="text" class="control form-control" value="<?php echo $edad; ?>" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 14px;">Sexo</strong>
                    <input type="text" class="control form-control" id="sexo" onclick="curp2date();" name="sexo" value="<?php echo $sexo; ?>" style="font-size: 13px;" readonly>
                </div>


                <div class="col-md-4">
                    <strong style="font-size: 14px;">Altura Sobre Nivel del Mar</strong>
                    <select name="asnm" id="asnm" class="form-control" style="font-size: 13px;">
                        <option value="Sin Registro"<?php if ($asnm == 'Sin Registro') echo 'selected'; ?>>Sin Registro...</option>
                        <option value="Al Nivel del Mar"<?php if ($asnm == 'Al Nivel del Mar') echo 'selected'; ?>>Al Nivel del Mar</option>
                        <option value="1000 msnm"<?php if ($asnm == '1000 msnm') echo 'selected'; ?>>1000 msnm</option>
                        <option value="2000 msnm"<?php if ($asnm == '2000 msnm') echo 'selected'; ?>>2000 msnm</option>
                        <option value="3000 msnm"<?php if ($asnm == '3000 msnm') echo 'selected'; ?>>3000 msnm</option>
                        <option value="4000 msnm"<?php if ($asnm == '4000 msnm') echo 'selected'; ?>>4000 msnm</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 14px;">Talla</strong>
                    <input type="text" class="form-control" id="talla" name="talla" value="<?php echo $talla; ?>"placeholder="Ejemplo: 1.50" style="font-size: 13px;" required>
                </div>

                <div class="col-md-2">
                    <strong style="font-size: 14px;">Peso</strong>
                    <input type="number" step="any" class="form-control" id="peso" onblur="calculaIMC();" name="peso" value="<?php echo $peso; ?>" style="font-size: 13px;" required>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">IMC</strong>
                    <input type="text" class="form-control" id="imc" onblur="calculaIMC();" name="imc" value="<?php echo $imc; ?>" style="font-size: 13px;" readonly>
                </div>

                <div class="col-md-3">
                    <strong style="font-size: 14px;">Resultado IMC</strong>
                    <input type="text" class="form-control" id="imcdescripcion" name="imcdescripcion" value="<?php echo $resultadoimc; ?>" style="font-size: 13px;" readonly>
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
                        <input class="form-check-input" type="checkbox" id="TIP" name="TIP" value="TIP" <?php if ($tip == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="TIP" style="font-size:14px;">TIP</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Cáncer" name="Cáncer" value="Cancer" <?php if ($cancer == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="Cáncer" style="font-size:14px;">Cáncer</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Neumonia" name="Neumonia" value="Neumonia"<?php if ($neumonia == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="Neumonia" style="font-size:14px;">Neumonia</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="DrogasIV" name="DrogasIV" value="Drogas IV"<?php if ($drogasIV == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="DrogasIV" style="font-size:14px;">Drogas IV</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Eclampsia" name="Eclampsia" value="Eclampsia"<?php if ($eclampsia == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="Eclampsia" style="font-size:14px;">Eclampsia</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Artropatía" name="Artropatía" value="Artropatia"<?php if ($artropatia == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="Artropatía" style="font-size:14px;">Artropatía</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="LESActivo" name="LESActivo" value="LESActivo"<?php if ($les_activo == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="LESActivo" style="font-size:14px;">LES activo</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Miomatosis" name="Miomatosis" value="Miomatosis"<?php if ($miomatosis == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="Miomatosis" style="font-size:14px;">Miomatosis</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Nefropatia" name="Nefropatia" value="Nefropatia"<?php if ($nefropatia == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="Nefropatia" style="font-size:14px;">Nefropatía</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Colelitiasis" name="Colelitiasis" value="Colelitiasis"<?php if ($colelitiasis == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="Colelitiasis" style="font-size:14px;">Colelitiasis</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="SxdeHELLP" name="SxdeHELLP" value="SxdeHELLP"<?php if ($sx_hellp == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="SxdeHELLP" style="font-size:14px;">Sx de HELLP</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="SxNefrotico" name="SxNefrotico" value="SxNefrotico"<?php if ($sx_nefrotico == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="SxNefrotico" style="font-size:14px;">Sx Nefrótico</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Drepanocitica" name="Drepanocitica" value="Drepanocitica"<?php if ($drepanocitica == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="Drepanocitica" style="font-size:14px;">Drepanocítica</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Hipotiroidismo" name="Hipotiroidismo" value="Hipotiroidismo"<?php if ($hipotiroidismo == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="Hipotiroidismo" style="font-size:14px;">Hipotiroidismo</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Hipotiroidismo" name="Miastenia" value="Hipotiroidismo"<?php if ($miastenia_gravis == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="Hipotiroidismo" style="font-size:14px;">Miastenia Gravis</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="RupturaEsplenica" name="RupturaEsplenica" value="RupturaEsplenica"<?php if ($ruptura_esplenica == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="RupturaEsplenica" style="font-size:14px;">Ruptura esplénica</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="LESRenalAguda" name="LESRenalAguda" value="LESRenalAguda"<?php if ($lesion_renal == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="LESRenalAguda" style="font-size:14px;">Lesión renal aguda</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="EnfermedadesGraves" name="EnfermedadesGraves" value="EnfermedadesGraves"<?php if ($enferemedades_graves == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="EnfermedadesGraves" style="font-size:14px;">Enfermedades Graves</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="diabetesgestacional" name="diabetesgestacional" value="DiabetesGestacional"<?php if ($diabetes_gestacional == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="diabetesgestacional" style="font-size:14px;">Diabetes Gestacional</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="candilomatosisvalvular" name="candilomatosisvalvular" value="candilomatosisvalvular"<?php if ($condilomatosis_vulvar == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="candilomatosisvalvular" style="font-size:14px;">Condilomatosis vulvar</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="HASGestacional" name="HASGestacional" value="HASGestacional"<?php if ($hipertension_gestacional == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="HASGestacional" style="font-size:14px;">Hipertensión Gestacional</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="FallaCardiacaCardiopatia" name="FallaCardiacaCardiopatia" value="FallaCardiacaCardiopatia"<?php if ($falla_cardiaca == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="FallaCardiacaCardiopatia" style="font-size:14px;">Falla cardiaca/cardiopatía</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="InfeccionViasUrinarias" name="InfeccionViasUrinarias" value="InfeccionViasUrinarias"<?php if ($infeccion_vias == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="InfeccionViasUrinarias" style="font-size:14px;">Infección de vías urinarias</label>
                    </div>



                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="DesequilibrioHidro" name="DesequilibrioHidro" value="DesequilibrioHidroelectrolitico"<?php if ($desequilibrio_hidro == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="DesequilibrioHidro" style="font-size:14px;">Desequilibrio Hidroelectrolítico</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="ninguno" name ="ninguno" value="DesequilibrioHidroelectrolitico"<?php if ($ninguna == 1) echo "checked"; ?>>
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
        <option value="Sin registro"<?php if ($embarazo == 'Sin Registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($embarazo == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($embarazo == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>

<div class="col-md-6">
    <strong style="font-size: 14px;">Puerperio</strong>
    <select name="Puerperio" id="Puerperio" class="form-control" style="font-size: 13px;">
        <option value="Sin registro"<?php if ($puerperio == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($puerperio == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($puerperio == 'No') echo 'selected'; ?>>No</option>
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
    <input type="number" id="pre_Hemoglobina" name="pre_Hemoglobina" value="<?php echo $pre_hemoglobina; ?>" class="form-control" style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Vitamina B12 pre  </strong>
        <input type="number" id="pre_b12" name="pre_b12" value="<?php echo $pre_b12; ?>" class="form-control" style="font-size: 13px;">
    </select>
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Ferritina pre </strong>
    <input type="number" id="pre_ferritina" name="pre_ferritina" value="<?php echo $pre_ferretina; ?>" class="form-control"  style="font-size: 13px;">
    </select>
</div>

<div class="col-md-4">
    <strong  style="font-size: 14px;">Cálculo deficiencia de hierro pre </strong>
    <input type="number" id="pre_calculo" name="pre_calculo" value="<?php echo $pre_calculoDeficiencia; ?>" class="form-control"  style="font-size: 13px;">
    </select>
</div>

<div class="col-md-4">
    <strong  style="font-size: 14px;">Tratamiento con hierro pre </strong>
    <select name="pre_tratamientohierro" id="pre_tratamientohierro" class="form-control"  style="font-size: 13px;">
        <option value="Sin registro"<?php if ($pre_tratamiento == 'Sin Registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($pre_tratamiento == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($pre_tratamiento == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>



<div class="col-md-4">
    <strong  style="font-size: 14px;">Sacarato férrico Pre</strong>
    <select name="sacaratoferrico" id="sacaratoferrico" class="form-control"  style="font-size: 13px;" onchange="mostrarOcultarCampos()">
        <option value="Sin registro"<?php if ($pre_sacarato == 'Sin Registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($pre_sacarato == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($pre_sacarato == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>

<div class="col-md-4" id="iddosissacaratoferrico" style=";">
    <strong style="color:#902b55; font-size: 14px;">Dosis Sacarato férrico</strong>
    <select name="dosisscaratoferrico" id="dosisscaratoferrico" class="form-control" style="font-size: 13px;" >
        <option value="Sin registro"<?php if ($numero_dosisSacarato == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="300"<?php if ($numero_dosisSacarato == '300') echo 'selected'; ?>>300</option>
        <option value="500"<?php if ($numero_dosisSacarato == '500') echo 'selected'; ?>>500</option>
        <option value="1000"<?php if ($numero_dosisSacarato == '1000') echo 'selected'; ?>>1000</option>
    </select>
</div>

<div class="col-md-4" id="idnodosissfpre" style=";">
    <strong style="color:#902b55; font-size: 14px;">No. Dosis Sacarato férrico</strong>
    <input type="number" class="form-control" id="nodosissfpre" name="nodosissfpre" value="<?php echo $numero_dosisSacarato; ?>" style="font-size: 13px;">
</div>


<div class="col-md-4">
    <strong style="font-size: 14px;">Carboximaltosa férrica</strong>
    <select name="carboximaltosaferrica" id="carboximaltosaferrica" class="form-control" style="font-size: 13px;" onchange="mostrarOcultarCamposCF()">
        <option value="Sin registro"<?php if ($pre_carboximaltosa == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($pre_carboximaltosa == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($pre_carboximaltosa == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>

<div class="col-md-4" id="iddosiscarboximaltosaferrica" style=";">
    <strong style="color:#902b55; font-size: 14px;">Dosis Carboximaltosa férrica</strong>
    <select name="dosiscarboximaltosaferrica" id="dosiscarboximaltosaferrica" class="form-control" style="font-size: 13px;">
        <option value="Sin registro"<?php if ($dosis_carboximaltosa == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="500"<?php if ($dosis_carboximaltosa == '500') echo 'selected'; ?>>500</option>
        <option value="1000"<?php if ($dosis_carboximaltosa == '1000') echo 'selected'; ?>>1000</option>
    </select>
</div>

<div class="col-md-4" id="idnocarboximaltosaferrica" style=";">
    <strong style="color:#902b55; font-size: 14px;">No. Carboximaltosa férrica</strong>
    <input type="number" class="form-control" id="nocarboximaltosaferrica" name="nocarboximaltosaferrica" value="<?php echo $numero_dosisCarboximaltosa; ?>" style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Hierro dextrano</strong>
    <select name="hierrodextrano" id="hierrodextrano" class="form-control" style="font-size: 13px;" onchange="mostrarOcultarCamposHierro()">
        <option value="Sin registro"<?php if ($pre_dextrano == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($pre_dextrano == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($pre_dextrano == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>

<div class="col-md-4" id="iddosishierro" style=";">
    <strong style="color:#902b55; font-size: 14px;">Dosis Hierro dextrano</strong>
    <select name="dosishierro" id="dosishierro" class="form-control" style="font-size: 13px;">
        <option value="0"<?php if ($dosis_dextrano == '0') echo 'selected'; ?>>Sin registro</option>
        <option value="300"<?php if ($dosis_dextrano == '300') echo 'selected'; ?>>300</option>
        <option value="400"<?php if ($dosis_dextrano == '400') echo 'selected'; ?>>400</option>
        <option value="500"<?php if ($dosis_dextrano == '500') echo 'selected'; ?>>500</option>
    </select>
</div>

<div class="col-md-4" id="idnodosishierrodextrano" style=";">
    <strong style="color:#902b55; font-size: 14px;">No. Dosis Hierro dextrano</strong>
    <input type="number" class="form-control" id="nodosishierro" name="nodosishierro" value="<?php echo $numero_dosisDextrano; ?>" style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Premedicación</strong>
    <select name="premedicacion" id="premedicacion" class="form-control" style="font-size: 13px;" onchange="mostrarOcultarCamposPremedicacion()">
        <option value="Sin registro"<?php if ($premeditacion == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($premeditacion == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($premeditacion == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>

<div class="col-md-4" id="idmedicamento" style=";">
    <strong style="color:#902b55; font-size: 14px;">Medicamento</strong>
    <select name="medicamento" id="medicamento" class="form-control" style="font-size: 13px;">
        <option value="Sin registro"<?php if ($medicamento == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Clorpinamida"<?php if ($medicamento == 'Clorpinamida') echo 'selected'; ?>>Clorpinamida</option>
        <option value="Hidrocortisona"<?php if ($medicamento == 'Hidrocortisona') echo 'selected'; ?>>Hidrocortisona</option>
    </select>
</div>


<div class="col-md-4">
    <strong style="font-size: 14px;">Solución infundida </strong>
    <select name="pre_solucioninfundida" id="pre_solucioninfundida" class="form-control" style="font-size: 13px;">
        <option value="Sin registro"<?php if ($solucion_infundida == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Cloruro de Sodio"<?php if ($solucion_infundida == 'Cloruro de Sodio') echo 'selected'; ?>>Cloruro de Sodio</option>
        <option value="Hartmann"<?php if ($solucion_infundida == 'Hartmann') echo 'selected'; ?>>Hartmann</option>
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
        <input class="form-check-input ra-checkbox" type="checkbox" id="cefaleaRA" name="cefaleaRA" value="cefalea" <?php if ($pre_cefalea == 1) echo "checked"; ?>>
        <label class="form-check-label" for="cefalea" style="font-size: 14px;">Cefalea</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input ra-checkbox" type="checkbox" id="nauseasRA" name="nauseasRA" value="nauseas"<?php if ($pre_nauseas == 1) echo "checked"; ?>>
        <label class="form-check-label" for="nauseas" style="font-size: 14px;">Náuseas</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input ra-checkbox" type="checkbox" id="hipertensionRA" name="hipertensionRA" value="hipertension"<?php if ($pre_hipertension == 1) echo "checked"; ?>>
        <label class="form-check-label" for="hipertension" style="font-size: 14px;">Hipertensión</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input ra-checkbox" type="checkbox" id="hipotensionRA" name="hipotensionRA" value="hipotension"<?php if ($pre_hipotension == 1) echo "checked"; ?>>
        <label class="form-check-label" for="hipotension" style="font-size: 14px;">Hipotensión</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input ra-checkbox" type="checkbox" id="taquicardiaRA" name="taquicardiaRA" value="taquicardia"<?php if ($pre_taquicardia == 1) echo "checked"; ?>>
        <label class="form-check-label" for="taquicardia" style="font-size: 14px;">Taquicardia</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input ra-checkbox" type="checkbox" id="bradicardiaRA" name="bradicardiaRA" value="bradicardia"<?php if ($pre_bradicardia == 1) echo "checked"; ?>>
        <label class="form-check-label" for="bradicardia" style="font-size: 14px;">Bradicardia</label>
    </div>

    

    <div class="form-check form-check-inline">
        <input class="form-check-input ra-checkbox" type="checkbox" id="otroRA" name="otroRA" value="otro"<?php if ($pre_otro == 1) echo "checked"; ?>>
        <label class="form-check-label" for="otro" style="font-size: 14px;">Otro</label>
    </div>
<?php if ($ninguna == 1) echo "checked"; ?>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="ningunaRA" name="ningunaRA" value="ningunara"<?php if ($pre_ninguna == 1) echo "checked"; ?>>
        <label class="form-check-label" for="ningunara" style="font-size: 14px;">Ninguna</label>
    </div>
</div>

<div class="col-md-4" id="grado-reaccion" style=";">
    <strong style="color:#902b55; font-size: 14px;">Grado Reacción Adversa</strong>
    <select name="reaccionadversa" id="reaccionadversa" class="form-control" style="font-size: 13px;">
        <option value="Sin registro"<?php if ($pre_grado_reaccion == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="leve"<?php if ($pre_grado_reaccion == 'leve') echo 'selected'; ?>>Leve</option>
        <option value="Moderado"<?php if ($pre_grado_reaccion == 'Moderado') echo 'selected'; ?>>Moderado</option>
        <option value="Severo"<?php if ($pre_grado_reaccion == 'Severo') echo 'selected'; ?>>Severo</option>
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
        <option value="Sin registro"<?php if ($cirugia == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($cirugia == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($cirugia == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>

<div class="col-md-3" id="idfechacirugia" style=";">
    <strong style="color:#902b55; font-size: 14px;" >Fecha de Cirugía</strong>
    <input type="date" id="fechacirugia" name="fechacirugia" value="<?php echo $fecha_cirugia; ?>" class="form-control" style="font-size: 13px;">
</div>


<div class="col-md-3">
    <strong style="font-size: 14px;">Hemoglobina Pre </strong>
    <input type="number" id="hemoglobinapre" name="hemoglobinapre" value="<?php echo $pre_qxHemoglobina; ?>" class="form-control" style="font-size: 13px;">
</div>

<div class="col-md-3">
    <strong style="font-size: 14px;">Cesárea</strong>
    <select name="cesarea" id="cesarea" class="form-control" style="font-size: 13px;" onchange="mostrarFechaCesarea()">
        <option value="Sin registro"<?php if ($cesarea == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($cesarea == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($cesarea == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>

<div class="col-md-3" id="idfechacesarea" style=";">
    <strong style="color:#902b55; font-size: 14px;">Fecha de Cesárea</strong>
    <input type="date" id="fechacesarea" name="fechacesarea" value="<?php echo $fecha_cesarea; ?>" class="form-control" style="font-size: 13px;">
</div>

<div class="col-md-3">
    <strong style="font-size: 14px; font-size: 13px;">Hemorragia Masiva</strong>
    <select name="HemorragiaMasiva" id="HemorragiaMasiva" class="form-control" style="font-size: 13px;" onchange="mostrarCantidadSangrado()">
        <option value="Sin registro"<?php if ($hemorragia_masiva == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($hemorragia_masiva == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($hemorragia_masiva == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>

<div class="col-md-3" id="idcantidadsangrado" style=";">
    <strong style="color:#902b55; font-size: 14px;">Cantidad de Sangrado</strong>
    <input type="number" id="cantidadsangrado" name="cantidadsangrado" value="<?php echo $cantidad_sangrado; ?>" class="form-control" style="font-size: 13px;">
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
        <option value="Sin registro"<?php if ($hemorragia == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($hemorragia == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($hemorragia == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>



<div class="col-md-4">
    <strong style="font-size: 14px;">Complicaciones</strong>
    <select name="Complicaciones" id="Complicaciones" class="form-control" style="font-size: 13px;">
        <option value="Sin registro"<?php if ($complicasiones == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($complicasiones == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($complicasiones == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>

<div class="col-md-4">
<strong style="font-size: 14px;">Transfusión</strong>
    <select name="Transfusion" id="Transfusion" class="form-control" style="font-size: 13px;" onchange="mostrarTransfusion()">
        <option value="Sin registro"<?php if ($transfusiones == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($transfusiones == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($transfusiones == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>


<div class="container" style="font-size: 14px;">
<br>
    <div id="checkboxes-container" style=";">
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="ninguncomponente" name="ninguncomponente" value="ninguna"<?php if ($ninguna_transfusion == 1) echo "checked"; ?>>
                <label class="form-check-label" for="ninguncomponente">Ninguno</label>
            </div>
    
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="plasma" name="plasma" value="plasma" <?php if ($plasma == 1) echo "checked"; ?>>
                <label class="form-check-label" for="plasma">Plasma</label>
            </div>
       
            <div class="form-group form-group-inline" id="idcomponenteplasma" style=";">
                <h6 style="color:#902b55; font-size: 14px;">Número de componentes Plasma</h6>
                <input type="number" id="componenteplasma" name="componenteplasma" value="<?php echo $no_plasma; ?>" class="form-control">
            </div>
        
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="plaquetas" name="plaquetas" value="plaquetas" <?php if ($plaquetas == 1) echo "checked"; ?>>
                <label class="form-check-label" for="plaquetas">Plaquetas</label>
            </div>

            <div class="form-group" id="idcomponenteplaquetas" style=";">
                <h6 style="color:#902b55; font-size: 14px;">Número de componentes laquetas</h6>
                <input type="number" id="componenteplaquetas" name="componenteplaquetas" value="<?php echo $no_plaquetas; ?>" class="form-control">
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="Crioprecipitados" name="Crioprecipitados" value="crioprecipitados" <?php if ($crioprecipitado == 1) echo "checked"; ?>>
                <label class="form-check-label" for="Crioprecipitados">Crioprecipitados</label>
            </div>

            <div class="form-group" id="idcomponenteCrioprecipitados" style=";">
                <h6 style="color:#902b55; font-size: 14px;">Número de componentes Crioprecipitados</h6>
                <input type="number" id="componentescrioprecipitados" name="componentescrioprecipitados" value="<?php echo $no_crioprecipitado; ?>" class="form-control">
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="PaqueteGlobular" name="PaqueteGlobular" value="paqueteglobular" <?php if ($plaqueta_globular == 1) echo "checked"; ?>>
                <label class="form-check-label" for="PaqueteGlobular">Paquete Globular</label>
            </div>

            <div class="form-group" id="idcomponentePG" style=";">
                <h6 style="color:#902b55; font-size: 14px;">Número de componentes Paquete Globular</h6>
                <input type="number" id="componentePG" name="componentePG" value="<?php echo $no_plaqueta_globular; ?>" class="form-control">
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
    <input type="number" id="post_hemo" name="post_hemo" value="<?php echo $post_hemoglobina; ?>" class="form-control" style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Vitamina B12 post</strong>
    <input type="number" id="post_b12" name="post_b12" value="<?php echo $post_b12; ?>" class="form-control" style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Ferritina post </strong>
    <input type="number" id="post_ferretina" name="post_ferretina" value="<?php echo $post_ferretina; ?>" class="form-control" style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Cálculo Deficiencia de hierro</strong>
    <input type="number" id="post_calculo" name="post_calculo" value="<?php echo $post_calculoDeficiencia; ?>" class="form-control" style="font-size: 13px;">
    </select>
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Tratamiento con hierro </strong>
    <select name="post_tratamientohierro" id="post_tratamientohierro" class="form-control" style="font-size: 13px;">
        <option value="Sin registro"<?php if ($post_tratamiento == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($post_tratamiento == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($post_tratamiento == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Tratamiento vía oral con hierro</strong>
    <select name="tratamientoviaoral" id="tratamientoviaoral" class="form-control" style="font-size: 13px;">
        <option value="Sin registro"<?php if ($tratamiento_oral == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($tratamiento_oral == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($tratamiento_oral == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>


<div class="col-md-4">
    <strong style="font-size: 14px;">Sacarato férrico</strong>
    <select name="sacaratoferricopost" id="sacaratoferricopost" class="form-control" style="font-size: 13px;" onchange="mostrarOcultarCamposPost()">
        <option value="Sin registro"<?php if ($post_sacarato == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($post_sacarato == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($post_sacarato == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>

<div class="col-md-4" id="iddosissacaratoferricopost" style=";">
    <strong style="color:#902b55; font-size: 14px;">Dosis Sacarato férrico</strong>
    <select name="dosisscaratoferricopost" id="dosisscaratoferricopost" class="form-control" style="font-size: 13px;">
        <option value="Sin registro"<?php if ($post_dosis_sacarato == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="300"<?php if ($post_dosis_sacarato == '300') echo 'selected'; ?>>300</option>
        <option value="500"<?php if ($post_dosis_sacarato == '500') echo 'selected'; ?>>500</option>
        <option value="1000"<?php if ($post_dosis_sacarato == '1000') echo 'selected'; ?>>1000</option>
    </select>
</div>

<div class="col-md-4" id="idnodosissacaratoferricopost" style=";">
    <strong style="color:#902b55; font-size: 14px;">No. Dosis Sacarato férrico</strong>
    <input type="number" class="form-control" id="nodosissacaratoferricopost" name="nodosissacaratoferricopost" value="<?php echo $post_numero_dosisSacarato; ?>" style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Carboximaltosa férrica</strong>
    <select name="carboximaltosaferricapost" id="carboximaltosaferricapost" class="form-control" style="font-size: 13px;" onchange="mostrarOcultarCamposCarboPost()">
        <option value="Sin registro"<?php if ($post_carboximaltosa == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($post_carboximaltosa == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($post_carboximaltosa == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>

<div class="col-md-4" id="iddosiscarboximaltosaferricapost" style=";">
    <strong style="color:#902b55; font-size: 14px;">Dosis Carboximaltosa férrica</strong>
    <select name="dosiscarboximaltosaferricapost" id="dosiscarboximaltosaferricapost" class="form-control" style="font-size: 13px;">
        <option value="Sin registro"<?php if ($post_dosis_carboximaltosa == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="500"<?php if ($post_dosis_carboximaltosa == '500') echo 'selected'; ?>>500</option>
        <option value="1000"<?php if ($post_dosis_carboximaltosa == '1000') echo 'selected'; ?>>1000</option>
    </select>
</div>

<div class="col-md-4" id="idnocarboximaltosaferricapost" style=";">
    <strong style="color:#902b55;font-size: 14px;">No. Carboximaltosa férrica</strong>
    <input type="number" class="form-control" id="nocarboximaltosaferricapost" name="nocarboximaltosaferricapost" value="<?php echo $post_numero_dosisCarboximaltosa; ?>" style="font-size: 13px;">
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;">Hierro dextrano</strong>
    <select name="hierrodextranopost" id="hierrodextranopost" class="form-control" style="font-size: 13px;" onchange="mostrarOcultarCamposHierroDexPost()">
        <option value="Sin registro"<?php if ($post_dextrano == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($post_dextrano == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($post_dextrano == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>

<div class="col-md-4" id="iddosishierropost" style=";">
    <strong style="color:#902b55; font-size: 14px;">Dosis Hierro dextrano</strong>
    <select name="dosishierropost" id="dosishierropost" class="form-control" style="font-size: 13px;">
        <option value="Sin registro"<?php if ($post_dosis_dextrano == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="300"<?php if ($post_dosis_dextrano == '300') echo 'selected'; ?>>300</option>
        <option value="400"<?php if ($post_dosis_dextrano == '400') echo 'selected'; ?>>400</option>
        <option value="500"<?php if ($post_dosis_dextrano == '500') echo 'selected'; ?>>500</option>
    </select>
</div>

<div class="col-md-4" id="idnodosishierrodextranopost" style=";">
    <strong style="color:#902b55; font-size: 14px;">No. Dosis Hierro dextrano</strong>
    <input type="number" class="form-control" id="nodosishierropost" name="nodosishierropost" value="<?php echo $post_numero_dosisDextrano; ?>" style="font-size: 13px;" >
</div>

<div class="col-md-4">
    <strong style="font-size: 14px;" >Premedicación</strong>
    <select name="premedicacionpost" id="premedicacionpost" class="form-control" style="font-size: 13px;" onchange="mostrarOcultarCamposPostPremedicacion()">
        <option value="Sin registro"<?php if ($post_premeditacion == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Si"<?php if ($post_premeditacion == 'Si') echo 'selected'; ?>>Sí</option>
        <option value="No"<?php if ($post_premeditacion == 'No') echo 'selected'; ?>>No</option>
    </select>
</div>

<div class="col-md-4" id="idmedicamentopost" style=";">
    <strong style="color:#902b55; font-size: 14px;">Medicamento</strong>
    <select name="medicamentopost" id="medicamentopost" class="form-control" style="font-size: 13px;">
        <option value="Sin registro"<?php if ($post_medicamento == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Clorpinamida"<?php if ($post_medicamento == 'Clorpinamida') echo 'selected'; ?>>Clorpinamida</option>
        <option value="Hidrocortisona"<?php if ($post_medicamento == 'Hidrocortisona') echo 'selected'; ?>>Hidrocortisona</option>
    </select>
</div>


<div class="col-md-4">
    <strong style="font-size: 14px;">Solución infundida post</strong>
    <select name="post_solucioninfundida" id="post_solucioninfundida" class="form-control" style="font-size: 13px;">
        <option value="Sin registro"<?php if ($post_solucion_infundida == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
        <option value="Cloruro de Sodio"<?php if ($post_solucion_infundida == 'Cloruro de Sodio') echo 'selected'; ?>>Cloruro de Sodio</option>
        <option value="Hartmann"<?php if ($post_solucion_infundida == 'Hartmann') echo 'selected'; ?>>Hartmann</option>
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
        <input class="form-check-input" type="checkbox" id="cefaleaRApost" name="cefaleaRApost" value="cefalea" <?php if ($post_cefalea == 1) echo "checked"; ?>>
        <label class="form-check-label" for="cefaleaRApost">Cefalea</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="nauseasRApost" name="nauseasRApost" value="nauseas" <?php if ($post_nauseas == 1) echo "checked"; ?>>
        <label class="form-check-label" for="nauseasRApost">Náuseas</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="hipertensionRApost" name="hipertensionRApost" value="hipertension" <?php if ($post_hipertension == 1) echo "checked"; ?>>
        <label class="form-check-label" for="hipertensionRApost">Hipertensión</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="hipotensionRApost" name="hipotensionRApost" value="hipotension" <?php if ($post_hipotension == 1) echo "checked"; ?>>
        <label class="form-check-label" for="hipotensionRApost">Hipotensión</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="taquicardiaRApost" name="taquicardiaRApost" value="taquicardia" <?php if ($post_taquicardia == 1) echo "checked"; ?>>
        <label class="form-check-label" for="taquicardiaRApost">Taquicardia</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="bradicardiaRApost" name="bradicardiaRApost" value="bradicardia" <?php if ($post_bradicardia == 1) echo "checked"; ?>>
        <label class="form-check-label" for="bradicardiaRApost">Bradicardia</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="otroRApost" name="otroRApost" value="otro" <?php if ($post_otro == 1) echo "checked"; ?>>
        <label class="form-check-label" for="otroRApost">Otro</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="ningunaRApost" name="ningunaRApost" value="ninguna" <?php if ($post_ninguna == 1) echo "checked"; ?>>
        <label class="form-check-label" for="ningunaRApost">Ninguna</label>
    </div>

    </div>

    <div class="col-md-4" id="grado-reaccion-post">
        <strong style="color:#902b55; font-size: 14px;">Grado Reacción Adversa Post</strong>
        <select name="reaccionadversapost" id="reaccionadversapost" class="form-control">
            <option value="Sin registro"<?php if ($post_grado_reaccion == 'Sin registro') echo 'selected'; ?>>Sin registro</option>
            <option value="leve"<?php if ($post_grado_reaccion == 'leve') echo 'selected'; ?>>Leve</option>
            <option value="Moderado"<?php if ($post_grado_reaccion == 'Moderado') echo 'selected'; ?>>Moderado</option>
            <option value="Severo"<?php if ($post_grado_reaccion == 'Severo') echo 'selected'; ?>>Severo</option>
        </select>
    </div>
<br>

</div>
        <div class="container" style="text-align: right;">
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
        </div>

        </div>
        </div>
       



            </div> <!-- se cierra div de <div class="col col-10">-->
        </div> <!-- se cierra <div class="row">-->
    </div> <!-- se cierra div de <div class="container"  width="100%" height="800px" style="margin-bottom: 100px;">-->
</form>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/scriptmodal.js"></script>
<script src="js/update.js"></script>
<!-- se agrega el footer-->
    <footer>Hospital Regional de Alta Especialidad de Ixtapaluca<p style="font-size: 10px">
            Dirección de Operaciones - Subdirección de Tecnologías de la Información 
            <br> Gestión Digital en Salud - 2023</p> 
    </footer>
</body>
</html>