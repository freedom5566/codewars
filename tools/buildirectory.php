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
                    //8kyu/fundamentals/基礎/0Age_Range_Compatibility_Equation
                    echo $idx.'/'.$notDir.'/'.$layer.PHP_EOL;
                }
            }
        }
        // return $this->notDirlist;
    }
}

class sync {
    // showAlldirlist 所有的資料夾都印出來
    // showNotdirlist 印出未建立目錄資料夾的陣列
    // openNotdir 印出所有目錄下未建立目錄的資料夾路徑
    public function show()
    {
        return (new Buildirectory)->showNotdirlist(); 
    }

    public function syncDir()
    {
        $kyu8text[] = './8kyu/algorithms/README.md';
        $kyu8text[] = './8kyu/bugs/README.md';
        $kyu8text[] = './8kyu/fundamentals/README.md';
        $kyu8text[] = './8kyu/puzzles/README.md';
        for($i=0;$i<count($kyu8text);$i++) {
            $data=$this->readline($kyu8text[$i]);
            print_r($data);    
        }

    }
    public function readline(string $path)
    {
        $file = fopen("$path", "r");
        $user=array();
        $i=0;
        //輸出文字中所有的行，直到檔案結束為止。
        while(! feof($file))
        {
            $user[$i]= fgets($file);//fgets()函式從檔案指標中讀取一行
            $i++;
        }
        fclose($file);
        return array_filter($user); // 當內容是空或null不輸出
        
    }
}


(new sync)->syncDir();
