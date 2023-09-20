<?php

$x = array( "V" => "Verde", "A" => "Amarelo", "B" => "Branco");

    foreach ($x as $key => $value) {
        echo $key. "=> " . $value . "<br/>"; 
    }

    var_dump($x);
?>