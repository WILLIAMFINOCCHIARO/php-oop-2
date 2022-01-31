<?php

class CreditCard
{
    protected $number;
    protected $expiryDate;
    protected $cvv;

    function __construct($_number, $_expiryDate, $_cvv)
    {
        $this->number = $_number;
        $this->expiryDate = $_expiryDate;
        $this->cvv = $_cvv;
    }
}