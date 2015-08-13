<?php

  require_once "src/ScrabbleScore.php";

  class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
  {

    function test_ScrabbleScore()
    {
      //Arrange
      $test_ScrabbleScore = new ScrabbleScore;
      $letters = "dog";

      //Act
      $result = $test_ScrabbleScore->makeScrabbleScore($letters);

      //Assert
      $this->assertEquals(5, $result);
    }
  }
?>
