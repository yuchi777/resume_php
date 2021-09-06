<?php
include "./base.php";

if (!isset($_SESSION['admin'])) {
	to("./login.php");
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>resume_php</title>
	<!-- 載入Bootstrap_Css&Js -->
	<link rel="stylesheet" href="./css/bootstrap.css">
	<script src="./js/bootstrap.bundle.js"></script>

	<!-- 自定義css -->
	<link rel="stylesheet" href="./css/resume_backend.css">

	<!-- 自定義JS -->
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>

	<!-- 載入title-icon -->
	<link rel="shortcut icon" href="./images/n.png" type="image/x-icon">

	<!-- Google font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Roboto&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

	<!-- Google font for icon -->
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

	<!-- fontawsome icon -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">


	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script> -->

	<!-- AOS_JS -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- AOSCSS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<body>

	<!-- 彈出視窗 -->
	<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>


	<div class=" my-2">
		<div id="ms" class="container d-flex justify-content-center align-items-center">

			<!-- 左側選單 -->
			<div id="lf" class="bg-light shadow-lg " style="opacity: 0.9">

				<div id="menuput" class="dbor">
					<!-- herf="?do=...", ?為當前頁 -->
					<!-- 後台管理選單 ----------------------------------------------->
					<!--主選單放此-->
					<span class="t botli">後台管理選單</span>

					<!-- <a href="?do=menu">
						<div class="mainmu"> NavBar選單管理 </div>
					</a> -->

					<a href="?do=ad">
						<div class="mainmu"> 個人簡介管理 </div>
					</a>
					<a href="?do=ad2">
						<div class="mainmu"> 自我介紹管理 </div>
					</a>

					<a href="?do=mvim">
						<div class="mainmu"> Skill圖片管理 </div>
					</a>

					<a href="?do=news">
						<div class="mainmu"> 個人經驗資料管理 </div>
					</a>

					<!-- <a href="?do=news2">
						<div class="mainmu"> 個人經驗(右)資料管理 </div>
					</a> -->

					<a href="?do=news3">
						<div class="mainmu"> 學歷資料管理 </div>
					</a>


					<a href="?do=title">
						<div class="mainmu"> 作品圖片&標題管理 </div>
					</a>

					<a href="?do=admin">
						<div class="mainmu"> 管理者帳號管理 </div>
					</a>
					<a href="?do=msg">
						<div class="mainmu"> 留言簿 </div>
					</a>
					<a href="./api/logout.php">
						<div class="mainmu"> 登出 </div>
					</a>
					<a href="./index.php">
						<div class="mainmu"> 回首頁 </div>
					</a>

					<!-- <a href="?do=image">
						<div class="mainmu"> 校園映象資料管理 </div>
					</a> -->
					<!-- <a href="?do=total">
						<div class="mainmu"> 進站總人數管理 </div>
					</a> -->
					<!-- <a href="?do=bottom">
						<div class="mainmu"> 頁尾版權資料管理 </div>
					</a> -->

				</div>
			</div>

			<!-- 右邊選單 -->
			<div class="di bg-light shadow-lg " style="opacity: 0.9; height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">




				<!--正中央-->
				<!-- $_GET['do']變數來源href連結 -->
				<!-- 挖掉主要顯示區域到backend的 title.php -->
				<!-- 動態載入顯示區域頁面 title.php / ad.php/menu.php等等共8個頁面-------------------------------------------------------->
				<?php
				// include "./backend/title.php";

				$do = (isset($_GET['do'])) ? $_GET['do'] : 'hello';
				$file = "./backend/" . $do . ".php";

				//判斷檔案是否存在
				// 載入顯示區域頁面
				if (file_exists($file)) {
					include $file;
				} else {
					include "./backend/title.php";
				}

				?>
				<!-- ----------- -------------------------------------------------------->


			</div>
		</div>
	</div>
</body>

</html>