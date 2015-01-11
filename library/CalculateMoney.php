<?php

class CalculateMoney {

    public function calculate($parkingPrice, $receive) {
        $changeAmount = $receive - $parkingPrice;
        return $changeAmount;
    }
}
