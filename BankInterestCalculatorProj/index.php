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
        <h1>Simple Interest Calculator</h1>
        <form action="index.php" method="get">
            Principle Amount:<input type="text" name="principleAmountText"/><br />
            Annual Interest Rate:<input type="text" name="InterestRateText"/> %<br />
            Time Period:<input type="text" name="yearText"/> year<br />
            <input type="submit" name="calculateButton" value ="Calculate"/>
        </form>
        <?php
        require_once 'interestcalculator.php';
        if(isset($_GET['calculateButton']))
        {
            $interest_calculator = new InterestCalculator();
            $interest_calculator->principle_amount = $_GET['principleAmountText'];
            $interest_calculator->intrest_rate_of_a_year = $_GET['InterestRateText'];
            $interest_calculator->time_period = $_GET['yearText'];
            $total_amount = $interest_calculator->get_total_amount();
            echo $total_amount;
            
        }
        
        ?>
    </body>
</html>
