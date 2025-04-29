<?php
$file = fopen('data.txt', 'r');
while(! feof($file)) {
    echo fgets($file) . "....akhir baris<br>";
}
fclose($file);