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
        foreach ($this->dirList as $idx =>$value) {
            foreach ($value as $dir =>$dirName) {
                foreach ($dirName as $notdircodewars) {
                    if ('0'===$notdircodewars[0]) {
                        $data[$idx][preg_replace("/[A-Za-z-]/", "", $dir)][]=$notdircodewars;
                    }
                }
            }
        }
        // $this->notDirlist=$data;
        return $data;
    }
    public function openNotdir()
    {
        $data = array();
        foreach ($this->notDirlist as $idx => $dir) {
            foreach ($dir as $notDir => $dirName) {
                foreach ($dirName as $layer) {
                    //8kyu/fundamentals/基礎/0Age_Range_Compatibility_Equation
                    $data[] = $idx.'/'.$notDir.'/'.$layer.PHP_EOL;
                }
            }
        }
        return $data;
    }
}

class readwritefile
{
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
        for ($i=0;$i<count($kyu8text);$i++) {
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
        while (! feof($file)) {
            $user[$i]= fgets($file);//fgets()函式從檔案指標中讀取一行
            $i++;
        }
        fclose($file);
        return array_filter($user); // 當內容是空或null不輸出
    }

    public function testwrite()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $config = 'test.txt';
        if (!file($config)) {
            exit('找不到文件');
        }

        
        $file=fopen($config, "r") or exit("Unable to open file!");
        //echo 'asdf';

        if ($file==null) {
            exit('gg');
        }

        $date = date("F j, Y");
        $time = date("H:i:s");
        
        $username = "user";
        $email = "email";
        $password = "pass";
        $insertPos=0;  // variable for saving //Users position
        $newuser = $username . " " . $password . " " . $email . " " . $date . " " .    $time."\r\n";   // I added new line after new user
        $line=fgets($file);
        
        try {
            while (!feof($line)) {
                echo '13';
                if (strpos($line, '//Users')!==false) {
                    $insertPos=ftell($file);    // ftell will tell the position where the pointer moved, here is the new line after //Users.
                    $newline =  $newuser;
                } else {
                    $newline.=$line;   // append existing data with new data of user
                }
            }
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage().PHP_EOL;
        } finally {
            fclose($file);
        }
        // fseek($file,$insertPos);   // move pointer to the file position where we saved above
        // fwrite($file, $newline);
    }

    public function testwrite2()
    {
        $fileRecs = 0;
        $file = new \SplFileObject(__DIR__.'/test.txt', 'r+');
        // 看了文件還是沒懂為甚麼加了這行就能計算行數
        // 搜尋行數 9223372036854775807??
        // 也沒有返回值
        // 等等，好像懂了，先seek跳到92233720368547758007行，但是當然不可能這麼多行，指針就會停留在最後一行
        // 這時候再用key獲得當前行數，也就是文件最後一行的行數囉
        $file->seek(PHP_INT_MAX);
        $fileRecs = $file->key()+1; // 從0開始
        // print_r($file->key());
        echo $fileRecs.PHP_EOL;
        echo PHP_INT_MAX.PHP_EOL;
    }
    public function testwrite3()
    {
        $output='';
        $data = (new Buildirectory)->openNotdir();
        $file = new \SplFileObject(__DIR__.'/test.txt', 'r+');
        while (!$file->eof()) {
            $line = $file->fgets();
            // var_dump(trim($line));
            if (trim($line) == '約拿') {
                for ($i=0;$i<10000;$i++) {
                    $line .= PHP_EOL.implode($data).PHP_EOL;
                }
            }
            $output.=$line;
        }
        $file=null;
        $file =new \SplFileObject(__DIR__.'/test.txt', 'w+');
        $file->fwrite($output);
    }

    // https://stackoverflow.com/questions/13246597/how-to-read-a-large-file-line-by-line

    // 讀大檔案

    public function testwrite4()
    {
        $fileData = function () {
            $file = new \SplFileObject(__DIR__.'/test.txt', 'r+');
            while (!$file->eof()) {
                yield $file->fgets();
            }
        };
        foreach ($fileData() as $line) {
            echo $line;
        }
        // print_r($fileData());
    }
    public function testwrite5(string $path) 
    {
        $output='';
        $data = (new readwritefile)->show();
        // print_r($data['8kyu/puzzles']);
        // foreach ($data as $idx => $dir) {
        //     echo $this->findTable(explode('/',$idx)[1]);
        //     foreach ($dir as $notDir => $dirName) {
        //         foreach ($dirName as $layer) {
        //             //8kyu/fundamentals/基礎/0Age_Range_Compatibility_Equation
                    
        //         }
        //     }
        // }
        $file = new \SplFileObject($path, 'r+');
        $his=false;
        while (!$file->eof()) {
            $line = $file->fgets();
            // var_dump(trim($line));
            // if (trim($line) == '約拿') {
            //     for ($i=0;$i<10000;$i++) {
            //         $line .= PHP_EOL.implode($data).PHP_EOL;
            //     }
            // }
            foreach ($data as $idx => $dir){
                if(trim($line) === $this->findTable(explode('/',$idx)[1])){
                    $his=true;
                }
                foreach($dir as $notDir => $dirName){
                    if(trim($line)==="- ".$notDir && $his){
                        foreach ($dirName as $layer) {
                            $line.=PHP_EOL."    - ".$layer.PHP_EOL;
                        }
                    }
                }
            }
            $output.=$line;
            
        }
        $file=null;
        $file =new \SplFileObject($path, 'w+');
        $file->fwrite($output);
    }
    public function findTable(string $name) : string
    {
        $nametable = array(
            "algorithms" => "# algorithms 演算法目錄",
            "puzzles" => "# puzzles 智力遊戲",
            "fundamentals" => "# fundamentals 基礎目錄",
            "bug" => "# bugs 目錄"

        );
        return $nametable[$name] ?? $name;
    }
    
}

// class sync{
    
//     public function findTable(string $name) : string
//     {
//         $nametable = array(
//             "algorithms" => "# algorithms 演算法目錄",
//             "puzzles" => "# puzzles 智力遊戲",
//             "fundamentals" => "# fundamentals 基礎目錄",
//             "bug" => "# bugs 目錄"

//         );
//         return $nametable[$name] ?? $name;
//     }

// }


// (new readwritefile)->syncDir();
// print_r((new readwritefile)->show());
// print_r((new readwritefile)->findTable("bug"));
(new readwritefile)->testwrite5('./8kyu/puzzles/README.md');


