<?php
  namespace romanConvertor;

  class RomanNumeralConvertor {

    public function convert($arabic) {
      $numerals = array(1 => 'I',
      5 => 'V',
      10 => 'X');

      foreach($numerals as $key=>$value) {
        if($key == $arabic) {
          return $value;
        }
      }
    }
  }
