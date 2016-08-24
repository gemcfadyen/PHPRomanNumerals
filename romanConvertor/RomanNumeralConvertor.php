<?php
  namespace romanConvertor;

  class RomanNumeralConvertor {

    public function convert($arabic) {
      $numerals = array(1 => 'I',
      5 => 'V',
      10 => 'X');

      if($numerals[$arabic] == 'I') {
        return $numerals[$arabic];
      } else if ($numerals[$arabic]== 'V') {
        return 'V';
      }
      return 'X';
    }

  }
