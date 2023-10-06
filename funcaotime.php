<?php

$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:      '. date('d/m/y') ."<br>";
echo 'Next Week: '. date('d/m/y', $nextWeek) ."<br>";
echo 'Next Week: '. date('d/m/y', strtotime('+1 week')) ."<br>";

?>

