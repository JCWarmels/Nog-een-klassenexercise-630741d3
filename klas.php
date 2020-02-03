<?php

echo("Geef een lijst met namen op, splits ze op met spaties.".PHP_EOL);
$name = readline();
$names = explode(" ", $name);

foreach($names as $stuff){
    echo($stuff.PHP_EOL);
}