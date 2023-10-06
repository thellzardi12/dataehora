<?php

    $atual = new Datetime();
    $especifica = new Datetime(' 1990-01-22');
    $texto = new Datetime('+1 month');

    print_r($atual);
    print_r($especifica);
    print_r($texto);

    ?>