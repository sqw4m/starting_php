<?php

abstract class PublicTransport
{
    protected $route;
    protected $capacity;
    protected $currentNumPass;
    protected $currentSpeed;

    /**
     * PublicTransport constructor.
     * @param $route
     * @param $capacity
     * @param $currentNumPass
     * @param $currentSpeed
     */
    public function __construct($route, $capacity, $currentNumPass, $currentSpeed)
    {
        $this->route = $route;
        $this->capacity = $capacity;
        $this->currentNumPass = $currentNumPass;
        $this->currentSpeed = $currentSpeed;
    }
}