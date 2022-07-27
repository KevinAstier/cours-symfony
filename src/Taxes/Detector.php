<?php

namespace App\Taxes;

class Detector {

    protected $seuil;

    public function __construct(float $seuil) {
        $this->seuil = $seuil;
    }

    public function detect(float $amount): bool {
            if($amount > $this->seuil ){
                dump("Vous avez dépassé le seuil");
                return true;
            } else {
                return false;
            }
    }
}