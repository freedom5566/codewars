<?php

function rpc ($p1, $p2) :string {
    #you code here
    if(strcmp($p1, $p2)===0) return "Draw!";
    elseif(($p1==="scissors" and $p2==="paper" ) or ($p1==="paper" and $p2==="rock") or ($p1==="rock" and $p2==="scissors")){
      return "Player 1 won!";
    }
    else{
      return "Player 2 won!";
    }
}