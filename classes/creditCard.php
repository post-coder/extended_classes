<?php

class CreditCard {
  private int $userID;
  private string $number;
  private string $expireDate;
  
  public function __construct(int $_userID, string $_number, string $_expireDate) {
    $this->userID = $_userID;
    $this->number = $_number;
    $this->expireDate = $_expireDate;

  }

  public function isValid():bool {
    //05/22
    $date_str = date_create_from_format("m/y",$this->expireDate);
    //echo $date_str;
    $date_formatted = date_format($date_str,"M Y");


    if (strtotime($date_formatted) > strtotime('today')) {
        return true;
    } else {
        return false;
    }
  }

}