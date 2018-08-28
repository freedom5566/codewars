<?php
namespace freedom5566\codewars\AutobulidDirectory;

class Buildirectory
{
    public function getdirectory()
    {
        $kyu8text[] = './8kyu/algorithms/';
        $kyu8text[] = './8kyu/bugs/';
        $kyu8text[] = './8kyu/fundamentals/';
        $kyu8text[] = './8kyu/puzzles/';

        for ($i=0;$i<count($kyu8text);$i++) {
            $scanned_directory = array_diff(scandir($kyu8text[$i], 1), array('..', '.'));
            $tmpData=explode('/', $kyu8text[$i]);
            for ($j=0;$j<count($scanned_directory);$j++) {
                if ('README.md'!=$scanned_directory[$j]) {
                    $data[$tmpData[1].'-'.$tmpData[2]][$scanned_directory[$j]] = 
                    array_diff(
                        scandir($kyu8text[$i].$scanned_directory[$j], 1), 
                        array('..', '.')
                    );
                }
            }
        }
        print_r($data);
    }
}

print_r((new Buildirectory)->getdirectory());
