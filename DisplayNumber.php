<?php


class DisplayNumber
{
    function showNumber( $data ){
        $numOne = $data['first_number'];
        $numTwo = $data['second_number'];
        $result = '';
        for( $i = $numOne; $i <= $numTwo; $i++){
            $result .= $i ." ";
        }
        return $result;
    }
}