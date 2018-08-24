<?php

namespace freedom5566\codewars\linktest;

require './vendor/autoload.php';

use VerbalExpressions\PHPVerbalExpressions\VerbalExpressions;

class linktest
{
    private $url=array();

    /**
     * __construct function
     * 取得所有有效連結
     * @date 2018 08 24
     */
    public function __construct()
    {
        $kyu8text[] = file_get_contents('./8kyu/algorithms/README.md');
        $kyu8text[] = file_get_contents('./8kyu/bugs/README.md');
        $kyu8text[] = file_get_contents('./8kyu/fundamentals/README.md');
        $kyu8text[] = file_get_contents('./8kyu/puzzles/README.md');
        
        
        for ($i = 0 ; $i < count($kyu8text) ; $i++) {
            preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $kyu8text[$i], $match);
            $this->url[]=$match[0];
        }
    }

    /**
     * verbal function
     * 驗證網址是否 github/freedom5566
     * @param array $arr 一坨網址
     * @return void
     * @date 2018 08 24
     */
    private function verbal(array $arr)
    {
        $regex = new VerbalExpressions();
        $regex->startOfLine()
                ->then("http")
                ->maybe("s")
                ->then("://")
                ->then("github.com/")
                ->then("freedom5566/")
                ->then("codewars")
                ->anythingBut(" ")
                ->endOfLine();
        $i=$j=0;
        foreach ($arr as $value) {
            foreach ($value as $url) {
                if ($regex->test($url)) {
                    $i++;
                } else {
                    $j++;
                }
            }
        }
        return [$i,$j];
    }

    /**
     * linktest function
     *
     * @param array $arr
     * @return void
     * @date 2018 08 24
     */
    public function linktest(array $arr)
    {

    }
}
(new linktest())->linktest();


