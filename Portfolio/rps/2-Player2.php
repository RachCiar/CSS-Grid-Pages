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
        <h2>Player 2: </h2>
        <h1>Please choose from the following</h1>  
        <div id="player2">
            <form action="rpsCalculate.php" method="post" >
                <select name="player2">                    
                    <option value="rock">Rock</option>
                    <option value="paper">Paper</option>
                    <option value="scissors">Scissors</option>
                </select>
                <br><br><br>

                <input type="hidden" name="player1" value="<?php echo $_POST['player1']; ?>">
                
                <input type="submit" name="submit" value="Submit" class="playButton">
                <br><br>
            </form> 


        </div> 
        <?php
        
        ?>
    </body>
</html>
