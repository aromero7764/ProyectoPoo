<?Php

        class Reservation 
        {
            private $host = 'Host Class'; //Host Class
            private $guest = 'Guest Class'; // Guest Class

            //public funtion cancel
            public function cancel()
            {

                $this->sendCancellationNotification();
                $this->refundGuest();
                echo 'load other stuff that you don\'t need to know about';

                //Check whether cancellation is an option
                //Refund Gues.. if refund is aplicable
                //make Room available again(room)
                //Notify the Host
                    //In app notification
                    //send them an email /SMS
                //Send confirmation to guest Email Sms
            }

            private function sendCancellationNotification()

            {

                echo 'Sending Notification to ' . $this->host .'<br>';

            }

            private function refundGuest() 
            {
                echo 'refunding ' . $this->guest . '<br>';

            }
        }



?>