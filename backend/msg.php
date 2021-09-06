<!-- base.php在backend.php載入 -->


<div class="border border-2 border-dark" style="width:100%; height:100%; margin:auto; overflow:auto;">
    <p class="t cent botli"><?= $ts[$do]; ?></p>




    <!-- 因為刪除iframe所以target在form表單裡刪除 -->
    <form method="post" action="api/edit.php">
        <table width="100%" style="text-align: center;">
            <tbody>
                <tr class="">

                    <!-- 最新消息資料內容 -->

                    <td width="90%">內容</td>

                    <td width="10%">刪除</td>

                </tr>



                <?php
                // 分頁
                // 撈總筆數 // Image資料表
                $all = $Msg->count();
                //幾筆為一頁
                $div = 2;
                //總頁數,無條件進位
                $pages = ceil($all / $div);
                //目前位於哪一頁,預設第一頁
                $now = (isset($_GET['p'])) ? $_GET['p'] : "1";
                //從哪一頁開始, 取幾筆頁數// 1->0 1 2, 2->3 4 5, 3->6 7 8
                $start = ($now - 1) * $div;


                // <!-- 從mvim.php複製全部過來 -->
                $rows = $Msg->all("Limit $start, $div");

                // echo "<pre>";
                // print_r($rows);
                // echo "</pre>";
                foreach ($rows as $key => $value) {
                ?>

                    <tr>

                        <td>
                            <p class="text-start p-2 ms-5 border border-2" name="dataMsg[]" id="" style="width: 90%; height:140px">
                            Name:<?= $value['dataUser'] ?><br>
                            Moblie Phone:<?= $value['dataTel'] ?><br>
                            E-mail:<?= $value['dataMail'] ?><br>
                            Title:<?= $value['subject'] ?><br>
                            Content:<?= $value['dataMsg'] ?><br>
                            </p>
                        </td>

                        <td>
                            <!-- 刪除,可多選所以存成陣列, del[] //有點選才送出值 -->
                            <input type="checkbox" name="del[]" value="<?= $value['id'] ?>">
                        </td>

                        <td>
                            <input type="hidden" name="id[]" value="<?= $value['id'] ?>">
                        </td>
                    </tr>

                <?php
                }
                ?>


            </tbody>
        </table>

        <!-- 分頁 -->
        <div style="text-align: center;">
            <?php
            // 上一頁>0
            if (($now - 1) > 0) {
                echo "<a href='?do=msg&p=" . ($now - 1) . "'> < </a>";
            };

            for ($i = 1; $i <= $pages; $i++) {
                $fontSize = ($now == $i) ? '25px' : '16px';
                echo "<a href='?do=msg&p=" . $i . "' style='font-size:$fontSize'> $i </a> ";
            };

            // 下一頁<=總頁數
            if (($now + 1) <= $pages) {
                echo "<a href='?do=msg&p=" . ($now + 1) . "'> > </a>";
            };


            ?>
        </div>



        <table style="width:100%;">
            <tbody>
                <tr>
                    <td class="cent">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">

                        <input type="hidden" name="table" value="<?= $do; ?>">

                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>
</div>