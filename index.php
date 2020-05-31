<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Guessing Game for Parna Pratim Mitra</title>
    </head>
    <body>
        <h1>Welcome to my guessing game</h1><br>
        <?php
            if(!isset($_GET["guess"]))
            {
                echo("Missing guess parameter");
            }
            else if(strlen($_GET["guess"]) < 1)
            {
                echo("Your guess is too short");
            }
            else if($_GET["guess"] < 21 && is_numeric($_GET["guess"]))
            {
                echo("Your guess is too low");
            }
            else if($_GET["guess"] > 21 && is_numeric($_GET["guess"]))
            {
                echo("Your guess is too high");
            }
            else if($_GET["guess"] == 21 && is_numeric($_GET["guess"]))
            {
                echo("Congratulations - You are right");
            }
            else
            {
                echo "Your guess is not a number";
            }
        ?>
    </body>
</html>
