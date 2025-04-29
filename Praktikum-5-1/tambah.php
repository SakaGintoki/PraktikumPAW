<?php
$file = fopen('catatan.txt', 'a');
fwrite($file, 'ini adalah catatan tambahan....\n');
fclose($file);