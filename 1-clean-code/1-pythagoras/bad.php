<?php

function P_T($MODE, $A=0, $O=0, $h=0) {
    // Calculates the hypotenuse of a triangle
    switch ($MODE) {
        case 1:
            /*
            $Adjacent=2;
            $Opposite=3;
            $Hypotenuse=4;
            //Hypotenuse
            $Hypotenuse1 = (pow($Adjacent,2)) + (pow($Opposite,2));
            $Hypotenuse1=sqrt($Hypotenuse1);
            echo "\nHypotenuse: ".$Hypotenuse1;
             */
            $return = (pow($A,2)) + (pow($O,2));
            $return=sqrt($return);
            return $return;
            break;
        case 2:
            $return = (pow($h,2)) - (pow($O,2));
            $return=sqrt($return);
            return $return;
            break;
        case 3:
            $return = (pow($h,2)) - (pow($A,2));
            $return=sqrt($return);
            return $return;
            break;
        default:
            throw new Exception("Something went wrong?");
            break;
    }
}
