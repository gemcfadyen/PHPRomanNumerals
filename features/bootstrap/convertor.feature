Feature: Roman Numeral Convertor
  In order to engrave memorials with the correct date
  As an engraver
  I need to be able to know the roman numeral equivalent for numbers

  Rules:
  - Conversions should go up to 3999

  Scenario: Converting a date
    Given there is a memorial which dates 1999
    When I convert the number
    Then I should get MCMXCIX
