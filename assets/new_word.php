<?php

function word_choice() {

    $file = fopen("words.txt", "r");
    $i = 0;
    $tab = [];
    
    while(!feof($file)) {
        $line = fgets($file, 4096);
        $i++;
        array_push($tab, $line);
    };
    
    $random_index = rand(0, sizeof($tab) - 1);

    return $tab[$random_index];

}
    