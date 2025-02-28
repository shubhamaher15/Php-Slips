<html>
    <body>
        <form method="POST" action="slip No 7.php">
        <input type="radio" name="r1" value="1">Dispaly The Elelment Along With key<br><br>
        <input type="radio" name="r1" value="2">Dispaly The Size of Array<br><br>
        <input type="radio" name="r1" value="3">Delete Elelment <br><br>
        <input type="radio" name="r1" value="4">Reverse<br><br>
        <input type="radio" name="r1" value="5">Traverse In Random Order<br><br>
    <input type="submit">
<?php
$a=array("Roll_No"=>1,"Name"=>"Ganesh","per"=>85,"Address"=>"Pune");
$ch=$_POST["r1"];
switch($ch)
{
    case 1:foreach($a AS $key=>$val)
          {
            echo("<br> Key : ".$key);
            echo("<br> val : ".$val);
          }
          break;
          
    case 2:echo("<br> Size of Array :".sizeof($a));
           break;
    case 3:
          echo("<br>Delete Array : ");
          $a=array();
          print_r($a);
          break;   
    case 4: echo("<br>Reverse Array : ");
            $a=array_reverse($a);
            print_r($a);
            break;    
    case 5:
            echo("<br>Traverse Array : ");
            shuffle($a);
            print_r($a);
            break;              
}
?>
