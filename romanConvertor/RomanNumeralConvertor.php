<?php
  namespace romanConvertor;

  class RomanNumeralConvertor {

    public function convert($arabic) {

      if($arabic == 1) {
        return 'I';
      } else {
        return 'V';
      }
    }

  }
