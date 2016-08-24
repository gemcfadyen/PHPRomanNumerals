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

    public function testConverts2ToII() {
      $numeral = $this->convertor->convert(2);
      $this->assertEquals('II', $numeral);
    }

    public function testConverts3ToIII() {
      $numeral = $this->convertor->convert(3);
      $this->assertEquals('III', $numeral);
    }

    public function testConverts4ToIV() {
      $numeral = $this->convertor->convert(4);
      $this->assertEquals('IV', $numeral);
    }

    public function testConverts5ToV() {
      $numeral = $this->convertor->convert(5);
      $this->assertEquals('V', $numeral);
    }

    public function testConverts6ToVI() {
      $numeral = $this->convertor->convert(6);
      $this->assertEquals('VI', $numeral);
    }

    public function testConverts9ToIX() {
      $numeral = $this->convertor->convert(9);
      $this->assertEquals('IX', $numeral);
    }

    public function testConverts10ToX() {
      $numeral = $this->convertor->convert(10);
      $this->assertEquals('X', $numeral);
    }

    public function testConverts20ToXX() {
      $numeral = $this->convertor->convert(20);
      $this->assertEquals('XX', $numeral);
    }

    public function testConverts50ToL() {
      $numeral = $this->convertor->convert(50);
      $this->assertEquals('L', $numeral);
    }

    public function testConverts90ToXC() {
      $numeral = $this->convertor->convert(90);
      $this->assertEquals('XC', $numeral);
    }

    public function testConverts100ToC() {
      $numeral = $this->convertor->convert(100);
      $this->assertEquals('C', $numeral);
    }

    public function testConverts900ToCM() {
      $numeral = $this->convertor->convert(900);
      $this->assertEquals('CM', $numeral);
    }

    public function testConverts1000ToM() {
      $numeral = $this->convertor->convert(1000);
      $this->assertEquals('M', $numeral);
    }

    public function testConverts3999() {
      $numeral = $this->convertor->convert(3999);
      $this->assertEquals('MMMCMXCIX', $numeral);
    }
  }
