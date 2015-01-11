<?php

class SplitMoney {

    function split($money) {

        list($money, $returnBank[500]) = $this->singleSplit($money, 500);

        list($money, $returnBank[100]) = $this->singleSplit($money, 100);

        list($money, $returnBank[50]) = $this->singleSplit($money, 50);

        list($money, $returnBank[20]) = $this->singleSplit($money, 20);

        list($money, $returnBank[10]) = $this->singleSplit($money, 10);
        
        return $returnBank;
    }

    private function singleSplit($money, $bankType) {
        $returnBank = floor($money / $bankType);
        $money -= $returnBank * $bankType;

        return array($money, $returnBank);
    }

}