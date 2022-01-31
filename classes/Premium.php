<?php 

class Premium extends user {
    protected $userType = "premium";

    function getDiscount()
    {
        return 10;
    }
}