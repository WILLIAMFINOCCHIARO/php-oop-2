<?php

class User
{
    protected $name;
    protected $surname;
    protected $email;
    protected $creditCards;
    protected $userType = "standard";

    function __construct($_name, $_surname, $_email, $_creditCards)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->creditCards = $_creditCards;
    }

    function getName()
    {
        return $this->name;
    }

    function getSurname()
    {
        return $this->surname;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getCreditCards()
    {
        return $this->creditCards;
    }

    function getUserType()
    {
        return $this->userType;
    }

    function getDiscount()
    {
        return 0;
    }
}