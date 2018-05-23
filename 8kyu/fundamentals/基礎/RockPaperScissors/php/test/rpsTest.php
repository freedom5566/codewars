<?php

use PHPUnit\Framework\TestCase;
require "./a.php";


class rpcTestCases extends TestCase {
  private function dotest($p1, $p2, $exp) {
        $actual = rpc ($p1, $p2);
        //echo $exp == $actual;
        $this->assertEquals($exp, $actual);
    }
    
    public function testrpcBasics() {
        $this->dotest("rock", "scissors", "Player 1 won!");
        $this->dotest("scissors", "paper", "Player 1 won!");
        $this->dotest("paper", "rock", "Player 1 won!");
        
    }
  
    public function test1() {
        echo "Fixed Tests Player 1 won!";
        $this->dotest("rock", "scissors", "Player 1 won!");
        $this->dotest("scissors", "paper", "Player 1 won!");
        $this->dotest("paper", "rock", "Player 1 won!");
    }
   
   public function test2() {
        echo "Fixed Tests Player 2 won!";
        $this->dotest("scissors", "rock", "Player 2 won!");
        $this->dotest("paper", "scissors", "Player 2 won!");
        $this->dotest("rock", "paper", "Player 2 won!");
    }
    
    public function test3() {
        echo "Fixed Tests Draw!";
        $this->dotest("scissors", "scissors", "Draw!");
        $this->dotest("paper", "paper", "Draw!");
        $this->dotest("rock", "rock", "Draw!");
    }
}