<?php require 'assets/generator.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Rowdies&display=swap" rel="stylesheet"> 
    <title>Guess The Word</title>
</head>
<body>
    <div id="container">
        <div class="sidebar">
        </div>
        
        <div class="content">
            <div class="progressbar">
                <h1>Progressbar</h1>
            </div>
                <div class="user-content">
                <form class="cards" action="index.php">
                    <div class="item">
                        <h2>Vous devez deviner le mot <span class="to-guess"><? echo $word_to_guess; ?></span></h2>
                        <input type="text" id="to_guess" name='answer'>
                    </div>
                </form>
                <div class="results">
                    <div class="item">
                        <h2>Voici les résultats pour le mot <span class="to-guess"><?php if (isset($_GET['answer'])) { echo $last_word; } ?></span></h2>
                        <?php
                            if (isset($_GET['answer']) && $is_found) {
                                echo '<h3 class="result-comment">Félicitations ! La traduction était bien <span class=\"to-guess\">' . $correct_translation . '</span></h3>';
                            } else if (isset($_GET['answer'])) {
                                echo '<h3 class="result-comment">Raté !</h3>';
                                echo "<h4 class=\"result-comment-translation\">La traduction correcte est : <span class=\"to-guess\">" . $correct_translation . '</span></h4>';
                            }
                        ?>
                    </div>
                </div>
                </div>
        </div>
    </div>
</body>
</html>