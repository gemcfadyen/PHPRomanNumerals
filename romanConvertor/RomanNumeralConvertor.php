<?php
  namespace romanConvertor;

  class RomanNumeralConvertor {

    public function convert($arabic) {
      $numerals = array(1 => 'I',
      4 => 'IV',
      5 => 'V',
      9 => 'IX',
      10 => 'X',
      50 => 'L',
      90 => 'XC',
      100 => 'C',
      900 => 'CM',
      1000 => 'M');

      $reversed = array_reverse($numerals, true);
      $result = '';

      foreach($reversed as $key=>$value) {
        while($arabic >= $key) {
          $arabic = $arabic - $key;
          $result = $result . $value;
        }
      }
      return $result;
    }
  }
