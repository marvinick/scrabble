<?php

    class ScrabbleScore
    {

        function makeScrabbleScore($letters)
          {

          $bank = array('a'=>1,
                        'e'=>1,
                        'i'=>1,
                        'o'=>1,
                        'u'=>1,
                        'l'=>1,
                        'n'=>1,
                        'r'=>1,
                        's'=>1,
                        't'=>1,
                        'd'=>2,
                        'g'=>2,
                        'b'=>3,
                        'c'=>3,
                        'm'=>3,
                        'p'=>3,
                        'f'=>4,
                        'h'=>4,
                        'v'=>4,
                        'w'=>4,
                        'y'=>4,
                        'k'=>5,
                        'j'=>8,
                        'x'=>8,
                        'q'=>10,
                        'z'=>10);


          //lower case the input
          //star
          $play = str_split(mb_strtolower($letters));

          // ['s', 't', 'a', 'r']

            $each_letter = array();
            $counter = 0;

            foreach ($play as $letter) {
                $each_letter[$letter] = $counter;
                ++$counter;
            }

            //find match keys between $bank and $each_letter
            $matched_letters = array_intersect_key($bank, $each_letter);

            //find the value
            $count = array_sum($matched_letters);

            // $total_count = array_sum($count);
            return $count;


          // //turn to keys
          // $new_letter = array_flip($play);
          //
          // //find match
          // $matched_letters = array_intersect_key($bank, $new_letter );
          // $total_count = array_sum($matched_letters);
          // return $total_count;
        }
      }
?>
