<?php

  use Behat\Behat\Context\SnippetAcceptingContext;
  use Behat\Gherkin\Node\PyStringNode;
  use Behat\Gherkin\Node\TableNode;
  use Behat\Behat\Tester\Exception\PendingException;
  use romanConvertor\RomanNumeralConvertor;
  class_alias(PHPUnit_Framework_Assert, 'phpassert');

  class FeatureContext implements SnippetAcceptingContext
  {
    private $convertor;
    private $dateToConvert;
    private $result;

    public function __construct() {
      $this->convertor = new RomanNumeralConvertor();
    }

    /**
     * @Given there is a memorial which dates :memorialDate
     */
    public function thereIsAMemorialWhichDates($memorialDate) {
      $this->dateToConvert = $memorialDate;
    }

    /**
     * @When I convert the number
     */
    public function iConvertTheNumber() {
      $this->result = $this->convertor->convert($this->dateToConvert);
    }

    /**
     * @Then I should get :numeral
     */
    public function iShouldGet($numeral) {
      phpassert::assertEquals($numeral, $this->result);
    }
  }
