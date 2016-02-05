<?php           
    $server="198.57.247.163:3306"; 
    $usuario="adcoadse_prueba";
    $contras="prueba";
    $base="adcoadse_prueba";
    $conex= mysql_pconnect($server,$usuario,$contras);			 
    if(!$conex)
    {
        print_r($conex);
        echo "error"; 			
    }		
    mysql_select_db($base);
    print_r($conex);
    mysql_close($conex);
?>