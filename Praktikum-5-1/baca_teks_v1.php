<?php

$isiFile = file_get_contents('data.txt');

echo nl2br($isiFile);