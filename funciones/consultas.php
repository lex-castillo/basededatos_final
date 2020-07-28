<?php

namespace consultas_sql;
use funciones\mysqlfunciones;
 class consultas{
public function projectGet(){
    $qry = 'SELECT * FROM proyectos';
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}


 }


?>