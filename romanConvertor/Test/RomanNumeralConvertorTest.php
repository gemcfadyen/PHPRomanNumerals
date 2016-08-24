<?php

  namespace romanConvertor\Test;
  use romanConvertor\RomanNumeralConvertor;

  class RomanNumeralConvertorTest extends \PHPUnit_Framework_TestCase {

    public function testConverts1ToI() {
      $convertor = new RomanNumeralConvertor();
      $numeral = $convertor->convert(1);
      $this->assertEquals('I', $numeral);
    }
  }
