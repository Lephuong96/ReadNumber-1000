<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <style>
        h1{
            color: red;
        }
        h4{
            color: orange;
        }
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
    </style>
</head>
<body>
<h1>Convert numbers(<1000) into word</h1>

<form method="post">
    <h4>Input number:</h4>
    <input type="text" name="search" placeholder="enter the number"/>
    <input type = "submit" id = "submit" value = "Tìm"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["search"];
    $Tr=(int)($num/100);
    $Ch=(int)(($num-100*$Tr)/10);
    $Dv=$num-100*$Tr-10*$Ch;
    $flag = 0;
    $numbers = array(
        "1"=>"one",
        "2"=>"two",
        "3"=>"three",
        "4"=>"four",
        "5"=>"five",
        "6"=>"six",
        "7"=>"seven",
        "8"=>"eight",
        "9"=>"nine",
        "10"=>"ten",
        "11"=>"eleven",
        "12"=>"twelve",
        "13"=>"thirteen",
        "14"=>"fourteen",
        "15"=>"fifteen",
        "16"=>"sixteen",
        "17"=>"seventeen",
        "18"=>"eighteen",
        "19"=>"nineteen",
        "20"=>"twenty",
    );
    $arrNum = array(
        "2"=>"twenty",
        "3"=>"thirty",
        "4"=>"forty",
        "5"=>"fifty",
        "6"=>"sixty",
        "7"=>"seventy",
        "8"=>"eighty",
        "9"=>"ninety",
    );
    if ($num <= 20) {
        foreach ($numbers as $Number=>$description) {
            if($Number==$num){
                echo "Number: " . $Number . ". <br/>Read is: " . $description;
            }
        }
    }else if($num>20 && $num<100){
        foreach ($arrNum as $Number=> $x){
            if($Number==$Ch){
                echo "Number: " . $num . ". <br/>Read is: " . $x ." " ;
            }
        }
        foreach ($numbers as $Number=> $x){
            if($Number==$Dv){
                echo $x ;
            }
        }
    }else if($num>100&&$num<1000){
        foreach ($numbers as $Number=> $x){
            if($Number==$Tr){
                echo "Number: " . $num . ". <br/>Read is: " .$x." hundred and " ;
            }
        }
        foreach ($arrNum as $Number=> $x){
            if($Number==$Ch && $Ch > 2){
                echo $x ." " ;
            }
        }
        foreach ($numbers as $Number=> $x){
            if($Number==$Dv || $Ch <=2){
                echo $x ;
            }
        }
    }
}
?>
</body>
</html>

