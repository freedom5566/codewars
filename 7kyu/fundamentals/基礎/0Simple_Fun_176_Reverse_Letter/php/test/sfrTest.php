<?php
use PHPUnit\Framework\TestCase;
require "./a.php";
// PHPUnit Test Examples:
// TODO: Replace examples and use TDD development by writing your own tests
class MyTestCases extends TestCase
{
    // test function names should start with "test"
    public function testThatSomethingShouldHappen() {
      $this->assertEquals("nahsirk", reverseLetter("krishan"));
      $this->assertEquals("nortlu", reverseLetter("ultr53o?n"));
      $this->assertEquals("cba", reverseLetter("ab23c"));
      $this->assertEquals("nahsirk", reverseLetter("krish21an"));
    }
    
    public function testRandom(){
    
      for($i = 0;$i < 50;$i++){
        
        $str = randomString();
        $this->assertEquals(correctAnswer($str),reverseLetter($str));
        
      }
    
    }
    
}

function randomString(){
  $output = '';
  $letters = "abcdefghijklmnopqrstuvwxyz0123456789_ !@#$%^&*_(),.?|{}[]-=+\\/";
  $length = rand(10,50);
  for($i = 0;$i < $length;$i++){
    
    $randomChar = $letters[rand(0,strlen($letters)-1)];
    $output .= $randomChar;
  
  }
  return $output;
}
function correctAnswer($str){

  return strrev(preg_replace('/[^a-z]/i','',$str));

}