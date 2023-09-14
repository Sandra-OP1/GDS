<?php
    include('dbconfig.php');
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if (!$conn) {
        die("Error en la conexion a la base de datos" . mysqli_connect_error());
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id_paciente  = $_POST["id_paciente"];
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

        $data_paciente = "UPDATE datos_paciente SET
            curp = '$curp',
            nombre_paciente = '$nombre',
            fecha_nacimiento = '$fecha_nacimiento',
            edad = '$edad',
            sexo = '$sexo',
            asnm = '$asnm',
            talla = '$talla',
            peso = '$peso',
            imc = '$imc',
            resultadoimc = '$imcdescripcion'
        WHERE id_paciente='$id_paciente'" ;
        

        mysqli_query($conn,$data_paciente);


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

        $data_conmorbilidades = "UPDATE conmorbilidades
        SET
            tip = '$TIP',
            cancer = '$Cáncer',
            neumonia = '$Neumonia',
            drogasIV = '$DrogasIV',
            eclampsia = '$Eclampsia',
            artropatia = '$Artropatía',
            les_activo = '$LESActivo',
            miomatosis = '$Miomatosis',
            nefropatia = '$Nefropatia',
            colelitiasis = '$Colelitiasis',
            sx_hellp = '$SxdeHELLP',
            sx_nefrotico = '$SxNefrotico',
            drepanocitica = '$Drepanocitica',
            hipotiroidismo = '$Hipotiroidismo',
            miastenia_gravis = '$Miastenia',
            ruptura_esplenica = '$RupturaEsplenica',
            lesion_renal = '$LESRenalAguda',
            enferemedades_graves = '$EnfermedadesGraves',
            diabetes_gestacional = '$diabetesgestacional',
            condilomatosis_vulvar = '$candilomatosisvalvular',
            hipertension_gestacional = '$HASGestacional',
            falla_cardiaca = '$FallaCardiacaCardiopatia',
            infeccion_vias = '$InfeccionViasUrinarias',
            desequilibrio_hidro = '$DesequilibrioHidro',
            ninguna = '$ninguno'
        WHERE id_paciente = '$id_paciente';";

        mysqli_query($conn,$data_conmorbilidades);


        $Embarazo = $_POST['Embarazo'];
        $Puerperio = $_POST['Puerperio'];
        $data_antencionMedica = "UPDATE atencion_medica
        SET
            embarazo = '$Embarazo',
            puerperio = '$Puerperio'
        WHERE id_paciente = '$id_paciente';";
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

        $data_preHierro = "UPDATE pre_hierro
        SET
            pre_hemoglobina = '$pre_Hemoglobina',
            pre_b12 = '$pre_b12',
            pre_ferretina = '$pre_ferritina',
            pre_calculoDeficiencia = '$pre_calculo',
            pre_tratamiento = '$pre_tratamientohierro',
            pre_sacarato = '$sacaratoferrico',
            dosis_sacarato = '$dosisscaratoferrico',
            numero_dosisSacarato = '$nodosissfpre',
            pre_carboximaltosa = '$carboximaltosaferrica',
            dosis_carboximaltosa = '$dosiscarboximaltosaferrica',
            numero_dosisCarboximaltosa = '$nocarboximaltosaferrica',
            pre_dextrano = '$hierrodextrano',
            dosis_dextrano = '$dosishierro',
            numero_dosisDextrano = '$nodosishierro',
            premeditacion = '$premedicacion',
            medicamento = '$medicamento',
            solucion_infundida = '$pre_solucioninfundida'
        WHERE id_paciente = '$id_paciente';";

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

        $data_preReaccion = "UPDATE reacciones_previas
        SET
            pre_cefalea = '$cefaleaRA',
            pre_nauseas = '$nauseasRA',
            pre_hipertension = '$hipertensionRA',
            pre_hipotension = '$hipotensionRA',
            pre_taquicardia = '$taquicardiaRA',
            pre_bradicardia = '$bradicardiaRA',
            pre_otro = '$otroRA',
            pre_ninguna = '$ningunaRA',
            pre_grado_reaccion = '$reaccionadversa'
        WHERE id_paciente = '$id_paciente';";

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

        $data_qx = "UPDATE procedimiento_qx
        SET
            cirugia = '$cirugia',
            fecha_cirugia = '$fechacirugia',
            pre_qxHemoglobina = '$hemoglobinapre',
            cesarea = '$cesarea',
            fecha_cesarea = '$fechacesarea',
            hemorragia_masiva = '$HemorragiaMasiva',
            cantidad_sangrado = '$cantidadsangrado',
            hemorragia = '$Hemorragia',
            complicasiones = '$Complicaciones',
            transfusiones = '$Transfusion',
            ninguna_transfusion = '$ninguncomponente',
            plasma = '$plasma',
            no_plasma = '$componenteplasma',
            plaquetas = '$plaquetas',
            no_plaquetas = '$componenteplaquetas',
            crioprecipitado = '$Crioprecipitados',
            no_crioprecipitado = '$componentescrioprecipitados',
            plaqueta_globular = '$PaqueteGlobular',
            no_plaqueta_globular = '$componentePG'
        WHERE id_paciente = '$id_paciente';";

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

        $data_postHierro = "UPDATE post_hierro
        SET
            post_hemoglobina = '$post_hemo',
            post_b12 = '$post_b12',
            post_ferretina = '$post_ferretina',
            post_calculoDeficiencia = '$post_calculo',
            post_tratamiento = '$post_tratamientohierro',
            tratamiento_oral = '$tratamientoviaoral',
            post_sacarato = '$sacaratoferricopost',
            post_dosis_sacarato = '$dosisscaratoferricopost',
            post_numero_dosisSacarato = '$nodosissacaratoferricopost',
            post_carboximaltosa = '$carboximaltosaferricapost',
            post_dosis_carboximaltosa = '$dosiscarboximaltosaferricapost',
            post_numero_dosisCarboximaltosa = '$nocarboximaltosaferricapost',
            post_dextrano = '$hierrodextranopost',
            post_dosis_dextrano = '$dosishierropost',
            post_numero_dosisDextrano = '$nodosishierropost',
            post_premeditacion = '$premedicacionpost',
            post_medicamento = '$medicamentopost',
            post_solucion_infundida = '$post_solucioninfundida'
        WHERE id_paciente = '$id_paciente';";

        mysqli_query($conn,$data_postHierro);

        $cefaleaRApost =isset($_POST['cefaleaRApost']) ? 1 : 0;
        $nauseasRApost =isset($_POST['nauseasRApost']) ? 1 : 0;
        $hipertensionRApost = isset($_POST['hipertensionRApost']) ? 1 : 0;
        $hipotensionRApost =isset($_POST['hipotensionRApost']) ? 1 : 0;
        $taquicardiaRApost =isset($_POST['taquicardiaRApost']) ? 1 : 0;
        $bradicardiaRApost =isset($_POST['bradicardiaRApost']) ? 1 : 0;
        $otroRApost =isset($_POST['otroRApost']) ? 1 : 0;
        $ningunaRApost =isset($_POST['ningunaRApost']) ? 1 : 0;
        $reaccionadversapost = $_POST['reaccionadversapost'];

        $data_postReacciones = "UPDATE reacciones_posteriores
        SET
            post_cefalea = '$cefaleaRApost',
            post_nauseas = '$nauseasRApost',
            post_hipertension = '$hipertensionRApost',
            post_hipotension = '$hipotensionRApost',
            post_taquicardia = '$taquicardiaRApost',
            post_bradicardia = '$bradicardiaRApost',
            post_otro = '$otroRApost',
            post_ninguna = '$ningunaRApost',
            post_grado_reaccion = '$reaccionadversapost'
        WHERE id_paciente = '$id_paciente';";


        mysqli_query($conn,$data_postReacciones);


        echo 'success'; // Éxito en la inserción

        mysqli_close($conn);
    }
?>