<?php


class camion extends Vehicle
{
    private int $stockage;
    private int $load = 0;


    public function getCharge():string{
        if($this->load < $this->stockage) {
            return 'in filling';
        }else{
            return 'full';
        }
    }

    public function getSockage(){
        return $this->stockage;
    }
    public function setStockage(int $stockage): void{
        $this->stockage = $stockage;
    }

    public function getLoad(){
       return $this->load;
    }
    public function setLoad(int $load): void 
    {
        $this->load = $load;
    }





}

