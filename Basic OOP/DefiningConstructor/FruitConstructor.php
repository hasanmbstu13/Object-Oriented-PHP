<?php


class FruitConstructor {

    public $apples;
    public $oranges;
    public $bananas;

    function __construct($cApples,$cOranges,$cBananas)
    {
        $this->apples = $cApples;
        $this->oranges = $cOranges;
        $this->bananas = $cBananas;
    }

    public function addFruit()
    {
        $totalFruit = $this->apples + $this->oranges + $this->bananas;
        return $totalFruit;
    }

} 