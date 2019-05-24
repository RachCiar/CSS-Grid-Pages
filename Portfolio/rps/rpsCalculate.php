<?php  
$page_title = 'Two Player Game';
include('header.html.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   
    <body>
<h1>Rock Paper Scissors - Two Player Game</h1>
        <input type="hidden" name="player1" value="<?php echo $_POST['player1']; ?>">
        <input type="hidden" name="player2" value="<?php echo $_POST['player2']; ?>">
        <br><br>

        <?php
        $player1 = $_POST["player1"]; //declare the variables that were saved in the session
        $player2 = $_POST["player2"]; //declare the variables that were saved in the session

        echo "<h2>Player one chose: " . $player1 . ".</h2>";
        echo '<br>';
        echo "<h2>Player two chose: " . $player2 . ".</h2>";
        echo '<br>';
        if ($player1 == $player2) { //Run the game and compare the if statements
            echo '<h2>No one won. This game is a draw.</h2>';
        } else if ($player1 == 'rock' && $player2 == 'scissors') {
            echo '<h2>Player 1 Wins! Rock crushes Scissors.</h2>';
        } else if ($player1 == 'rock' && $player2 == 'paper') {
            echo '<h2>Player 2 Wins! Paper covers Rock.</h2>';
        } else if ($player1 == 'paper' && $player2 == 'rock') {
            echo '<h2>Player 1 Wins! Paper covers Rock.</h2>';
        } else if ($player1 == 'paper' && $player2 == 'scissors') {
            echo '<h2>Player 2 Wins! Scissors cut Paper.</h2>';
        } else if ($player1 == 'scissors' && $player2 == 'paper') {
            echo '<h2>Player 1 Wins! Scissors cut Paper.</h2>';
        } else if ($player1 == 'scissors' && $player2 == 'rock') {
            echo '<h2>Player 2 Wins! Rock crushes Scissors</h2>';
        } else {
            echo 'Please make a choice.';
        }
        ?>
        <br>
        <a href="2-Player1.php" class="playButton">Play Again</a>
        
    </body>
</html>
