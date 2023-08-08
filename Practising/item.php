<?php

class Product
{
    private $id;
    private $name;
    private $price;
    private $productTag;
    private $accountBalance;

    public function __construct($id, $name, $price, $productTag, $accountBalance)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->productTag = $productTag;
        $this->accountBalance = $accountBalance;
    }

    public function buy()
    {
        if ($this->price <= $this->accountBalance) {
            $this->accountBalance -= $this->price;
            return "You have bought: {$this->name}. Your new account balance is: {$this->accountBalance}";
        } else {
            return "You dont have enought money to buy this product";
        }
    }

    public function sell()
    {

        $this->accountBalance += $this->price;
        return "You sold:  {$this->name}. Your new account balance is: {$this->accountBalance}";
    }
}


$product1 = new Product(1, "Apple", 2, "Food", 100);

echo $product1->buy() . "<br>";
echo $product1->sell() . "<br>";
