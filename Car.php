<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    /*public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    
    private string $energy;

    private int $energyLevel;
    
    private bool $started = false;
    
    private bool $hasparkbrake = true;

        


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
       
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    
    
    public function getStarted(): boolean
    {
        return $this->started;
    }


    public function setStarted(boolean $started): string
    {
        $this->started = $started;
    }

    public function start(): string
    {
        if($this->hasparkbrake == true) {
            throw new Exception("Attention le frein à main est levé! </br>");
        } else {
        return 'Start!' . '<br>';
        }
    }

    
    public function getHasParkBrake()
    {
        return $this->hasparkbrake;
    }


    public function setHasParkBrake($hasparkbrake): void
    {
        $this->hasparkbrake = $hasparkbrake;
    }*/

    public function switchOn()
    {
        return true;
    }

    public function switchOff()
    {
        return false;
    }

}
