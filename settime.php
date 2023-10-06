<?php
$data = new Datetime('22-01-1990');
$data->setTime(9, 15, 44);
echo $data->format('d-m-y H:i:s');
?>