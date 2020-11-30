<?php


class Good
{
    private $_name;
    private $_acceptDate;
    private $_price;
    private $_quantity;
    private $_invoice;

    /**
     * Good constructor.
     * @param $_name
     * @param $_acceptDate
     * @param $_price
     * @param $_quantity
     * @param $_invoice
     */
    public function __construct($_name, $_acceptDate, $_price, $_quantity, $_invoice)
    {
        $this->_name = $_name;
        $this->_acceptDate = $_acceptDate;
        $this->_price = $_price;
        $this->_quantity = $_quantity;
        $this->_invoice = $_invoice;
    }

    public function __toString()
    {
        return "<tr>
                    <td>$this->_name</td>
                    <td>$this->_acceptDate</td>
                    <td>$this->_price</td>
                    <td>$this->_quantity</td>
                    <td>$this->_invoice</td>
                </tr>";
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
    public function getAcceptDate()
    {
        return $this->_acceptDate;
    }

    /**
     * @param mixed $acceptDate
     */
    public function setAcceptDate($acceptDate): void
    {
        $this->_acceptDate = $acceptDate;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->_price = $price;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->_quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->_quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getInvoice()
    {
        return $this->_invoice;
    }

    /**
     * @param mixed $invoice
     */
    public function setInvoice($invoice): void
    {
        $this->_invoice = $invoice;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}