<?php 
    function conectar_db (){
        $serv="localhost";
        $usr="root";
        $pss="";
        $bd="trabajo_practino_n1";
        $c=mysqli_connect($serv, $usr, $pss, $bd);
        return $c;
    }
?>