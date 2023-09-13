<?php
    include('dbconfig.php');
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if (!$conn) {
        die("Error en la conexion a la base de datos" . mysqli_connect_error());
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $curp = $_POST['curp'];
        $nombre = $_POST['nombre'];
        $fecha_nacimiento = $_POST['fecha'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $asnm = $_POST['asnm'];
        $talla = $_POST['talla'];
        $peso = $_POST['peso'];
        $imc = $_POST['imc'];
        $imcdescripcion = $_POST['imcdescripcion'];

        $data_paciente = "INSERT INTO datos_paciente 
        (curp,nombre_paciente,fecha_nacimiento,edad,sexo,asnm,talla,peso,imc,resultadoimc)
        VALUES('$curp','$nombre','$fecha_nacimiento','$edad','$sexo','$asnm','$talla','$peso','$imc','$imcdescripcion')" ;

        mysqli_query($conn,$data_paciente);
        $last_id = mysqli_insert_id($conn);


        $TIP = isset($_POST['TIP']) ? 1 : 0;
        $Cáncer = isset($_POST['Cáncer']) ? 1 : 0;
        $Neumonia = isset($_POST['Neumonia']) ? 1 : 0;
        $DrogasIV = isset($_POST['DrogasIV']) ? 1 : 0;
        $Eclampsia = isset($_POST['Eclampsia']) ? 1 : 0;
        $Artropatía = isset($_POST['Artropatía']) ? 1 : 0;
        $LESActivo = isset($_POST['LESActivo']) ? 1 : 0;
        $Miomatosis = isset($_POST['Miomatosis']) ? 1 : 0;
        $Nefropatia = isset($_POST['Nefropatia']) ? 1 : 0;
        $Colelitiasis = isset($_POST['Colelitiasis']) ? 1 : 0;
        $SxdeHELLP = isset($_POST['SxdeHELLP']) ? 1 : 0;
        $SxNefrotico = isset($_POST['SxNefrotico']) ? 1 : 0;
        $Drepanocitica = isset($_POST['Drepanocitica']) ? 1 : 0;
        $Hipotiroidismo = isset($_POST['Hipotiroidismo']) ? 1 : 0;
        $Miastenia = isset($_POST['Miastenia']) ? 1 : 0;
        $RupturaEsplenica = isset($_POST['RupturaEsplenica']) ? 1 : 0;
        $LESRenalAguda = isset($_POST['LESRenalAguda']) ? 1 : 0;
        $EnfermedadesGraves = isset($_POST['EnfermedadesGraves']) ? 1 : 0;
        $diabetesgestacional = isset($_POST['diabetesgestacional']) ? 1 : 0;
        $candilomatosisvalvular = isset($_POST['candilomatosisvalvular']) ? 1 : 0;
        $HASGestacional = isset($_POST['HASGestacional']) ? 1 : 0;
        $FallaCardiacaCardiopatia = isset($_POST['FallaCardiacaCardiopatia']) ? 1 : 0;
        $InfeccionViasUrinarias = isset($_POST['InfeccionViasUrinarias']) ? 1 : 0;
        $DesequilibrioHidro = isset($_POST['DesequilibrioHidro']) ? 1 : 0;
        $ninguno = isset($_POST['ninguno']) ? 1 : 0;

        $data_conmorbilidades = "INSERT INTO conmorbilidades VALUES ('$TIP','$Cáncer','$Neumonia','$DrogasIV','$Eclampsia',
        '$Artropatía','$LESActivo','$Miomatosis','$Nefropatia','$Colelitiasis','$SxdeHELLP','$SxNefrotico','$Drepanocitica',
        '$Hipotiroidismo','$Miastenia','$RupturaEsplenica','$LESRenalAguda','$EnfermedadesGraves','$diabetesgestacional',
        '$candilomatosisvalvular','$HASGestacional','$FallaCardiacaCardiopatia','$InfeccionViasUrinarias','$DesequilibrioHidro',
        '$ninguno','$last_id');";

        mysqli_query($conn,$data_conmorbilidades);


        $Embarazo = $_POST['Embarazo'];
        $Puerperio = $_POST['Puerperio'];
        $data_antencionMedica = "INSERT INTO atencion_medica VALUES ('$Embarazo','$Puerperio','$last_id');";
        mysqli_query($conn,$data_antencionMedica);

        $pre_Hemoglobina = $_POST['pre_Hemoglobina'];
        $pre_b12 = $_POST['pre_b12'];
        $pre_ferritina = $_POST['pre_ferritina'];
        $pre_calculo = $_POST['pre_calculo'];
        $pre_tratamientohierro = $_POST['pre_tratamientohierro'];
        $sacaratoferrico = $_POST['sacaratoferrico'];
        $dosisscaratoferrico = $_POST['dosisscaratoferrico'];
        $nodosissfpre = $_POST['nodosissfpre'];
        $carboximaltosaferrica = $_POST['carboximaltosaferrica'];
        $dosiscarboximaltosaferrica = $_POST['dosiscarboximaltosaferrica'];
        $nocarboximaltosaferrica = $_POST['nocarboximaltosaferrica'];
        $hierrodextrano = $_POST['hierrodextrano'];
        $dosishierro = $_POST['dosishierro'];
        $nodosishierro = $_POST['nodosishierro'];
        $premedicacion = $_POST['premedicacion'];
        $medicamento = $_POST['medicamento'];
        $pre_solucioninfundida = $_POST['pre_solucioninfundida'];

        $data_preHierro = "INSERT INTO pre_hierro VALUES ('$pre_Hemoglobina','$pre_b12','$pre_ferritina','$pre_calculo','$pre_tratamientohierro','$sacaratoferrico',
        '$dosisscaratoferrico','$nodosissfpre','$carboximaltosaferrica','$dosiscarboximaltosaferrica','$nocarboximaltosaferrica','$hierrodextrano','$dosishierro',
        '$nodosishierro','$premedicacion','$medicamento','$pre_solucioninfundida','$last_id');";

        mysqli_query($conn,$data_preHierro);


        $cefaleaRA = isset ($_POST['cefaleaRA'])? 1 : 0;
        $nauseasRA =isset($_POST['nauseasRA'])? 1 : 0;
        $hipertensionRA =isset($_POST['hipertensionRA'])? 1 : 0;
        $hipotensionRA =isset($_POST['hipotensionRA'])? 1 : 0;
        $taquicardiaRA =isset($_POST['taquicardiaRA'])? 1 : 0;
        $bradicardiaRA =isset($_POST['bradicardiaRA'])? 1 : 0;
        $otroRA =isset($_POST['otroRA'])? 1 : 0;
        $ningunaRA =isset($_POST['ningunaRA'])? 1 : 0;
        $reaccionadversa =isset($_POST['reaccionadversa'])? 1 : 0;

        $data_preReaccion = "INSERT INTO reacciones_previas VALUES ('$cefaleaRA','$nauseasRA','$hipertensionRA','$hipotensionRA','$taquicardiaRA',
        '$bradicardiaRA','$otroRA','$ningunaRA','$reaccionadversa','$last_id');";

        mysqli_query($conn,$data_preReaccion);

        $cirugia = $_POST['cirugia'];
        $fechacirugia = $_POST['fechacirugia'];
        $hemoglobinapre = $_POST['hemoglobinapre'];
        $cesarea = $_POST['cesarea'];
        $fechacesarea = $_POST['fechacesarea'];
        $HemorragiaMasiva = $_POST['HemorragiaMasiva'];
        $cantidadsangrado = $_POST['cantidadsangrado'];
        $Hemorragia = $_POST['Hemorragia'];
        $Complicaciones = $_POST['Complicaciones'];
        $Transfusion = $_POST['Transfusion'];
        $ninguncomponente = isset($_POST['ninguncomponente'])? 1 : 0;
        $plasma = isset($_POST['plasma'])? 1 : 0;
        $componenteplasma = $_POST['componenteplasma'];
        $plaquetas = isset($_POST['plaquetas'])? 1 : 0;
        $componenteplaquetas = $_POST['componenteplaquetas'];
        $Crioprecipitados = isset($_POST['Crioprecipitados'])? 1 : 0;
        $componentescrioprecipitados = $_POST['componentescrioprecipitados'];
        $PaqueteGlobular = isset($_POST['PaqueteGlobular'])? 1 : 0;
        $componentePG = $_POST['componentePG'];

        $data_qx = "INSERT INTO procedimiento_qx VALUES ('$cirugia','$fechacirugia','$hemoglobinapre','$cesarea','$fechacesarea','$HemorragiaMasiva',
        '$cantidadsangrado','$Hemorragia','$Complicaciones','$Transfusion','$ninguncomponente','$plasma','$componenteplasma','$plaquetas','$componenteplaquetas',
        '$Crioprecipitados','$componentescrioprecipitados','$PaqueteGlobular','$componentePG','$last_id');";

        mysqli_query($conn,$data_qx);

        $post_hemo = $_POST['post_hemo'];
        $post_b12 = $_POST['post_b12'];
        $post_ferretina = $_POST['post_ferretina'];
        $post_calculo = $_POST['post_calculo'];
        $post_tratamientohierro = $_POST['post_tratamientohierro'];
        $tratamientoviaoral = $_POST['tratamientoviaoral'];
        $sacaratoferricopost = $_POST['sacaratoferricopost'];
        $dosisscaratoferricopost = $_POST['dosisscaratoferricopost'];
        $nodosissacaratoferricopost = $_POST['nodosissacaratoferricopost'];
        $carboximaltosaferricapost = $_POST['carboximaltosaferricapost'];
        $dosiscarboximaltosaferricapost = $_POST['dosiscarboximaltosaferricapost'];
        $nocarboximaltosaferricapost = $_POST['nocarboximaltosaferricapost'];
        $hierrodextranopost = $_POST['hierrodextranopost'];
        $dosishierropost = $_POST['dosishierropost'];
        $nodosishierropost = $_POST['nodosishierropost'];
        $premedicacionpost = $_POST['premedicacionpost'];
        $medicamentopost = $_POST['medicamentopost'];
        $post_solucioninfundida = $_POST['post_solucioninfundida'];

        $data_postHierro = "INSERT INTO post_hierro VALUES ('$post_hemo','$post_b12','$post_ferretina','$post_calculo','$post_tratamientohierro',
        '$tratamientoviaoral','$sacaratoferricopost','$dosisscaratoferricopost','$nodosissacaratoferricopost','$carboximaltosaferricapost',
        '$dosiscarboximaltosaferricapost','$nocarboximaltosaferricapost','$hierrodextranopost','$dosishierropost','$nodosishierropost','$premedicacionpost',
        '$medicamentopost','$post_solucioninfundida','$last_id');";

        mysqli_query($conn,$data_postHierro);

        $cefaleaRApost =isset($_POST['cefaleaRApost']) ? 1 : 0;
        $nauseasRApost =isset($_POST['nauseasRApost']) ? 1 : 0;
        $hipertensionRApost = isset($_POST['hipertensionRApost']) ? 1 : 0;
        $hipotensionRApost =isset($_POST['hipotensionRApost']) ? 1 : 0;
        $taquicardiaRApost =isset($_POST['taquicardiaRApost']) ? 1 : 0;
        $bradicardiaRApost =isset($_POST['bradicardiaRApost']) ? 1 : 0;
        $otroRApost =isset($_POST['otroRApost']) ? 1 : 0;
        $ningunaRApost =isset($_POST['ningunaRApost']) ? 1 : 0;
        $reaccionadversapost =isset($_POST['reaccionadversapost']) ? 1 : 0;

        $data_postReacciones = "INSERT INTO reacciones_posteriores VALUES ('$cefaleaRApost','$nauseasRApost','$hipertensionRApost','$hipotensionRApost',
        '$taquicardiaRApost','$bradicardiaRApost','$otroRApost','$ningunaRApost','$reaccionadversapost','$last_id');";

        mysqli_query($conn,$data_postReacciones);


        echo 'success'; // Éxito en la inserción

        mysqli_close($conn);

    }
?>