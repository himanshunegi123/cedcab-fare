<?php
include_once 'calculateFare.php' ;
include_once 'array.php';


// if(isset($_POST["submit"])){
$pickUpPoint = $_POST['pickUpPoint'];
$dropPoint = $_POST['dropPoint'];
$carType = $_POST['carType'];
$luggage = $_POST['luggage'];

foreach(DistLoc as $DL => $DL_val) {
    if ($DL == $pickUpPoint) {
        $sat = $DL_val;
    }
}
foreach (DistLoc as $DL=>$DL_val) {
    if ($DL == $dropPoint) {
        $sat2 = $DL_val;
    }
}
$TotalDis = abs($sat- $sat2);
// echo $TotalDis;



$obj = new CalculateFare($TotalDis, $carType, $luggage);
$final= ($obj->calculatefare());
$final['TotalDis'] = $TotalDis;
echo json_encode($final);


?>