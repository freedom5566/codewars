<?php
function chessBoard($rows, $columns)
{
    $draw=array();
    for ($i=0;$i<$rows;$i++) {
        for ($j=0;$j<$columns;$j++) {
            if ($i%2===0) {
                if ($j%2===0) {
                    $draw[$i][] = 'O';
                } else {
                    $draw[$i][] = 'X';
                }
            } else {
                if ($j%2===0) {
                    $draw[$i][] = 'X';
                } else {
                    $draw[$i][] = 'O';
                }
            }
        }
    }
    return $draw;
}

