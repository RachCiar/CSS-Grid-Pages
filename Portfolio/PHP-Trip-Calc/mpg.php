<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
<!-- Create the form for the trip calculator -->

<h2>Trip Calculator </h2>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

    <div>
        
<p><label>Distance of the trip in miles <input name="distance" type="float" size="20"></label></p>

<p><label>Cost for a gallon of gas. <input name="cstPerGal" type="float" size="20"></label></p>

<p><label>How many miles does your car get per gallon of gas? <input name="mpg" type="float" size="20"></label></p>

<p><input type="submit" name="Submit" value="Submit"></p> </div>
<!-- Create the PHP code to handle the form -->

    <?php
   $distance; 
   $cstPerGal;
   $mpg;
   
              
    //Validate the data
    if(isset($_POST['distance']) &&(isset($_POST['cstPerGal']) && (isset($_POST['distance'])))){
        if ($_POST['distance'] >0 && $_POST['cstPerGal'] >0 && $_POST['mpg'] >0);
        
       //Calulate the results
        
         $distance = $_POST['distance'];
            $cstPerGal = $_POST['cstPerGal'];
            $mpg = $_POST['mpg'];
            
            $totalCost = ($distance/$mpg)*$cstPerGal;
            echo"<p>The total cost for your trip will be:/$ $totalCost.</p>\n";
    }else{
        echo 'Please enter a valid distance, cost of fuel, and MPG';
        
    }
        
       
        
    
        
        
           
        
?>

    </body>
</html>
