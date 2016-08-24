<?php

  use Behat\Behat\Context\SnippetAcceptingContext;
  use Behat\Gherkin\Node\PyStringNode;
  use Behat\Gherkin\Node\TableNode;
  use Behat\Behat\Tester\Exception\PendingException;
  use romanConvertor\RomanNumeralConvertor;

  class FeatureContext implements SnippetAcceptingContext
  {
    /**
     * Initializes context.
     *
     * Every scenario gets it's own context object.
     * You can also pass arbitrary arguments to the context constructor through behat.yml.
     */

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
      PHPUnit_Framework_Assert::assertEquals($numeral, $this->result);
    }
  }
