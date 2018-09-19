<?php

function hypotenuse($adjacent, $opposite) {
    $adjacentSquared = pow($adjacent,2);
    $oppositeSquared = pow($opposite,2);

    $hypotenuseSquared = $adjacentSquared + $oppositeSquared;
    $hypotenuse = sqrt($hypotenuseSquared);

    return $hypotenuse;
}

function adjacent($hypotenuse, $opposite) {
    $hypotenuseSquared = pow($hypotenuse,2);
    $oppositeSquared = pow($opposite,2);

    $adjacentSquared = $hypotenuseSquared - $oppositeSquared;
    $adjacent = sqrt($adjacentSquared);

    return $adjacent;
}

function opposite($hypotenuse, $adjacent) {
    $hypotenuseSquared = pow($hypotenuse,2);
    $adjacentSquared = pow($adjacent,2);

    $oppositeSquared = $hypotenuseSquared - $adjacentSquared;
    $adjacent = sqrt($oppositeSquared);

    return $adjacent;
}



