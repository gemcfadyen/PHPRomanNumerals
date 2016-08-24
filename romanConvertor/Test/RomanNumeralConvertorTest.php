<?php

  namespace romanNumeralConvertor\Test;

  class RomanNumeralConvertorTest extends \PHPUnit_Framework_TestCase {

    public function testConverts1ToI() {
      $convertor = new RomanNumeralConvertor();
      $numeral = $convetor->convert(1);
      $this->assertEquals('I', $numeral);
    }
  }
