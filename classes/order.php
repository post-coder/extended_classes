<?php
@include_once __DIR__ . "/creditCard.php";


class Order {
    private $ID;
    private $userID;
    private $productID;
    public $creditCard;
    private $status;

    public function __construct(int $_productID, int $_userID, CreditCard $_creditCard)
    {  
        $this->productID = $_productID;
        $this->userID = $_userID;
        $this->creditCard = $_creditCard;

    }

    public function buy():string {
        
        if($this->creditCard->isValid()) {
            return "ok";
            $this->status = "completed";
        } else {
            return "expired";
            $this->status = "failed";

        }


    }

}