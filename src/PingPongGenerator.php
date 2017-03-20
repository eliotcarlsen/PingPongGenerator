<?php
    class PingPongGenerator {

        function generatePingPongArray($input_number)
        {
            $input_number_array = array();
            $number = 1;
            while ($number <= $input_number) {
              if($number % 15 == 0){
                array_push($input_number_array,"ping-pong");
              }
                elseif($number % 5 == 0){
                  array_push($input_number_array, "pong");
                }
                elseif($number % 3 == 0) {
                    array_push($input_number_array, "ping");
                } else {
                    array_push($input_number_array, $number);
                }
                ++$number;
            }
            return $input_number_array;
        }
    }
?>
