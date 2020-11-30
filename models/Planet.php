<?php


class Planet
{
    private $_name;
    private $_radius;
    private $_weight;
    private $_satellitesQuant;
    private $_distanceToSun;
    private $_image;

    /**
     * Planet constructor.
     * @param $_name
     * @param $_radius
     * @param $_weight
     * @param $_satellitesQuant
     * @param $_distanceToSun
     * @param $_image
     */
    public function __construct($_name, $_radius, $_weight, $_satellitesQuant, $_distanceToSun, $_image)
    {
        $this->_name = $_name;
        $this->_radius = $_radius;
        $this->_weight = $_weight;
        $this->_satellitesQuant = $_satellitesQuant;
        $this->_distanceToSun = $_distanceToSun;
        $this->_image = $_image;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->_radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius): void
    {
        $this->_radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->_weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->_weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getSatellitesQuant()
    {
        return $this->_satellitesQuant;
    }

    /**
     * @param mixed $satellitesQuant
     */
    public function setSatellitesQuant($satellitesQuant): void
    {
        $this->_satellitesQuant = $satellitesQuant;
    }

    /**
     * @return mixed
     */
    public function getDistanceToSun()
    {
        return $this->_distanceToSun;
    }

    /**
     * @param mixed $distanceToSun
     */
    public function setDistanceToSun($distanceToSun): void
    {
        $this->_distanceToSun = $distanceToSun;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->_image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->_image = $image;
    }

    public function __toString()
    {
        return "<tr>
                    <td>$this->_name</td>
                    <td>$this->_radius</td>
                    <td>$this->_weight</td>
                    <td>$this->_satellitesQuant</td>
                    <td>$this->_distanceToSun</td>
                    <td><img src='../imgs/planets/{$this->_image}.jpg' width='100' height='100'></td>
                </tr>";
    }
}