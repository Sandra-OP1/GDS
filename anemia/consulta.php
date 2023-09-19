<?php
    include('php/visualizacion.php');
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
    <title>Document</title>
</head>
<body>

    <table class="table table-striped table-hover table-bordered tabla-consulta">
        <thead>
            
            <tr>
                <th scope="col"> Datos Generales</th>
                <th scope="col"> </th>
            </tr>
        </thead>

        <tbody style="font-size:13px;" class="table-bordered">
            <tr>
                <td class="estilo-celda">CURP</td>
                <td><?php echo $curp; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Nombre Completo</td>
                <td> <?php echo $nombre_paciente; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Fecha Nacimiento</td>
                <td><?php echo $fecha_nacimiento; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Edad</td>
                <td><?php echo $edad; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sexo</td>
                <td><?php echo $sexo; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Altura Sobre Nivel del Mar</td>
                <td><?php echo $asnm; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Talla</td>
                <td><?php echo $talla; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Peso</td>
                <td><?php echo $peso; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">IMC</td>
                <td><?php echo $imc; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Resultado IMC</td>
                <td><?php echo $resultadoimc; ?></td>
            </tr>

          <!--CONMORBILIDADES-->
            

            <tr>
                <th scope="col"  style="background-color: rgb(205, 92, 92, 0.8);"> Conmorbilidades</th>
                <th scope="col" style="background-color: rgb(205, 92, 92, 0.8);"> </th>
            </tr>
            

            <tr>
                <td class="estilo-celda">TIP</td>
                <td><?php echo $tip; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cáncer</td>
                <td><?php echo $cancer; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Neumonía</td>
                <td><?php echo $neumonia; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Drogas IV</td>
                <td><?php echo $drogasIV; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Eclampsia</td>
                <td><?php echo $eclampsia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Artropatía</td>
                <td><?php echo $artropatia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">LES activo</td>
                <td><?php echo $les_activo; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Miomatosis</td>
                <td><?php echo $miomatosis; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Nefropatía</td>
                <td><?php echo $nefropatia; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Colelitiasis</td>
                <td><?php echo $colelitiasis; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Sx de HELLP</td>
                <td><?php echo $sx_hellp; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sx Nefrótico</td>
                <td><?php echo $sx_nefrotico; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Drepanocítica</td>
                <td><?php echo $drepanocitica; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hipotiroidismo</td>
                <td><?php echo $hipotiroidismo; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Miastenia Gravis</td>
                <td><?php echo $miastenia_gravis; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Ruptura esplénica</td>
                <td><?php echo $ruptura_esplenica; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Lesión renal aguda</td>
                <td><?php echo $lesion_renal; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Enfermedades Graves</td>
                <td><?php echo $enferemedades_graves; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Diabetes Gestacional</td>
                <td><?php echo $diabetes_gestacional; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Condilomatosis vulvar</td>
                <td><?php echo $condilomatosis_vulvar; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hipertensión Gestacional</td>
                <td><?php echo $hipertension_gestacional; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Falla cardiaca/cardiopatía</td>
                <td><?php echo $falla_cardiaca; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Infección de vías urinarias</td>
                <td><?php echo $infeccion_vias; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Desequilibrio Hidroelectrolítico</td>
                <td><?php echo $desequilibrio_hidro; ?></td>
            </tr>

            <!--====================================Atención médica============================-->
            
            <tr>
                <th scope="col"> Atención médica</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Embarazo</td>
                <td><?php echo $embarazo; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Puerperio</td>
                <td><?php echo $puerperio; ?></td>
            </tr>

            <!--===================================PREVIA APLICACIÓN DE HIERRO====================================-->
            <tr>
                <th scope="col"> Previa Aplicación de Hierro</th>
                <th scope="col"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Hemoglobina pre</td>
                <td><?php echo $pre_hemoglobina; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Vitamina B12 pre</td>
                <td><?php echo $pre_b12; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Ferritina pre</td>
                <td><?php echo $pre_ferretina; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cálculo deficiencia de hierro pre</td>
                <td><?php echo $pre_calculoDeficiencia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tratamiento con hierro pre</td>
                <td><?php echo $pre_tratamiento; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sacarato férrico Pre</td>
                <td><?php echo $pre_sacarato; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Dosis Sacarato férrico</td>
                <td><?php echo $dosis_sacarato; ?></td>
            </tr>
            
            <tr>
                <td style="color:maroon; font-size: 13px;"> * No. Dosis Sacarato férrico</td>
                <td><?php echo $numero_dosisSacarato; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Carboximaltosa férrica</td>
                <td><?php echo $pre_carboximaltosa; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Dosis Carboximaltosa férrica</td>
                <td><?php echo $dosis_carboximaltosa; ?></td>
            </tr>
            
            <tr>
                <td style="color:maroon; font-size: 13px;"> * No. Dosis Carboximaltosa férrica</td>
                <td><?php echo $numero_dosisCarboximaltosa; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hierro dextrano</td>
                <td><?php echo $pre_dextrano; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Dosis Dosis Hierro dextrano</td>
                <td><?php echo $dosis_dextrano; ?></td>
            </tr>
            
            <tr>
                <td style="color:maroon; font-size: 13px;"> * No. Dosis Hierro dextrano</td>
                <td><?php echo $numero_dosisDextrano; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Premedicación</td>
                <td><?php echo $premeditacion; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Medicamento</td>
                <td><?php echo $medicamento; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Solución infundida</td>
                <td><?php echo $solucion_infundida; ?></td>
            </tr>

            <!--===================================Reacciones Adversas Previa Aplicación de Hierro====================================-->
            <tr>
                <th scope="col"  style="background-color: rgb(205, 92, 92, 0.8);">Reacciones Adversas Previa Aplicación de Hierro</th>
                <th scope="col" style="background-color: rgb(205, 92, 92, 0.8);"> </th>
            </tr>
            
            <tr>
                <td class="estilo-celda">Cefalea</td>
                <td><?php echo $pre_cefalea; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Náuseas</td>
                <td><?php echo $pre_nauseas; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hipertensión</td>
                <td><?php echo $pre_hipertension; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hipotensión</td>
                <td><?php echo $pre_hipotension; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Taquicardia</td>
                <td><?php echo $pre_taquicardia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Bradicardia</td>
                <td><?php echo $pre_bradicardia; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otro</td>
                <td><?php echo $pre_otro; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Grado Reacción Adversa</td>
                <td><?php echo $pre_grado_reaccion; ?></td>
            </tr>
            

            <!--===================================Procedimiento Qx Programado Tipo cirugía====================================-->
            <tr>
                <th scope="col"> Procedimiento Qx Programado</th>
                <th scope="col"> Tipo Cirugía</th>
            </tr>

            

            <tr>
                <td class="estilo-celda">Cirugía</td>
                <td><?php echo $cirugia; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Fecha de Cirugía</td>
                <td><?php echo $fecha_cirugia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hemoglobina Pre</td>
                <td><?php echo $pre_qxHemoglobina; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cesárea</td>
                <td><?php echo $cesarea; ?></td>
            </tr>


            <tr>
                <td style="color:maroon; font-size: 13px;"> * Fecha de Cesárea</td>
                <td><?php echo $fecha_cesarea; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hemorragia Masiva</td>
                <td><?php echo $hemorragia_masiva; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Cantidad de Sangrado</td>
                <td><?php echo $cantidad_sangrado; ?></td>
            </tr>

            <!--===================================Durante Procedimiento====================================-->
           
            <tr>
                <th scope="col"  style="background-color: rgb(205, 92, 92, 0.8);">Durante Procedimiento</th>
                <th scope="col" style="background-color: rgb(205, 92, 92, 0.8);"> </th>
            </tr>

            <tr>
                <td class="estilo-celda">Hemorragia</td>
                <td><?php echo $hemorragia; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Complicaciones</td>
                <td><?php echo $complicasiones; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Transfusión</td>
                <td><?php echo $transfusiones; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Plasma</td>
                <td><?php echo $plasma; ?></td>
            </tr>
            <tr>
                <td style="color:maroon; font-size: 13px;"> -> Número de componentes Plasma</td>
                <td><?php echo $no_plasma; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Plaquetas</td>
                <td><?php echo $plaquetas; ?></td>
            </tr>
            <tr>
                <td style="color:maroon; font-size: 13px;"> -> Número de componentes Plaquetas</td>
                <td><?php echo $no_plaquetas; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Crioprecipitados</td>
                <td><?php echo $crioprecipitado; ?></td>
            </tr>
            <tr>
                <td style="color:maroon; font-size: 13px;"> -> Número de componentes Crioprecipitados</td>
                <td><?php echo $no_crioprecipitado; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Paquete Globular</td>
                <td><?php echo $plaqueta_globular; ?></td>
            </tr>
            <tr>
                <td style="color:maroon; font-size: 13px;"> -> Número de componentes Paquete Globular</td>
                <td><?php echo $no_plaqueta_globular; ?></td>
            </tr>


<!--===================================Post Infusión====================================-->
            <tr>
                <th scope="col"> Post Infusión</th>
                <th scope="col"> </th>
            </tr>

            

            <tr>
                <td class="estilo-celda">Hemoglobina post</td>
                <td><?php echo $post_hemoglobina; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Vitamina B12 post</td>
                <td><?php echo $post_b12; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Ferritina post</td>
                <td><?php echo $post_ferretina; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Cálculo Deficiencia de hierro Post</td>
                <td><?php echo $post_calculoDeficiencia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tratamiento con hierro Post</td>
                <td><?php echo $post_tratamiento; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Tratamiento vía oral con hierro Post</td>
                <td><?php echo $tratamiento_oral; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Sacarato férrico Post</td>
                <td><?php echo $post_sacarato; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Dosis Sacarato férrico</td>
                <td><?php echo $post_dosis_sacarato; ?></td>
            </tr>
            
            <tr>
                <td style="color:maroon; font-size: 13px;"> * No. Dosis Sacarato férrico</td>
                <td><?php echo $post_numero_dosisSacarato; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Carboximaltosa férrica Post</td>
                <td><?php echo $post_carboximaltosa; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Dosis Carboximaltosa férrica</td>
                <td><?php echo $post_dosis_carboximaltosa; ?></td>
            </tr>
            
            <tr>
                <td style="color:maroon; font-size: 13px;"> * No. Dosis Carboximaltosa férrica</td>
                <td><?php echo $post_numero_dosisCarboximaltosa; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hierro dextrano Post</td>
                <td><?php echo $post_dextrano; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Dosis Dosis Hierro dextrano</td>
                <td><?php echo $post_dosis_dextrano; ?></td>
            </tr>
            
            <tr>
                <td style="color:maroon; font-size: 13px;"> * No. Dosis Hierro dextrano</td>
                <td><?php echo $post_numero_dosisDextrano; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Premedicación Post</td>
                <td><?php echo $post_premeditacion; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Medicamento</td>
                <td><?php echo $post_medicamento; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Solución infundida</td>
                <td><?php echo $post_solucion_infundida; ?></td>
            </tr>

            <!--===================================Reacciones Adversas Previa Aplicación de Hierro====================================-->
            <tr>
                <th scope="col"  style="background-color: rgb(205, 92, 92, 0.8);">Reacciones Adversas Post Aplicación de Hierro</th>
                <th scope="col" style="background-color: rgb(205, 92, 92, 0.8);"> </th>
            </tr>
            
            <tr>
                <td class="estilo-celda">Cefalea</td>
                <td><?php echo $post_cefalea; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Náuseas</td>
                <td><?php echo $post_nauseas; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hipertensión</td>
                <td><?php echo $post_hipertension; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Hipotensión</td>
                <td><?php echo $post_hipotension; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Taquicardia</td>
                <td><?php echo $post_taquicardia; ?></td>
            </tr>

            <tr>
                <td class="estilo-celda">Bradicardia</td>
                <td><?php echo $post_bradicardia; ?></td>
            </tr>
            
            <tr>
                <td class="estilo-celda">Otro</td>
                <td><?php echo $post_otro; ?></td>
            </tr>

            <tr>
                <td style="color:maroon; font-size: 13px;"> * Grado Reacción Adversa</td>
                <td><?php echo $post_grado_reaccion; ?></td>
            </tr>
            

            

        </tbody>
    </table>





</body>
</html>
       