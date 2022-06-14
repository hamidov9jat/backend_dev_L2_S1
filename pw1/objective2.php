<?php
    
    $a=10;
    $b=10;
    $c=$a+$b;
    echo("The addition of a and b is ". $c . "<br>");

    echo(7%3 . "<br>");

    $n = 3;
    $n ** 2;
    $n ** 3;

    $L = 3;
    $I = 2;
    $P = 2*($L+$I);
    echo("Perimeter is" . $P . "<br>");

    $R = 10;
    $D = $R / 2;
    $C = 2 * M_PI * $R;
    $A = M_PI * ($R ** 2);

    echo($A . "is the area" . "<br>");

    $price = 100;
    $VAT = $price * 0.2;
    $price2 = $price + $VAT;

    echo($price2 . "<br>");

    $days = 13;

   # echo($days * 24 . "h" . "<br>" . $days*24*60 . "mn" . "<br>" . $days * 24 * 60 * 60 . "s");

  //___________________________________________________________

    for ($x = 0; $x <= 10; $x++) {
  		echo ("The number is:" . $x . "<br>");
  	}

  	while($x <= 10) {
  	  echo ("The number is:" . $x . "<br>");
  	  $x++;
    }

  	for ($x = 0; $x <= 10; $x++) {
  		echo ("The number is:" . $x . "<br>");
        $x++;
  	}

    $number = 3;

    for ($x = 1; $x <= 10; $x++) {
        echo ("The multiply is:" . $number * $x. "<br>");
        
    }

    $number2 = 7;
    $sum = 0;

    while($number2 > 0) {
      
      $sum = $number2 + $sum;
      $number2--;
    }

    echo("Sum is" . $sum . "<br>");

    $num = 4;  
    $factorial = 1;  
    for ($x=$num; $x>=1; $x--)   
    {  
        $factorial = $factorial * $x;  
    }  
    echo "Factorial of $num is $factorial <br>";  

    $sum1 = 0;

    for($n = 1; $n < 1001; $n++){

        $sum1 = $sum1 + 1/($n**2);
        

    }

    echo(sqrt($sum1*6) . "<br>");

    for($n = 1; $n < 10001; $n++){

        $sum1 = $sum1 + 1/($n**2);
        

    }

    echo(sqrt($sum1*6) . "<br>");

    //___________________________________________________________

    $number3 = 63;

    if($number3 > 100){
        echo("big");
    } else {
        echo("small");
    }




?>