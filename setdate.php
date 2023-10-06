<?php
    $data = new Datetime('28-09-2023');
    $data->setDate(2024, 12, 25);
   echo $data->format('d-m-y H:i:s');
?>