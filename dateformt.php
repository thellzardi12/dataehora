<?php
    $atual = new Datetime();
    $especifica = new Datetime(' 1990-01-22');
    $texto = new Datetime('+1 month');

    echo $atual->format('d-m-:Y H:i:s');
?><br /><?php
    echo $especifica-> format('1990-01-22');
?><br /><?php
    echo $texto->format('d-m-Y H:i:s');
?>