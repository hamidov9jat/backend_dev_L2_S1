<?php
    $A = $B = $c = 1;

    for($A = 1; $A < 10; $A++){

        for($B = 1; $B < 10; $B++){
            
            for($C = 1; $C < 10; $C++){

                $ABC = 100*A + 10*B + C;

                if($ABC == ($A*$A*$A + $B*$B*$B + $C*$C*$C)){
                    // echo("ABC = " . $ABC . " = ");
                    printf("ABC = %d = %d + %d + %d",$ABC, pow($A, 3), 
                                    pow($B, 3), pow($C, 3));
                }

            }

        }

    }

?>