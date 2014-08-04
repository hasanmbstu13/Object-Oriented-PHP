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
        <form action="details.php" method="get">
            <input type="submit" name="submitButton" value="see details"/>
            
        </form>
        <?php
           session_start();
           $_SESSION['a_value'] = 1000;
        ?>
    </body>
</html>
