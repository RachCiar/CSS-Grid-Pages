<!DOCTYPE html>
<?php
$page_title = 'One Player Game';
include('header.html.php');
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <body >
        <h1>Rock Paper Scissors - Play against the Computer</h1>
        <h2>Player 1: Please choose from the following</h2>
        <form action="1-Player1.php" method="post" >    
            <select name="player1" >
                <option value="rock">Rock</option>
                <option value="paper">Paper</option>
                <option value="scissors">Scissors</option>
            </select>
            <br><br><br>

            <input type="submit" name="submit" value="Submit" class="playButton">
            <a href="1-Player1.php" class="playButton">Play Again</a>

            <br><br>
        </form>



        <?php
        if (isset($_POST['submit'])) {

            $player1 = $_POST["player1"]; //declare the variables that were saved in the POST

            $computer_move = array('paper', 'rock', 'scissors');  //Declare the array

            $player2 = $computer_move[array_rand($computer_move)]; //Pick random string in array

            echo "<h2>Player one chose: " . $player1 . ".</h2>";
            echo '<br>';
            echo "<h2>The computer chose: " . $player2 . ".</h2>";
            echo '<br>';
            if ($player1 == $player2) { //Run the game and compare the if statements
                echo '<h2>No one won. This game is a draw.</h2>';
            } else if ($player1 == 'rock' && $player2 == 'scissors') {
                echo '<h2>Player 1 Wins! Rock crushes Scissors.</h2>';
            } else if ($player1 == 'rock' && $player2 == 'paper') {
                echo '<h2>Computer Wins! Paper covers Rock.</h2>';
            } else if ($player1 == 'paper' && $player2 == 'rock') {
                echo '<h2>Player 1 Wins! Paper covers Rock.</h2>';
            } else if ($player1 == 'paper' && $player2 == 'scissors') {
                echo '<h2>Computer Wins! Scissors cut Paper.</h2>';
            } else if ($player1 == 'scissors' && $player2 == 'paper') {
                echo '<h2>Player 1 Wins! Scissors cut Paper.</h2>';
            } else if ($player1 == 'scissors' && $player2 == 'rock') {
                echo '<h2>Computer Wins! Rock crushes Scissors</h2>';
            } else {
                echo 'Please make a choice.';
            }
        }
        ?>



    </body>
</html>
