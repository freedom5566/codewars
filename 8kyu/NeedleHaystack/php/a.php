<?php
//先確認array裏面有無needle花費時間是不用確認的5倍.......
// function findNeedle($haystack) {
//     // your code here
//     return in_array("needle",$haystack) ? "found the needle at position " . array_search('needle',$haystack) : "";
// }
function findNeedle($haystack) {
    // your code here
    return  "found the needle at position ".array_search("needle",$haystack);
}