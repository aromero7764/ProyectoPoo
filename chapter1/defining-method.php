<?php	

//defining methodh
        //creando una clase Basdket
        class Basket{

            //añadiendo itemsTotal y costo de envio public properties
            public $itemTotal;
            public $shippingCost;
            public $discount;

            //funcion para calcular el subTotal
           public function calculateSubTotal() {
              $subTotal = $this->itemTotal + $this->shippingCost - $this->discount;
              return $subTotal;
           }




        }

        //instanciando una clase / creando un objeto

$basket = new Basket();
    
        $basket->itemTotal = 50;
        $basket->shippingCost = 10;
        $basket->discount = 30;

        var_dump($basket->calculateSubTotal());


?>