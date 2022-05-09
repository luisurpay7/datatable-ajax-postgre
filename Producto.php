<?php
require 'ssp.class.pg.php';

            //include 'ssp.class.pg.php';
            $table = "fn_doctor_get_lst()";
            $primaryKey = '_doc_id';
            $columns = array(
                            array('db' => '_doc_id', 'dt' => 0),   
                            array('db' => '_doc_dni', 'dt' => 1),
                            array('db' => '_doc_ape', 'dt' => 2),
                            array('db' => '_doc_nom', 'dt' => 3),
                            array('db' => '_doc_cmp', 'dt' => 4),
                            array('db' => '_id_sex', 'dt' => 5)	   
            ); 
            
            //Condiciones adicionales para el WHERE
            $filtroAdd = "_doc_id <> 0 ";
        
            //Parámetros de conexión //Condiciones adicionales para el WHERE
            $pg_details = array('user' => 'postgres', 'pass' => 'luis', 'db' => 'test10Produccion', 'host' => 'localhost');
            //echo var_dump($pg_details);
            echo json_encode(SSP::simple($_GET, $pg_details, $table, $primaryKey, $columns, $filtroAdd));
    
            //echo "DENTRO DE dt_productos";

    
?>