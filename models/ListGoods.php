<?php
require_once("Utils.php");


class ListGoods
{
    private $_goods;
    private $_fileName = '../uploaded/listGoods.csv';

    /**
     * ListGoods constructor.
     * @param $goods
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
            $goods = [
                new Good('HyperX_DDR4-3333_16384MB', '2020-11-14', 6250, 3, '54-6453-3122'),
                new Good('HyperX_DDR4-3200_32768MB', '2020-11-17', 8990, 4, '14-4431-6142'),
                new Good('GeForce_RTX_3080', '2020-10-26', 78500, 5, '61-6125-7153'),
                new Good('GeForce_RTX_3090', '2020-11-09', 155300, 5, '85-7361-6161'),
                new Good('Samsung_860_Evo-Series_500GB', '2020-10-05', 3450, 2, '28-8272-0902'),
                new Good('Kingston_SSDNow_A400_480GB','2020-10-01', 3250, 3, '87-4124-2577'),
                new Good('Intel_Core_i5-9400F_2.9GHz','2020-11-01', 10500, 5, '33-5125-7823'),
                new Good('AMD_Ryzen_5_2600_3.4GHz','2020-11-11', 11300, 4, '23-5121-6122'),
                new Good('MSI_B450_Tomahawk_Max', '2020-11-15', 10100, 5, '72-1222-7812'),
                new Good('Asus_Prime_H310M-K_R2.0','2020-10-28', 4200, 5, '71-5423-9423')
            ];

            $this->_goods = $goods;
            $this->saveToCSV();
        }
    }

    public function __toString()
    {
        return implode("", $this->_goods);
    }

    public function addGood($good){
        array_push($this->_goods, $good);
        $fp = fopen($this->_fileName, 'a');
        $elemStr = $good->getName().','.$good->getAcceptDate().','
            .$good->getPrice().','.$good->getQuantity().','.$good->getInvoice();
        fwrite($fp, $elemStr);
        fwrite($fp, "\r\n");
        fclose($fp);
    }

    private function saveToCSV(){
        if (count($this->_goods) > 0) {
            $fp = fopen($this->_fileName, 'a');

            foreach ($this->_goods as $element) {
                fputcsv($fp, (array)$element);
            }
            fclose($fp);
        }
    }

    private function loadFromCSV(){
        $fp = fopen($this->_fileName, 'r');
        $this->_goods = array();
        while(!feof($fp)) {
            $str = htmlentities(fgets($fp));
            if ($str != '') {
                $line = explode(',', $str);
                $this->_goods[] = new Good(
                    $line[0], $line[1], $line[2], $line[3], $line[4]
                );
            }
        }
        fclose($fp);
    }
}