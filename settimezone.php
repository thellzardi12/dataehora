<?php
    $fuso = new DateTimeZone('America/New_York');
    $data = new Datetime('28-09-2023');
    $data->setTimezone($fuso);
   echo $data->format('d-m-Y H:i:s');
?>