<?php 
  // print_r($_REQUEST);
  $promedio=0;
  getType($_REQUEST['calificacion1']); 
  for($i=0;$i<10;$i++){
    $promedio+=intval($_REQUEST['calificacion'.$i]);
    
  }
    $promedio=$promedio/10;
    echo "Promedio: ".$promedio;
?>