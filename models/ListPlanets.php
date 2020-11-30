<?php


class ListPlanets
{
    private $_planets;
    private $_fileName = '../uploaded/listPlanets.csv';

    /**
     * ListPlanets constructor.
     * @param $_planets
     */
    public function __construct()
    {
        $this->initialize();
    }

    private function initialize(){
        if(file_exists($this->_fileName)){
            $this->loadFromCSV();
        }
        else{
            $planets = [
                new Planet('Земля', 6378, 5972E21, 1, 1.017, "earth"),
                new Planet('Сатурн', 60270, 5683E23, 82, 10.05, "saturn"),
                new Planet('Меркурий', 2440, 3285E20, 0, 0.467, "mercury"),
                new Planet('Марс', 3397, 639E20, 2, 1.67, "mars"),
                new Planet('Венера', 6052, 4867E21, 0, 0.728, "venus"),
                new Planet('Юпитер', 71490, 1898E24, 79, 5.46, "jupiter"),
                new Planet('Нептун', 24760, 1024E23, 14, 30.33, "neptune"),
                new Planet('Уран', 25560, 8681E22, 27, 20.10, "uranus")
            ];

            $this->_planets = $planets;
            $this->saveToCSV();
        }
    }

    public function __toString()
    {
        return implode("", $this->_planets);
    }

    private function saveToCSV(){
        if (count($this->_planets) > 0) {
            $fp = fopen($this->_fileName, 'a');

            foreach ($this->_planets as $element) {
                fputcsv($fp, (array)$element);
            }
            fclose($fp);
        }
    }

    private function loadFromCSV(){
        $fp = fopen($this->_fileName, 'r');
        $this->_planets = array();
        while(!feof($fp)) {
            $str = htmlentities(fgets($fp));
            if ($str != '') {
                $line = explode(',', $str);
                $this->_planets[] = new Planet(
                    $line[0], $line[1], $line[2], $line[3], $line[4], $line[5]
                );
            }
        }
        fclose($fp);
    }

    public function sortByDistance(){
        usort($this->_planets, function($a, $b)
        {
            return $a->getDistanceToSun() < $b->getDistanceToSun();
        });
    }

    public function sortByName(){
        usort($this->_planets, function($a, $b)
        {
            return $a->getName() < $b->getName();
        });
    }

    public function sortByWeight(){
        usort($this->_planets, function($a, $b)
        {
            return $a->getWeight() < $b->getWeight();
        });
    }
}