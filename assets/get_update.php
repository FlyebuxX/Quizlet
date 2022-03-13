<?php

// get last word to guess and its translation
$last_word = explode(':', file_get_contents('last_words.txt'))[0];
$last_word = str_replace("\n", "",$last_word);
$last_word = str_replace("\r", "",$last_word);

$last_translation = explode(':', file_get_contents('last_words.txt'))[1];
$last_translation = str_replace("\n", "",$last_translation);
$last_translation = str_replace("\r", "",$last_translation);