<?php

class Bike{

    private int $totalBikes;
    private int $bikesAlugadas;


    public function locadora(int $totalBikes){


    }

    public function alugarBike(int $bikesAlugadas){

    
    }




    /**
     * Get the value of totalBikes
     */
    public function getTotalBikes(): int
    {
        return $this->totalBikes;
    }

    /**
     * Set the value of totalBikes
     */
    public function setTotalBikes(int $totalBikes): self
    {
        $this->totalBikes = $totalBikes;

        return $this;
    }

    /**
     * Get the value of bikesAlugadas
     */
    public function getBikesAlugadas(): int
    {
        return $this->bikesAlugadas;
    }

    /**
     * Set the value of bikesAlugadas
     */
    public function setBikesAlugadas(int $bikesAlugadas): self
    {
        $this->bikesAlugadas = $bikesAlugadas;

        return $this;
    }
}

