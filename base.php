
<?php
//設台北時區
date_default_timezone_set("Asia/Taipei");


// base檔載入session其他include都會有
session_start();





//設置backend的抬頭文字
$ts = [
    "title" => "作品圖片標題管理",
    "ad" => "個人簡介管理",
    "ad2" => "自我介紹管理",
    "mvim" => "Skill 圖片管理",
    // "image"=>"校園映像資料管理",
    // "total"=>"進站總人數管理",
    // "bottom"=>"頁尾版權資料管理",
    "news" => "個人經驗管理",
    // "news2" => "個人經驗(右)管理",
    "news3" => "學歷資料管理",
    "admin" => "管理者帳號管理",
    "menu" => "NavBar選單管理",
    "msg" => "留言簿管理"
];

$as = [
    "title" => "新增 作品圖片標題",
    "ad" => "新增 個人簡介",
    "ad2" => "新增 自我介紹",
    "mvim" => "新增 Skill 圖片",
    "news" => "新增 個人經驗",
    // "news2" => "新增 個人經驗(右)",
    "news3" => "新增 學歷資料",
    "admin" => "新增 管理者帳號",
    "menu" => "新增 NavBar選單",
    "msg" => "留言簿管理"
];
$hs = [
    "title" => "作品圖片標題",
    "ad" => "個人簡介",
    "ad2" => "自我介紹",
    "mvim" => "Skill 圖片",
    "news" => "個人經驗",
    // "news2" => "個人經驗(右)",
    "news3" => "學歷資料",
    "admin" => "管理者帳號",
    "menu" => "NavBar選單",
    "msg" => "留言簿管理"
];

class DB
{
    // private $dsn = "mysql:host=localhost;charset=utf8;dbname=s1100205";
    private $dsn = "mysql:host=localhost;charset=utf8;dbname=db01_resume"; //不能有空格
    // private $root = 's1100205';
    private $root = 'root';
    // private $password = "s1100205";
    private $password = "";
    private $table;
    private $pdo;

    //設定建構式
    //PDO連線
    //Apache->Config->httpd.conf->DocumentRoot & Directory 
    //"C:\Users\yuchi\Documents\github\Web-Design-Certification-Level-B\web01"
    public function __construct($table)
    {

        $this->table = $table;
        $this->pdo = new PDO($this->dsn, $this->root, $this->password);
        // $this->pdo =new PDO("mysql:host=localhost;dbname=db01_story", $this->root, $this->password);
    }





    /****************************************************************************************** */

    //($a,…$arg)的參數寫法稱為"不定參數"，表示不確定參數會有幾個，而所有的參數都會被放入陣列中。
    // 不定參數一定放在所有參數的最後，前面的參數表示一定要有，否則會出現參數缺少的錯誤。
    public function all(...$arg)
    {

        $sql = "select * from $this->table ";

        // $arg=[] or [陣列],[SQL字串],[陣列,SQL字串]
        if (isset($arg[0])) {

            //判斷是否為array
            if (is_array($arg[0])) {
                //處理陣列 ["欄位"=>"值","欄位"=>"值"]
                //處理SQL語法 where `欄位`='值' && `欄位`='值'

                foreach ($arg[0] as $key => $value) {

                    $tmp[] = sprintf("`%s`='%s'", $key, $value);
                }

                // print_r (implode(" && ", $tmp)); //&&前後空白 //implode() 函數把數組元素組合為一個字符串。
                $sql = $sql . " where " . implode(" && ", $tmp); //where前後注意空白

            } else {
                //為字串
                $sql = $sql . $arg[0];
            }

            if (isset($arg[1])) {
                //為字串
                $sql = $sql . $arg[1];
            }
        }


        // echo $sql;
        //執行 PDO 物件並將sql語法導向到裡面的 query() 函數。讓 PDO 進行 SQL 連接並且執行 query()。
        //fetchAll(PDO::FETCH_ASSOC)
        return $this->pdo->query($sql)->fetchAll();
    }
    /****************************************************************************************** */


    public function count(...$arg)
    {
        $sql = "select count(*) from $this->table ";

        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                foreach ($arg[0] as $key => $value) {
                    $tmp[] = sprintf(" `%s`='%s' ", $key, $value);
                }

                $sql = $sql . " where " . implode(" && ", $tmp);
            } else {

                $sql = $sql . $arg[0];
            }
        }

        if (isset($arg[1])) {
            $sql = $sql . $arg[1];
        }

        // echo $sql."<br>";
        return $this->pdo->query($sql)->fetchColumn();
    }
    /****************************************************************************************** */


    public function find($id)
    {
        $sql = "select * from $this->table ";

        if (is_array($id)) {
            foreach ($id as $key => $value) {
                $tmp[] = sprintf("`%s`='%s'", $key, $value);
            }

            $sql = $sql . " where " . implode(" && ", $tmp);
        } else {

            $sql = $sql . " where `id`='$id' ";
        }


        // echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    /******************************************************************************************/

    public function del($id)
    {
        $sql = " delete from $this->table";

        if (is_array($id)) {
            foreach ($id as $key => $value) {
                $tmp[] = sprintf(" `%s`='%s' ", $key, $value);
            }

            $sql = $sql . " where " . implode(" && ", $tmp);
        } else {

            $sql = $sql . " where `id`='$id'";
        }


        // echo $sql."</br>";
        return $this->pdo->exec($sql);
    }
    /******************************************************************************************/

    //array有id做update,沒有做insert
    //規範傳入的參數為一個陣列,陣列格式為 `欄位` => "值", 所以不再另外加判斷式is_array()
    public function save($array)
    {
        if (isset($array['id'])) {
            //update有id
            foreach ($array as $key => $value) {
                $tmp[] = sprintf(" `%s`='%s' ", $key, $value);
            }
            //update改變
            $sql = "update $this->table set " . implode(',', $tmp) . " where `id`='{$array['id']}' ";
        } else {
            //insert 增加
            //`,` & ','
            //array_keys()取array所有的key值
            $sql = " insert into $this->table (`" . implode("`,`", array_keys($array))  . "`) 
                                        values ('" . implode("','", $array) . "') "; //串所有值
        }


        // echo $sql."<br>";
        return $this->pdo->exec($sql);
    }
}


/******************************************************************************************/
function to($url)
{
    header("location:" . $url);
}



// 建立物件導向(資料表)///////////////////////////////////////////////
$Total = new DB("total");
$Bottom = new DB("bottom");
$Title = new DB("title");
$Ad = new DB("ad");
$Ad2 = new DB("ad2");
$Mvim = new DB("mvim");
$Image = new DB("image");
$News = new DB("news");
$News3 = new DB("news3");

$Admin = new DB("admin");

$Menu = new DB("menu");
$Msg = new DB("msg");









// 建立session狀態管理
if (!isset($_SESSION['total'])) {
    $total = $Total->find(1);
    $total['total'] = $total['total'] + 1;
    // print_r($total);
    $Total->save($total);

    // 建立SESSION
    $_SESSION['total'] = 0;
}


//測試↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
// $user = new DB ("user");
// echo "<pre>";
// print_r($user->all(['name'=>'amy' , 'visible'=>'Y']) );
// echo "</pre><hr>";


// echo "<pre>";
// print_r($user->all(" where `name`='amy' "));
// echo "</pre><hr>";


// echo "<pre>";
// print_r($user->all(" where `visible`='Y'", "order by `id` DESC "));
// echo "</pre><hr>";

// /******************************************************************************************/
// echo "<pre>";
// print_r($user->count(['name'=>'amy' , 'visible'=>'Y']));
// echo "</pre><hr>";


// echo "<pre>";
// print_r($user->count(" where `name`='amy' "));
// echo "</pre><hr>";


// echo "<pre>";
// print_r($user->count(" where `visible`='Y'", "order by `id` DESC "));
// echo "</pre><hr>";
// /******************************************************************************************/


// echo "<pre>";
// print_r($user->find(3));
// echo "</pre><hr>";

// echo "<pre>";
// print_r($user->find([ 'level'=>'2', 'visible'=> 'N' ]));
// echo "</pre><hr>";
/******************************************************************************************/

// 刪除資料表stories裡面的資料
// $store = new DB ("stories");
// echo "<pre>";
// print_r($store->del(3));
// echo "</pre><hr>";

// echo "<pre>";
// print_r($store->del(['file'=>'123']));
// echo "</pre><hr>";
// /******************************************************************************************/

// echo "<pre>";
// print_r($store->save(['id'=>'12',
//                     'name'=>'台灣大車隊',
//                     'file'=>'bg0.jpg',
//                     'intro_chinese'=>'999',
//                     'intro_english'=>'999',
//                     'visible' =>'Y'
//                     ])
//         );
// echo "</pre><hr>";

// echo "<pre>";
// print_r($store->save([
//                     'name'=>'熊',
//                     'file'=>'bg5.jpg',
//                     'intro_chinese'=>'222',
//                     'intro_english'=>'222',
//                     'visible' =>'Y'
//                     ])
//         );
// echo "</pre><hr>";
/******************************************************************************************/



?>