<?php

  require_once "src/ScrabbleScore.php";

  class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
  {

    function test_ScrabbleScore()
    {
      //Arrange
      $test_ScrabbleScore = new ScrabbleScore;
      $letters = "cat";

      //Act
      $result = $test_ScrabbleScore->makeScrabbleScore($letters);

      //Assert
      $this->assertEquals(5, $result);
    }

    function test_ScrabbleScore_duplicateletters()
    {
      //Arrange
      $test_ScrabbleScore = new ScrabbleScore;
      $letters = "catt";

      //Act
      $result = $test_ScrabbleScore->makeScrabbleScore($letters);

      //Assert
      $this->assertEquals(6, $result);
    }

    function test_ScrabbleScore_oneletter()
    {
      //Arrange
      $test_ScrabbleScore = new ScrabbleScore;
      $letters = "a";

      //Act
      $result = $test_ScrabbleScore->makeScrabbleScore($letters);

      //Assert
      $this->assertEquals(1, $result);
    }

    function test_ScrabbleScore_none()
    {
      $test_ScrabbleScore = new ScrabbleScore;
      $letters = null;

      //Act
      $result = $test_ScrabbleScore->makeScrabbleScore($letters);

      //Assert
      $this->assertEquals(null, $result);
    }
  }
?>
