
<?php
    $edad=intval($_REQUEST['edad']);

    if($edad>=18){
        echo "El usuario tiene edad para conducir";
    }else{
        echo "El usuario no tiene edad para conducir";
    }
?>