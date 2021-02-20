<?php
class CalculateFare
{
    public $pickUpPoint;
    public $dropPoint;
    public $cabType;
    public $luggage;
    public $DistLoc;
    public $CabType;
    public $lp;
    public $TotalDis;
    public $totalFare;
    public $luggagePrice;


    function __construct($TotalDis, $cabType, $luggage = 0)
    {
        // $this->pickUpPoint = $pickUpPoint;
        // $this->dropPoint = $dropPoint;
        $this->TotalDis = $TotalDis;
        $this->cabType = $cabType;
        $this->luggage = $luggage;
    }
    public function calculatefare()
    {
        switch ($this->cabType) {
            case ("CedMini"):
                $Bookingprice = 150;
                if ($this->luggage > 20) {
                    $luggagePrice = 200;
                } else if ($this->luggage > 10 && $this->luggage < 20) {
                    $luggagePrice = 100;
                } else if ($this->luggage < 10) {
                    $luggagePrice = 50;
                }

                if ($this->TotalDis >= 160) {
                    $this->TotalDis -= 160;
                    $totalFare = 1915;
                    $totalFare += ($this->TotalDis * 9.50);
                } else if ($this->TotalDis < 10) {
                    $totalFare  =   $this->TotalDis * 14.50;
                } else if ($this->TotalDis >= 10) {
                    $this->TotalDis -= 10;
                    $totalFare = 145;
                    $totalFare += ($this->TotalDis * 13.00);
                } else if ($this->TotalDis >= 60) {
                    $this->TotalDis -= 60;
                    $totalFare = 795;
                    $totalFare += ($this->TotalDis * 11.20);
                }
                $totalFare += $luggagePrice + $Bookingprice;
                return array("totalfare" => $totalFare, "luggageprice" => $luggagePrice);


            case ("CedMicro"):
                $Bookingprice = 50;
                if ($this->luggage > 20) {
                    $luggagePrice = 200;
                } else if ($this->luggage > 10 && $this->luggage < 20) {
                    $luggagePrice = 100;
                } else if ($this->luggage < 10) {
                    $luggagePrice = 50;
                }
                if ($this->TotalDis >= 160) {
                    $this->TotalDis -= 160;
                    $totalFare = 1755;
                    $totalFare = $totalFare + ($this->TotalDis * 8.50);
                } else if ($this->TotalDis >= 60) {
                    $this->TotalDis -= 60;
                    $totalFare = 735;
                    $totalFare = $totalFare + ($this->TotalDis * 10.20);
                } else if ($this->TotalDis >= 10) {
                    $this->TotalDis -= 10;
                    $totalFare = 135;
                    $totalFare = $totalFare + ($this->TotalDis * 12.00);
                } else if ($this->TotalDis < 10) {
                    $totalFare =  $this->TotalDis * 13.50;
                }
                $totalFare += $luggagePrice + $Bookingprice;
                return $a = array("totalfare" => $totalFare, "luggageprice" => $luggagePrice);

            case ("CedRoyal"):
                $Bookingprice = 200;
                if ($this->luggage > 20) {
                    $luggagePrice = 200;
                } else if ($this->luggage > 10 && $this->luggage < 20) {
                    $luggagePrice = 100;
                } else if ($this->luggage < 10) {
                    $luggagePrice = 50;
                }

                if ($this->TotalDis >= 160) {
                    $this->TotalDis -= 160;
                    $totalFare = 2075;
                    $totalFare = $totalFare + ($this->TotalDis * 10.50);
                } else if ($this->TotalDis >= 60) {
                    $this->TotalDis -= 60;
                    $totalFare = 855;
                    $totalFare = $totalFare + ($this->TotalDis * 12.20);
                } else if ($this->TotalDis >= 10) {
                    $this->TotalDis -= 10;
                    $totalFare = 155;
                    $totalFare = $totalFare + ($this->TotalDis * 14.00);
                } else if ($this->TotalDis < 10) {
                    $totalFare =   $this->TotalDis * 15.50;
                }
                $totalFare += $luggagePrice + $Bookingprice;
                return array("totalfare" => $totalFare, "luggageprice" => $luggagePrice);

            case ("CedSUV"):
                $Bookingprice = 250;
                $luggagePrice = 0;
                if ($this->luggage > 20) {
                    $luggagePrice = 200;
                } else if ($this->luggage > 10 && $this->luggage < 20) {
                    $luggagePrice = 100;
                } else if ($this->luggage < 10) {
                    $luggagePrice = 50;
                }
                $luggagePrice += 200;

                if ($this->TotalDis >= 160) {
                    $this->TotalDis -= 160;
                    $totalFare = 2235;
                    $totalFare = $totalFare + ($this->TotalDis * 11.50);
                } else if ($this->TotalDis >= 60) {
                    $this->TotalDis -= 60;
                    $totalFare = 915;
                    $totalFare = $totalFare + ($this->TotalDis * 13.20);
                } else if ($this->TotalDis >= 10) {
                    $this->TotalDis -= 10;
                    $totalFare = 145;
                    $totalFare = $totalFare + ($this->TotalDis * 15.00);
                } else if ($this->TotalDis < 10) {
                    $totalFare =   $this->TotalDis * 16.50;
                }
                $totalFare += $luggagePrice + $Bookingprice;
                return $a = array("totalfare" => $totalFare, "luggageprice" => $luggagePrice);
        }
    }
}
