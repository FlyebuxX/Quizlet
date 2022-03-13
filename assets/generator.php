<?php

require 'assets/new_word.php';  // importing a new word

if (!isset($_GET['answer'])) {  // first visit on the website

    $current_word = word_choice();  // choosing a new word
    $word_to_guess = explode(":", $current_word)[0];
    $translation = explode(":", $current_word)[1];
    file_put_contents('last_words.txt', $word_to_guess . ':' . $translation);

} else {  // the website has already been visited
    
    require 'assets/get_update.php';  // updating vars

    if ($_GET['answer'] === $last_translation) {
        $is_found = TRUE;
    } else {
        $is_found = FALSE;
    }
    $correct_translation = $last_translation;

    $current_word = word_choice();  // choosing a new word

    $word_to_guess = explode(":", $current_word)[0];
    $translation = explode(":", $current_word)[1];

    file_put_contents('last_words.txt', $word_to_guess . ':' . $translation);

}

?>