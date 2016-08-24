<?php

  namespace romanConvertor\Test;
  use romanConvertor\RomanNumeralConvertor;

  class RomanNumeralConvertorTest extends \PHPUnit_Framework_TestCase {

    public function setUp() {
      $this->convertor = new RomanNumeralConvertor();
    }

    public function testConverts1ToI() {
      $numeral = $this->convertor->convert(1);
      $this->assertEquals('I', $numeral);
    }

    public function testConverts5ToV() {
      $numeral = $this->convertor->convert(5);
      $this->assertEquals('V', $numeral);
    }

    public function testConverts10ToX() {
      $numeral = $this->convertor->convert(10);
      $this->assertEquals('X', $numeral);
    }
  }
