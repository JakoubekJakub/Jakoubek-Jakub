<?php
require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;
        
echo 17;
echo"<br>";
print (2.2);
echo"<br>";
echo "škola";
echo"<br>";
print(FALSE);
echo " ahoj "." čus ";
echo "<img src=\"koronavirus.jpg.jpg\">";
echo "\\";
$a = 9;
            echo "<br>";
            $b = 4;

            echo "<br>";

            dump ($a + $b);

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

           dump ($a - $b);

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            dump ($a * $b);

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            echo $a / $b;

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

          dump ($a += $b);

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            dump ($a -= $b);

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

           dump ($a *= $b);

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            dump ($a /= $b);

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            dump ($a == $b);

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            dump ($a != $b);

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

           dump ($a > $b);

            echo "<br>";

            $a = 9;
            echo"<br>";
            $b = 4;

            dump ($a < $b);

            echo "<br>";
            $a = 9;
            echo"<br>";
            $b = 4;

            dump ($a || $b);

            echo "<br>";
            $a = 9;
            echo"<br>";
            $b = 4;

            dump ($a & $b);

            
        $jakubJakoubek1 = 1;
        $jakubJakoubek2 = 1;
        if($jakubJakoubek1 <=  $jakubJakoubek2){
               echo "Jakub Jakoubek <br>";
        }
        if($jakubJakoubek1 > $jakubJakoubek2){
               echo"Kuba <br>";
        }
        else{
            echo"Jakoubek <br>";
        }
        if ($jakubJakoubek1 > $jakubJakoubek2){
            echo"Kuba <br>";
            if($jakubJakoubek1 == $jakubJakoubek2){
                echo"Jakoubek <br>";    
           }
        }
        switch ($jakubJakoubek1) {
           case 0:
               break;
           case 1:
               echo"ok zoomer";
           case 2:
               break;
           case 3:
               break;
           case 4:
               break;
           case 5:
               break;
           default:
               break;
        }                              
 $produkty =  array(1 =>"op",2 =>"op1", 3 => "op2",4 =>"op3",5 =>"op4",6 =>"op5",7 =>"op6",8 =>"op7",9 =>"op8",10 =>"op9");                  
 
 $produkty1["op"] = array( );
 $produkty1["up"] = array( );
 $produkty1["ip"] = array( 
    array('jméno' => 'Max', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'knírač', 'věk' => 3 ),
    array('jméno' => 'Honza', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'buldok', 'věk' => 6),
    array('jméno' => 'Vojta', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'čivava', 'věk' => 4 ),
    array('jméno' => 'Láďa', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'německý ovčák', 'věk' => 2),
    array('jméno' => 'Ivan', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'labrador', 'věk' => 1 ),
    array('jméno' => 'Ondra', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'jezevčík', 'věk' => 7 ),
    array('jméno' => 'Kuba', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'bernardýn', 'věk' => 5),
    array('jméno' => 'Michal', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'kolie', 'věk' => 9),
    array('jméno' => 'Jarda', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'zlatý retrívr', 'věk' => 10),
    array('jméno' => 'Alex', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'dalmatýn', 'věk' => 1,5),
      );
dump($produkty);     
 dump($produkty1); 
 
 
         $radekJakubJakoubek=12; 
$sloupecJakubJakoubek=17; 
            echo "<table border=1>";
            for($i=1;$i<=$radekJakubJakoubek;$i++) {
                echo "<tr>";
for($x=1;$x<=$sloupecJakubJakoubek;$x++){
    echo "<td>".$i."-".$x."</td>";
}
                echo "</tr>";
            }
            echo "</table><br><br><br>";

           echo abs(7)."<br>";
            echo cos(149)."<br>";
           $string="Dobrý den";
          echo strstr($string, "its")."<br>";
          echo strpos($string, "its")."<br>";
          echo sizeof($produkty);
          array_splice($produkty, 0, 1, "oi1"); 
          dump($produkty);

          $i=1;
          foreach ($produkty as $produkt){
              echo $i."-".$produkt."<br>";
              $i++;
          }
            echo currency(48.200);

            function currency($price, $currency = "CZK", $precision = 2) {
                $price = round($price, $precision);
                $price = number_format($price, $precision) . ",-" . $currency;

                return $price;
                  
       
}
      
  ?>
  
