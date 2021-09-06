<?php
//只載入一次,避免後續再載入第二次造成衝突(ex.變數)
include_once "./base.php";


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yuchi resume</title>

    <!-- 載入Bootstrap_Css&Js -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/bootstrap.bundle.js"></script>

    <!-- 自定義css -->
    <link rel="stylesheet" href="./css/resume.css">

    <!-- 載入title-icon -->
    <link rel="shortcut icon" href="./images/n.png" type="image/x-icon">

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <!-- Google font for icon -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

    <!-- fontawsome icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- Jquery  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script> -->

    <!-- AOS_JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- AOSCSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TZ25D27RD6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-TZ25D27RD6');
    </script>

</head>

<body>

    <!--導覽列----------------------------------------------------------------->
    <header id="yuchiMenu" class="fixed-top">

        <nav class="navbar navbar-expand-md navbar-dark">
            <!-- .container 固定寬度並支援響應式佈局的容器。.container-fluid 用於 100% 寬度-->
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./images/n.png" style="height:1.5rem ; width:1.5rem" class="mb-1">
                    RESUME</a>
                <!-- navbar-toggler 響應式 -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#yuchiNav">
                    <!-- navbar-icon  -->
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="yuchiNav">
                    <!-- 靠右對齊ms-auto -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ms-1 ">
                            <a class="nav-link" href="#yuchiAbout">
                                <!-- <span class="mx-1 material-icons-outlined float-lg-start fa-lg">tag_faces</span> -->
                                <i class="mx-1 far fa-address-card fa-1x "></i>
                                ABOUT
                            </a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="#yuchiSkill">
                                <!-- <span class="mx-1 material-icons-outlined float-lg-start fa-lg">laptop_mac</span> -->
                                <i class="mx-1 fas fa-laptop-code fa-1x"></i>
                                SKILL
                            </a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="#re">
                                <!-- <span class="mx-1 material-icons-outlined float-lg-start fa-lg">business</span> -->
                                <i class="mx-1 fas fa-file-alt fa-1x"></i>
                                EXPERIENCE
                            </a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="#yuchiWork">
                                <!-- <span class="mx-1 material-icons-outlined float-lg-start fa-lg">feed</span> -->
                                <i class="mx-1 fas fa-folder-open fa-1x"></i>
                                MY WORKS
                            </a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="#yuchiContent">
                                <!-- <span class="mx-1 material-icons-outlined float-lg-start fa-lg">email</span> -->
                                <i class="mx-1 far fa-envelope fa-1x"></i>
                                CONTACT
                            </a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="./login.php">
                                <!-- <span class="mx-1 material-icons-outlined float-lg-start fa-lg">email</span> -->
                                <i class="mx-1 fas fa-user-cog fa-1x"></i>
                                LOGIN
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    <!--yuchiAbout-------------------------------------------------------->
    <section id="yuchiAbout" class="">

        <div class="container ">
            <div class="row p-5 ">
                <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1 "></div>
                <div class="board-1 col-xs-12 col-sm-4 col-md-4 col-lg-3">
                    
                    <img id="aboutImg" src="./images/yuchi.JPG" class="">
                    <hr>
                    <h2 class="font">About Nick</h2>

                    <div class="font">
                        <?php
                        $about = $Ad->all(['sh' => 1]);
                        foreach ($about as $key => $value) {
                            echo "<h6>{$value['text']}</h6>";
                        }
                        ?>
                    </div>

                    <a href="mailto:yuchi8943@gmail.com" style="color:black ; text-decoration:none;">
                        <i class="mx-1 far fa-envelope fa-2x"></i>
                    </a>
                    <a href="https://www.instagram.com/yuchi8943/" style="color:black ; text-decoration:none;">
                        <i class="mx-1 fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="https://github.com/yuchi777" style="color:black ; text-decoration:none;">
                        <i class="mx-1 fab fa-github fa-2x"></i>
                    </a>
                    <a href="https://codepen.io/yuchi777" style="color:black ; text-decoration:none;">
                        <i class="mx-1 fab fa-codepen fa-2x"></i>
                    </a>
                </div>
                <div class="board col-xs-12 col-sm-8 col-md-6 col-lg-7">

                    <!-- <h4 class="p-4 ">熱愛戶外活動, 對於新事物保持學習態度,目前朝著全端網頁工程師發展 .</h4> -->
                    <div class="m-4 ">
                        <?php
                        $about2 = $Ad2->all(['sh' => 1]);
                        foreach ($about2 as $key => $value) {
                            echo "<h5>{$value['text']}</h5>";
                        }

                        ?>
                    </div>

                    <h2 class="text-center font">What I can do</h2>
                    <div class="row text-center">
                        <div class="col col-xs-6 col-sm-6 col-md-6 col-lg-4 pt-4">
                            <img src="./images/RWD.png" class="img-fluid mb-4">
                            <h6 class="text-center font">
                                Responsivebr <br>Web Design
                            </h6>
                        </div>
                        <div class="col col-xs-6 col-sm-6 col-md-6 col-lg-4 pt-4">
                            <img src="./images/CODE.png" class="img-fluid mb-4">
                            <h6 class="text-center font">
                                Database Design
                            </h6>
                        </div>
                        <div class="col col-xs-6 col-sm-6 col-md-6 col-lg-4 pt-4">
                            <img src="./images/trade.png" class="img-fluid mb-4">
                            <h6 class="text-center font">
                                communication
                            </h6>
                        </div>
                        <!-- <div class="col col-xs-6 col-sm-6 col-md-6 col-lg-4 p-4">
                            <div class="col "></div>
                        </div> -->

                    </div>
                    <!-- <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div> -->
                </div>
            </div>

        </div>
    </section>




    <!--yuchiSkill------------------------------------------------------->
    <section id="yuchiSkill">
        <div id="workWith" class="container">

            <div class="row">
                <div class="col mt-5">
                    <h1 id="yuchiSkill-2" class="mb-3 mt-5">SKILL</h1>
                </div>
            </div>
            <div id="icon1" class="icon row mb-5 p-2 m-2">
                
                    
                    <?php
                    $skill = $Mvim->all(['sh' => 1]);
                    foreach ($skill as $key => $value) {
                        echo "
                        <div class='col col-sm-3 col-lg-2  d-flex flex-wrap justify-content-center align-items-center' data-aos='fade-down'>
                                <img class='m-2 ' src='./images/icon/{$value['img']}'>
                        </div>
                        ";
                    };
                    ?>

                

            </div>

        </div>
    </section>

    <!-- re經驗 -------------------------------------------------------->
    <section id="re">
        <div class="container my-3 mb-5 mt-5">
            <h1 class=" my-5 text-center text-white ">EXPERIENCE</h1>

            <div id="title1" class="row m-3 ">


                <?php
                $re = $News->all(['sh' => 1]);
                    foreach ($re as $key => $value) {
                        echo "
                        <div id='' class='row my-2 rounded '  style='height: 150px;'>
                        
                            <div id='cname1' class=' col-4 rounded d-flex  align-items-center' data-aos='fade-right'>
                                <div>
                                {$value['title']}
                                </div>
                            </div>

                            <div id='' class='col-8 bg-light rounded d-flex align-items-center' data-aos='fade-left'>
                                <div>
                                {$value['text']}
                                </div>
                            </div>
                        </div>
                            ";
                }
                ?>



                <!-- re學歷 > yuchiEmploy--------------------------------------------------->
                <div id="yuchiEmploy" class=" w-100">
                    <div class="container ">
                        <div class="paper">

                            <div class="row mt-5 m-2 bg-light" data-aos="fade-up">

                                <div class="col-xs-12 col-sm-12 col-lg-12  list-group accordion px-4  " id="Menu">
                                    <h1 class="my-3 text-center">EDUCATION</h1>


                                    <?php
                                    $news3 = $News3->all(['sh' => 1]);
                                    
                                    foreach ($news3 as $key => $value) {
                                        echo " 
                                        <div class='accordion-item ' data-aos='fade-down' data-bs-toggle='list' data-bs-target='#Img{$key}'>
                                        
                                        <a class='accordion-header accordion-button alert-light text-secondary text-decoration-none collapsed ' data-bs-toggle='collapse' href='#Text{$key}'>
                                            <p>
                                                {$value['title']}
                                            </p>

                                        </a>

                                        <div id='Text{$key}' class='accordion-collapse collapse ' data-bs-parent='#Menu'>
                                            <div class='accordion-body'>
                                                <p>
                                                {$value['text']}
                                                </p>

                                            </div>
                                        </div>
                                    </div>

                                    ";
                                    }
                                    
                                    ?>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </section>





    <!--yuchiWork --------------------------------------------------->
    <section id="yuchiWork" class="pb-5">

        <div class="container pt-2  ">
            <br>
            <h1 class="text-light text-center pt-5 ">MY WORKS</h1>
            <!-- 分隔線 -->
            <div class="border-bottom border-light border border-1  "></div>

            <div class=" toggles btn-group-lg text-center m-4 ">
                <button class=" m-2 btn btn-outline-light border border-2 border-light" id="showall">Show All</button>
                <button class=" m-2 btn btn-outline-light border border-2 border-light" id="web">Web Design</button>
                <button class=" m-2 btn btn-outline-light border border-2 border-light" id="graphic">Graphic Design</button>
                <button class=" m-2 btn btn-outline-light border border-2 border-light" id="motion">Other</button>
            </div>


            <div class="row posts">

                <?php
                $web = $Title->all(['sh' => 1]);
                foreach ($web as $key => $value) {
                ?>

                    <div class='web mx-auto post frame'>
                        <img src="./img/<?= $value['img'] ?>" style='width:100%;height:90%'>

                        <div class='details'>
                            <a style="font-family: Righteous;font-size:1.5rem;" href="<?= $value['url'] ?>">
                                <?= $value['text'] ?>
                            </a>
                        </div>

                    </div>

                <?php
                }
                ?>


                <?php
                $web = $Title->all(['sh2' => 1]);
                foreach ($web as $key => $value) {
                ?>

                    <div class="mx-auto graphic post  frame">
                        <img src="./img/<?= $value['img'] ?>" style='width:100%;height:90%'>

                        <div class="details">
                            <a style="font-family: Righteous;font-size:1.5rem;" href="<?= $value['url'] ?>">
                                <?= $value['text'] ?>
                            </a>
                        </div>

                    </div>

                <?php
                }
                ?>


                <?php
                $web = $Title->all(['sh3' => 1]);
                foreach ($web as $key => $value) {
                ?>

                        <div class="mx-auto motion post  frame">
                        <img src="./img/<?= $value['img'] ?>" style='width:100%;height:90%'>

                        <div class="details">
                            <a style="font-family: Righteous;font-size:1.5rem;"  href="<?= $value['url'] ?>">
                                <?= $value['text'] ?>
                            </a>
                        </div>

                        </div>

                <?php
                }
                ?>


            </div>
        </div>
    </section>




    <!-- yuchiContact--------------------------------------------->

    <section id="yuchiContent" class="">
        <div class="container pt-5 ">
            <header class="h2 text-secondary mb-5 pt-1 mt-5">
                CONTACT
            </header>


            <form id="form" class="row  gy-3 text-dark border border-secondary mb-5 bg-light" action="./api/add.php" method="POST">
                <div class="col-12 ">

                    <label for="dataUser" class="form-label">Name:</label>
                    <div class="input-group">
                        <!-- 輸入姓名 -->
                        <input type="text" class="form-control" id="dataUser" name="dataUser" placeholder="Full Name" required>

                    </div>

                </div>


                <div class="col-12 ">
                    <label for="dataTel" class="form-label">Moblie Phone:</label>
                    <input type="tel" class="form-control" id="dataTel" name="dataTel" placeholder="Phone Number" required>
                </div>
                <div class="col-12 ">
                    <label for="dataMail" class="form-label">E-mail:</label>
                    <input type="email" class="form-control" id="dataMail" name="dataMail" placeholder="Email Address" required>
                </div>
                <div class="col-12">
                    <label for="dataQue" class="form-label">Title:</label>
                    <textarea class="form-control" id="subject" name="subject" rows="1" placeholder="Title"></textarea>
                </div>
                <div class="col-12">
                    <label for="dataMsg" class="form-label">Content:</label>
                    <textarea class="form-control" id="dataMsg" name="dataMsg" rows="5" placeholder="Writer Your Message..."></textarea>
                </div>

                <div class="col-12 text-center">
                    <input type="hidden" name="table" value="msg">
                    <input type="submit" value="確認送出" class="btn btn-secondary mb-3" name="send">
                </div>
            </form>


        </div>




        




        <div id="yuchiArrow" class="position-fixed">
            <a href="#" class="btn btn-warning text-white rounded-circle  ">
                <!-- <a href="#" class="btn btn-warning text-white rounded-circle p-2 border-0"> -->
                <i class="fas fa-angle-double-up"></i>
            </a>
        </div>
    </section>

</body>

</html>



<script>
    AOS.init();


    // navbar導覽列消失出現//回top消失出現
    const bgmenu = function() {
        const
            viewWidth = $(window).innerWidth();

        nowat = $(window).scrollTop(),
            height = $('#yuchiAbout').innerHeight(),
            offset = $('#yuchiMenu').innerHeight() + 1;

        if (nowat <= height - offset) {

            if (viewWidth < 767) $("#yuchiMenu").removeClass('bg-dark');
            else $('#yuchiMenu').addClass('bg-dark');

            $("#yuchiArrow").fadeOut();
            $('#yuchiMenu').removeClass('bg-dark');

        } else {
            if (viewWidth < 767) $('#yuchiMenu').addClass('bg-dark');

            $('#yuchiArrow').fadeIn();
            $('#yuchiMenu').addClass('bg-dark');
        }

    }

    //  //scroll to id
    //  $("#yuchiMenu a, #yuchiArrow a").click(function () {
    //         // console.log("touch");

    //         const
    //             who = $(this).attr('href'),
    //             //減掉導覽列高度
    //             val = $(who).offset().top - $("#yuchiMenu").innerHeight()+1; 
    //         // console.log(val);


    //         // $('html').scrollTop(val);//靜態
    //         $("html").animate({ scrollTop: val }, 1000);
    //     })









    // nav導覽列欄位Scroll高亮
    //scroll spy
    $(window).scroll(() => {
        spy(); //滾動時執行function spy()
        bgmenu();
    })


    //resize行為
    //當網頁更改寬度時
    $(window).resize(bgmenu);


    const spy = function() {
        const nowat = $(window).scrollTop(); //偵測當前高度


        $("section").each(function() {
            const
                id = $(this).attr("id"), //哪個section區塊名稱
                // offset = $(this).offset().top, //section區塊的高度top位置
                offset = $(this).offset().top - ($("#yuchiMenu").innerHeight()) //section區塊的高度top位置//減掉導覽列高度
            height = $(this).innerHeight(); //section區塊的整個高度
            // console.log(`id:${id},
            //             偵測當前高:${nowat},
            //             offset區塊top:${offset},
            //             height區塊高度:${height}`);


            if (offset <= nowat && nowat < offset + height) { //section區塊之間
                $("#yuchiMenu a").removeClass('active');
                $(`#yuchiMenu a[href='#${id}']`).addClass('active');
            }
        })


    }
    spy(); //載入頁面先執行spy()函式
    bgmenu();





    // yuchiWork********************************************************
    $(function() {
        $('.toggles button').click(function() {
            var get_id = this.id;
            var get_current = $('.posts .' + get_id);

            $('.post').not(get_current).hide(500);
            get_current.show(500);
        });


        $('#showall').click(function() {
            $('.post').show(500);
        });


    });



    // yuchiSkill************************************************************

    // $(document).height()  //是獲取整個頁面的高度
    // $(window).height()  //是獲取當前 也就是你瀏覽器所能看到的頁面
    $(function() {
        $(window).scroll(function() {
            let scrollTop = $(this).scrollTop();
            let yuchiTop = $('#yuchiSkill').offset().top;

            if (scrollTop == yuchiTop) {
                // console.log("AA");
                // $('#icon1').fadeOut("slow");
                // $('#icon1').fadeIn("slow");
                $('#icon1,#icon2').animate({
                    opacity: '0'
                }, () => {
                    $('#icon1,#icon2').animate({
                        opacity: '1'
                    })
                })
            }
        });
    });






    $("#icon1").click(() => {
        // $("#icon1>.col").animate({rotate: '30deg'},1000);
        $("#icon1").animate({
            opacity: 1
        }, () => {
            $("#icon2").animate({
                opacity: 0.3
            }, () => {
                $("#icon2").animate({
                    opacity: 1
                }, 2000)
            });
        });
    });


    $("#icon2").click(() => {
        $("#icon2").animate({
            opacity: 1
        }, () => {
            $("#icon1").animate({
                opacity: 0.3
            }, () => {
                $("#icon1").animate({
                    opacity: 1
                }, 2000)
            });
        });
    });

    //I work with skills********************************

    const prefix = 'I work with '
    const skills = [
        'HTML & CSS',
        'JavaScript',
        'jQuery',
        'PHP & MySQL',
        'Bootstrap',
        'Photoshop',
        'Illustrator ',
        'Git',
        'Figma'
    ].map(s => `${s}.`)

    const delay = 2
    const step = 1
    const tail = 5
    const timeout = 75


    const p = document.createElement('p')
    document.getElementById("workWith").appendChild(p)

    const colors = [
        'red',
        'green',
        'blue',
        'yellow',
        'cyan',
        'magenta',
    ]

    function getRandomColor() {
        return colors[Math.floor(Math.random() * colors.length)]
    }

    function getRandomChar() {
        return String.fromCharCode(Math.random() * (127 - 33) + 33)
    }

    function getRandomColoredString(n) {
        const fragment = document.createDocumentFragment()
        for (let i = 0; i < n; i++) {
            const char = document.createElement('span')
            char.textContent = getRandomChar()
            char.style.color = getRandomColor()
            fragment.appendChild(char)
        }
        return fragment
    }

    const a = {
        text: '',
        prefixP: -tail,
        skillI: 0,
        skillP: 0,
        direction: 'forward',
        delay,
        step,
    }

    function render() {
        const skill = skills[a.skillI]

        if (a.step) {
            a.step--
        } else {
            a.step = step
            if (a.prefixP < prefix.length) {
                if (a.prefixP >= 0) {
                    a.text += prefix[a.prefixP]
                }
                a.prefixP++
            } else {
                if (a.direction === 'forward') {
                    if (a.skillP < skill.length) {
                        a.text += skill[a.skillP]
                        a.skillP++
                    } else {
                        if (a.delay) {
                            a.delay--
                        } else {
                            a.direction = 'backward'
                            a.delay = delay
                        }
                    }
                } else {
                    if (a.skillP > 0) {
                        a.text = a.text.slice(0, -1)
                        a.skillP--
                    } else {
                        a.skillI = (a.skillI + 1) % skills.length
                        a.direction = 'forward'
                    }
                }
            }
        }

        p.textContent = a.text
        p.appendChild(getRandomColoredString(
            a.prefixP < prefix.length ?

            Math.min(tail, tail + (a.prefixP)) :
            Math.min(tail, (skill.length) - (a.skillP))))
        setTimeout(render, timeout)
    }
    setTimeout(render, 500)
</script>