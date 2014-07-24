<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of calcultor
 *
 * @author Mainul Hasan
 */
class SimpleInterestCalculator {
    public $principle_amount;
    public $intrest_rate_of_a_year;
    public $time_period;
    
    public function get_total_amount()
    {
        $interest_amount_in_a_year = $this->principle_amount * ($this->intrest_rate_of_a_year / 100);
        $interest_amount_in_given_time_period = $interest_amount_in_a_year * $this->time_period;
        $total_amount = $this->principle_amount + $interest_amount_in_given_time_period;
        return $total_amount;
    }
}
