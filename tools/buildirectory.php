<?php
namespace freedom5566\codewars\AutobulidDirectory;

class Buildirectory
{
    // 所有目錄陣列
    private $dirList=array();
    // 未建立目錄陣列
    private $notDirlist=array();

    public function __construct()
    {
        $kyu8text[] = './8kyu/algorithms/';
        $kyu8text[] = './8kyu/bugs/';
        $kyu8text[] = './8kyu/fundamentals/';
        $kyu8text[] = './8kyu/puzzles/';

        for ($i=0;$i<count($kyu8text);$i++) {
            $scanned_directory = array_diff(scandir($kyu8text[$i], 1), array('..', '.'));
            $tmpData=explode('/', $kyu8text[$i]);
            for ($j=0;$j<count($scanned_directory);$j++) {
                if ('README.md'!==$scanned_directory[$j]) {
                    $data[$tmpData[1].'/'.$tmpData[2]][$scanned_directory[$j]] = 
                    array_diff(
                        scandir($kyu8text[$i].$scanned_directory[$j], 1), 
                        array('..', '.')
                    );
                }
            }
        }
        $this->dirList=$data;
        $this->notDirlist=$this->showNotdirlist();

    }
    public function showAlldirlist()
    {
        return $this->dirList;
    }
    public function showNotdirlist()
    {
        $data=array();
        // $idx 上層目錄 $value下層目錄
        // 三層foreach 為啥覺得我在搞自己=_=
        foreach($this->dirList as $idx =>$value){
            foreach($value as $dir =>$dirName){
                foreach($dirName as $notdircodewars){
                    if ('0'===$notdircodewars[0]){
                        $data[$idx][$dir][]=$notdircodewars;
                    }
                }
            }
            
        }
        // $this->notDirlist=$data;
        return $data;
    }
    public function openNotdir()
    {
        foreach ($this->notDirlist as $idx => $dir) {
            foreach($dir as $notDir => $dirName) {
                foreach ($dirName as $layer){
                    echo $idx.'/'.$notDir.'/'.$layer.PHP_EOL;
                }
            }
        }
        // return $this->notDirlist;
    }
}


print_r((new Buildirectory)->openNotdir());
