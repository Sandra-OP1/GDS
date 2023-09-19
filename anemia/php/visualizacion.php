<?php
        include('dbconfig.php');
        $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        $id_paciente = null;
        if (isset($_GET['idPaciente']) && is_numeric($_GET['idPaciente'])) {
                $id_paciente = $_GET['idPaciente'];

                $query= "SELECT dp.*,c.*,am.*,ph.*,rp.*,pq.*,phi.*,rpo.* FROM datos_paciente dp
                JOIN conmorbilidades c ON dp.id_paciente=c.id_paciente
                JOIN atencion_medica am ON dp.id_paciente=am.id_paciente
                JOIN pre_hierro ph ON dp.id_paciente=ph.id_paciente
                JOIN reacciones_previas rp ON dp.id_paciente=rp.id_paciente
                JOIN procedimiento_qx pq ON dp.id_paciente=pq.id_paciente
                JOIN post_hierro phi ON dp.id_paciente=phi.id_paciente
                JOIN reacciones_posteriores rpo ON dp.id_paciente=rpo.id_paciente WHERE dp.id_paciente='$id_paciente';";
        
                $data= mysqli_query($conn,$query);
        
                if ($data->num_rows > 0) {
                        $row = $data -> fetch_assoc();
                        $curp = $row['curp'];
                        $nombre_paciente = $row['nombre_paciente'];
                        $fecha_nacimiento = $row['fecha_nacimiento'];
                        $edad = $row['edad'];
                        $sexo = $row['sexo'];
                        $asnm = $row['asnm'];
                        $talla = $row['talla'];
                        $peso = $row['peso'];
                        $imc = $row['imc'];
                        $resultadoimc = $row['resultadoimc'];
                
                        $tip = $row['tip'];
                        $cancer = $row['cancer'];
                        $neumonia = $row['neumonia'];
                        $drogasIV = $row['drogasIV'];
                        $eclampsia = $row['eclampsia'];
                        $artropatia = $row['artropatia'];
                        $les_activo = $row['les_activo'];
                        $miomatosis = $row['miomatosis'];
                        $nefropatia = $row['nefropatia'];
                        $colelitiasis = $row['colelitiasis'];
                        $sx_hellp = $row['sx_hellp'];
                        $sx_nefrotico = $row['sx_nefrotico'];
                        $drepanocitica = $row['drepanocitica'];
                        $hipotiroidismo = $row['hipotiroidismo'];
                        $miastenia_gravis = $row['miastenia_gravis'];
                        $ruptura_esplenica = $row['ruptura_esplenica'];
                        $lesion_renal = $row['lesion_renal'];
                        $enferemedades_graves = $row['enferemedades_graves'];
                        $diabetes_gestacional = $row['diabetes_gestacional'];
                        $condilomatosis_vulvar = $row['condilomatosis_vulvar'];
                        $hipertension_gestacional = $row['hipertension_gestacional'];
                        $falla_cardiaca = $row['falla_cardiaca'];
                        $infeccion_vias = $row['infeccion_vias'];
                        $desequilibrio_hidro = $row['desequilibrio_hidro'];
                        $ninguna = $row['ninguna'];
                
                        $embarazo = $row['embarazo'];
                        $puerperio = $row['puerperio'];
                
                        $pre_hemoglobina = $row['pre_hemoglobina'];
                        $pre_b12 = $row['pre_b12'];
                        $pre_ferretina = $row['pre_ferretina'];
                        $pre_calculoDeficiencia = $row['pre_calculoDeficiencia'];
                        $pre_tratamiento = $row['pre_tratamiento'];
                        $pre_sacarato = $row['pre_sacarato'];
                        $dosis_sacarato = $row['dosis_sacarato'];
                        $numero_dosisSacarato = $row['numero_dosisSacarato'];
                        $pre_carboximaltosa = $row['pre_carboximaltosa'];
                        $dosis_carboximaltosa = $row['dosis_carboximaltosa'];
                        $numero_dosisCarboximaltosa = $row['numero_dosisCarboximaltosa'];
                        $pre_dextrano = $row['pre_dextrano'];
                        $dosis_dextrano = $row['dosis_dextrano'];
                        $numero_dosisDextrano = $row['numero_dosisDextrano'];
                        $premeditacion = $row['premeditacion'];
                        $medicamento = $row['medicamento'];
                        $solucion_infundida = $row['solucion_infundida'];
                
                        $pre_cefalea = $row['pre_cefalea'];
                        $pre_nauseas = $row['pre_nauseas'];
                        $pre_hipertension = $row['pre_hipertension'];
                        $pre_hipotension = $row['pre_hipotension'];
                        $pre_taquicardia = $row['pre_taquicardia'];
                        $pre_bradicardia = $row['pre_bradicardia'];
                        $pre_otro = $row['pre_otro'];
                        $pre_ninguna = $row['pre_ninguna'];
                        $pre_grado_reaccion = $row['pre_grado_reaccion'];
                
                        $cirugia = $row['cirugia'];
                        $fecha_cirugia = $row['fecha_cirugia'];
                        $pre_qxHemoglobina = $row['pre_qxHemoglobina'];
                        $cesarea = $row['cesarea'];
                        $fecha_cesarea = $row['fecha_cesarea'];
                        $hemorragia_masiva = $row['hemorragia_masiva'];
                        $cantidad_sangrado = $row['cantidad_sangrado'];
                        $hemorragia = $row['hemorragia'];
                        $complicasiones = $row['complicasiones'];
                        $transfusiones = $row['transfusiones'];
                        $ninguna_transfusion = $row['ninguna_transfusion'];
                        $plasma = $row['plasma'];
                        $no_plasma = $row['no_plasma'];
                        $plaquetas = $row['plaquetas'];
                        $no_plaquetas = $row['no_plaquetas'];
                        $crioprecipitado = $row['crioprecipitado'];
                        $no_crioprecipitado = $row['no_crioprecipitado'];
                        $plaqueta_globular = $row['plaqueta_globular'];
                        $no_plaqueta_globular = $row['no_plaqueta_globular'];
                
                        $post_hemoglobina = $row['post_hemoglobina'];
                        $post_b12 = $row['post_b12'];
                        $post_ferretina = $row['post_ferretina'];
                        $post_calculoDeficiencia = $row['post_calculoDeficiencia'];
                        $post_tratamiento = $row['post_tratamiento'];
                        $tratamiento_oral = $row['tratamiento_oral'];
                        $post_sacarato = $row['post_sacarato'];
                        $post_dosis_sacarato = $row['post_dosis_sacarato'];
                        $post_numero_dosisSacarato = $row['post_numero_dosisSacarato'];
                        $post_carboximaltosa = $row['post_carboximaltosa'];
                        $post_dosis_carboximaltosa = $row['post_dosis_carboximaltosa'];
                        $post_numero_dosisCarboximaltosa = $row['post_numero_dosisCarboximaltosa'];
                        $post_dextrano = $row['post_dextrano'];
                        $post_dosis_dextrano = $row['post_dosis_dextrano'];
                        $post_numero_dosisDextrano = $row['post_numero_dosisDextrano'];
                        $post_premeditacion = $row['post_premeditacion'];
                        $post_medicamento = $row['post_medicamento'];
                        $post_solucion_infundida = $row['post_solucion_infundida'];
                
                        $post_cefalea = $row['post_cefalea'];
                        $post_nauseas = $row['post_nauseas'];
                        $post_hipertension = $row['post_hipertension'];
                        $post_hipotension = $row['post_hipotension'];
                        $post_taquicardia = $row['post_taquicardia'];
                        $post_bradicardia = $row['post_bradicardia'];
                        $post_otro = $row['post_otro'];
                        $post_ninguna = $row['post_ninguna'];
                        $post_grado_reaccion = $row['post_grado_reaccion'];
                        
                        $conn ->close();
                }else {
                        echo "No se ando podido encontrar los datos del paciente";
                        exit;
                }
        }else {
                echo $id_paciente;
                exit;
        }


?>
