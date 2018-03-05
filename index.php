<?php 

function calculate($a,$b, $calcul) 
    {
        switch($calcul)
        {
        case "Addition":
            $result = $a + $b; 
            break;
        case "Subtraction":
            $result = $a - $b; 
            break;
        }
        return $result; 
    }

phpinfo();

?>