<?php


$current_word = word_choice();  // choosing a new word

$word_to_guess = explode(":", $current_word)[0];
$translation = explode(":", $current_word)[1];
file_put_contents('last_words.txt', $translation);