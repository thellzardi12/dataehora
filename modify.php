<?php
    $data = new Datetime('28-09-2023');
    $data->modify('+1 month');
   echo $data->format('d-m-y H:i:s');

?>