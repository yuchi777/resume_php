<?php
include_once "../base.php";

// $post = $_POST;
// echo "<pre>";
// print_r($post);
// echo "</pre>";

// $texts = $_POST['text'];
$ids = $_POST['id'];

// 判斷資料表是誰
$table = $_POST['table'];
$db=new DB($table);

foreach ($ids as $key => $id) {

    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {

        $db->del($id);

    } else {

        $row = $db->find($id);
        // $row['text'] = $_POST['text'][$key]; //資料庫依據$id撈出的資料text = 表單text欄位輸入的資料內容
        // echo "<pre>";
        // print_r($row['text']); //資料庫根據$id找到的text欄位資料
        // echo "</pre>";
        // echo "<pre>";
        // print_r($texts[$key]); //表單text欄位輸入的資料內容,依據$key值列出
        // echo "</pre>"."<br>";

        // 判斷顯示與否
        //三元運算子
        //radio單選/checkbox多選
        switch ($table) {
            case 'title':
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh']))?1:0;
                $row['sh2'] = (isset($_POST['sh2']) && in_array($id, $_POST['sh2']))?1:0;
                $row['sh3'] = (isset($_POST['sh3']) && in_array($id, $_POST['sh3']))?1:0;
                $row['text'] = $_POST['text'][$key];
                $row['url'] = $_POST['url'][$key];
                break;
            case 'admin':
                $row['acc'] = $_POST['acc'][$key];
                $row['pw'] = $_POST['pw'][$key];
                break;
            case 'menu':
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh']))?1:0;
                $row['text'] = $_POST['text'][$key];
                $row['href'] = $_POST['href'][$key];
                break;
            case 'news':
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh']))?1:0;
                $row['title'] = $_POST['title'][$key];
                $row['text'] = $_POST['text'][$key];
                break;
            case 'news3':
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh']))?1:0;
                $row['title'] = $_POST['title'][$key];
                $row['text'] = $_POST['text'][$key];
                break;
            default:
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh']))?1:0;
                $row['text'] = $_POST['text'][$key];
                break;
        }

        // if (isset($_POST['sh']) && $_POST['sh'] == $id) {
        //     $row['sh'] = 1;
        // } else {
        //     $row['sh'] = 0;
        // }

        $db->save($row);
    }
}


// foreach ($_POST['del'] as $key => $id) {
//     $Title->del($id);
// }

to("../backend.php?do=".$table);
