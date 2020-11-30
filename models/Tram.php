<?php

class Tram extends PublicTransport implements Vehicle
{
    public function __construct($route, $capacity, $currentNumPass, $currentSpeed)
    {
        parent::__construct($route, $capacity, $currentNumPass, $currentSpeed);
    }

    function start(){}
    function stop(){}
    function boarding(){}
    function disembarking(){}

    public function __toString()
    {

        return "<tr>
                    <td>$this->route</td>
                    <td>$this->capacity</td>
                    <td>$this->currentNumPass</td>
                    <td>$this->currentSpeed</td>
                </tr>";
    }

    /**
     * @return mixed
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param mixed $route
     */
    public function setRoute($route): void
    {
        $this->route = $route;
    }

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param mixed $capacity
     */
    public function setCapacity($capacity): void
    {
        $this->capacity = $capacity;
    }

    /**
     * @return mixed
     */
    public function getCurrentNumPass()
    {
        return $this->currentNumPass;
    }

    /**
     * @param mixed $currentNumPass
     */
    public function setCurrentNumPass($currentNumPass): void
    {
        $this->currentNumPass = $currentNumPass;
    }

    /**
     * @return mixed
     */
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * @param mixed $currentSpeed
     */
    public function setCurrentSpeed($currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }
}