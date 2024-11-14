<?php

class Pizza {
    private $base;
    private $baking;
    private $toppings = [];

    public function __construct($base, $baking) {
        $this->base = $base;
        $this->baking = $baking;
    }
    public function addTopping($topping) {
        $this->toppings[] = $topping;
    }
    public function removeTopping($topping) {
        $index = array_search($topping, $this->toppings);
        if ($index !== false) {
            array_splice($this->toppings, $index, 1);
        }
    }
    public function getBase(): string {
        return $this->base;
    }
    public function getBaking(): string {
        return $this->baking;
    }
    public function getToppings() {
        return $this->toppings;
    }
}