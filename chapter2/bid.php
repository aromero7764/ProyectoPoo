<?php   

class Bid
{
    private $minimunBid = 5; //Valor por defecto
    private $bidAmount;

    // establezco la funcion set BidAmount 
    public function setBidAmount($amount)

    {
        if ($amount < $this->minimunBid) {
            $this->bidAmount = $this->minimunBid; 

            return;
        }
            $this->bidAmount = $amount;
        

       
    }

    public function getAmount() {

        return $this->bidAmount;
    }
}



?>