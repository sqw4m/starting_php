<?php


class ListTrams
{
    private $_trams;
    private $_fileName = '../uploaded/listTrams.csv';

    /**
     * ListTrams constructor.
     */
    public function __construct()
    {
        $this->initialize();
    }

    function initialize(){
        if(file_exists($this->_fileName)){
            $this->loadFromCSV();
        }
        else{
            $trams = [
                new Tram('ДМЗ - Железнодорожный вокзал', 200, 112, 35),
                new Tram('Ул. Красноармейская - з-д Донгормаш', 180, 96, 50),
                new Tram('Ул. Красноармейская - Пр. Панфилова', 150, 71, 20),
                new Tram('Ул. Красноармейская - Ул. Кирова', 170, 25, 45)
            ];

            $this->_trams = $trams;
            $this->saveToCSV();
        }
    }
    public function __toString()
    {
        return implode("", $this->_trams);
    }

    public function addTram($tram){
        array_push($this->_trams, $tram);
        $fp = fopen($this->_fileName, 'a');
        $elemStr = $tram->getRoute().','.$tram->getCapacity().','
            .$tram->getCurrentNumPass().','.$tram->getCurrentSpeed();
        fwrite($fp, $elemStr);
        fwrite($fp, "\r\n");
        fclose($fp);
    }

    private function saveToCSV(){
        if (count($this->_trams) > 0) {
            $fp = fopen($this->_fileName, 'a');

            foreach ($this->_trams as $element) {
                fputcsv($fp, (array)$element);
            }
            fclose($fp);
        }
    }

    private function loadFromCSV(){
        $fp = fopen($this->_fileName, 'r');
        $this->_trams= array();
        while(!feof($fp)) {
            $str = htmlentities(fgets($fp));
            if ($str != '') {
                $line = explode(',', $str);
                $this->_trams[] = new Tram(
                    $line[0], $line[1], $line[2], $line[3]
                );
            }
        }
        fclose($fp);
    }
}