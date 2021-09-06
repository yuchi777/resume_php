<?php
include "../base.php";


//modal/title.php
//hidden value值// <input type="hidden" name="table" value="title">
// echo $_POST['table'];
//標題區替代文字// <input type="text" name="text">
// echo $_POST['text'];


$db = new DB($_POST['table']);

// 檢查上傳檔案//檢查tmp_nmae是否有名稱,有的話代表檔案上傳,在搬移檔案到img資料夾
// 範例:[file] => Array
//         (
//             [name] => MyFile.jpg
//             [type] => image/jpeg
//             [tmp_name] => /tmp/php/php6hst32
//             [error] => UPLOAD_ERR_OK
//             [size] => 98174
//         )
if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'], "../img/".$_FILES['img']['name']);
    $data['img'] = $_FILES['img']['name'];
};




switch ($_POST['table']) {
    // 管理者帳號管理
    case 'admin':
        $data['acc'] = $_POST['acc'];
        $data['pw'] = $_POST['pw'];
        break;
    case 'menu':
        $data['text'] = $_POST['text'];
        $data['href'] = $_POST['href'];
        break;
    case 'news':
        $data['title'] = $_POST['title'];
        $data['text'] = $_POST['text'];
        break;
    case 'news3':
        $data['title'] = $_POST['title'];
        $data['text'] = $_POST['text'];
        break;
    case 'title':
        $data['text'] = $_POST['text'];
        $data['url'] = $_POST['url'];
        break;
    case 'login':


        $data['acc'] = $_POST['acc'];
        $data['pw'] = $_POST['pw'];
        break;
    case 'msg':
        $data['dataUser'] = $_POST['dataUser'];
        $data['dataTel'] = $_POST['dataTel'];
        $data['dataMail'] = $_POST['dataMail'];
        $data['subject'] = $_POST['subject'];
        $data['dataMsg'] = $_POST['dataMsg'];
        break;
    
    // 其他
    default:
        // $data['img'] = "img1.jpg" ;
        $data['text'] = $_POST['text'];
        break;
};


// print_r($data);
$db->save($data);


if($_POST['table']=='admin'){

    if(isset($_POST['allow']) && $_POST['allow'] !== "1234"){
        // to("./login.php");
        echo "<script type='text/javascript'>alert('驗證碼錯誤!!');</script>";
        header("Refresh:0.5;url='../login.php'");
        $db->del($data);
        
    }else{
        if(isset($_POST['backendAdd'])){
            to("../backend.php?do=".$_POST['table']);
        }else{
            echo "<script type='text/javascript'>alert('您的申請已成功,請登入!!');</script>";
            header("Refresh:0.5;url='../login.php'");
        }
        

    }

}else{


        if($_POST['table'] == 'msg'){
            
            echo "<script type='text/javascript'>alert('您的訊息已經收到,會盡快與您聯絡,謝謝!!');</script>";
            // header("Refresh:3;url='../index.php'");
            to("../api/msg.php");
        }else{

            to("../backend.php?do=".$_POST['table']);
        }

    

}

?>
