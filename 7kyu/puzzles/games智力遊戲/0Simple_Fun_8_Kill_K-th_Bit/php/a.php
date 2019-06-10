<?php

/**
 * Simple Fun #8: Kill K-th Bit
 * 
 * @description change the $kth bit form right to 0. one line :)
 * 
 * @param int $n digit
 * @param int $k The 1-based index of the changed bit (counting from the right).
 * @return int digit
 * 
 * @author akerayoui
 */
function kill_kth_bit( int $n, int $k ): int {

    // replace -$k pos with 0 and return the value 
    return strlen( decbin( $n ) ) < $k ? $n : bindec( substr_replace( decbin( $n ), '0', -$k, 1 ) ) ;

}

function kill_kth_bit(int $n, int $k): int {
    return $n & ~(1 << $k - 1);


}

function kill_kth_bit(int $n, int $k): int {
    return $n&~2**--$k;
}

