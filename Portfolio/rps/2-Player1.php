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
        <h2>Player 1: Please choose from the following</h2>
        <form action="2-Player2.php" method="post" >            
            <select name="player1" >
                <option value="rock">Rock</option>
                <option value="paper">Paper</option>
                <option value="scissors">Scissors</option>
            </select>
            <br><br><br>
            
            <input type="submit" name="submit" value="Submit" class="playButton">
            <br><br>
        </form>

        <?php
        // put your code here
        ?>
    </body>
</html>
