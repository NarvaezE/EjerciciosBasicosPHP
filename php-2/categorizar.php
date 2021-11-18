<?php
    $rate=intval($_REQUEST['categorizar']);

    if($rate>=0 && $rate<3){
        echo "Categoria: Muy deficiente";
    }else if($rate>=3 && $rate<5){
        echo "Categoria: Insuficiente";
    }else if($rate>=5 && $rate<6){
        echo "Categoria: Suficiente";
    }else if($rate>=6 && $rate<7){
        echo "Categoria: Bien";
    }else if($rate>=7 && $rate<9){
        echo "Categoria: Notable ";
    }else if($rate>=9 && $rate<11){
        echo "Categoria: Sobresaliente";
    }else{
        echo "Debe ingresar un valor entre el 0 al 10";
    }
?>