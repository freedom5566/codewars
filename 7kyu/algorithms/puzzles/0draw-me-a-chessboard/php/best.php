<?php
function chessBoard($rows, $columns) {
    $board = [];
    for ($row = 0; $row < $rows; $row++) {
      for ($column = 0; $column < $columns; $column++) {
        $board[$row][$column] = ($row + $column) % 2 ? "X" : "O";
      }
    }
    
    return $board;
  }