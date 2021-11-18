<?php
    $n = intval($_REQUEST['fibonacci']);
    
    $numeroUno=1;
    $numeroDos = 1;
    $array=[$numeroUno,$numeroDos];
    for($i=0;$i<$n;$i++){
        $temp=$numeroUno+$numeroDos;
        $array[]=$temp;
        $numeroUno=$numeroDos;
        $numeroDos=$temp;
    }
    $resultado=[];
    for($i=0;$i<$n;$i++){
        $resultado[]=$array[$i];
    }
    // print_r($resultado);
    
    for($i=0;$i<$n;$i++){
        echo "<br>";
        echo $resultado[$i];
    }
?>
