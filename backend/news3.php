<!-- base.php在backend.php載入 -->


<div class="border border-2 border-dark" style="width:100%; height:100%; margin:auto; overflow:auto;">
    <p class="t cent botli"><?= $ts[$do]; ?></p>




    <!-- 因為刪除iframe所以target在form表單裡刪除 -->
    <form method="post" action="api/edit.php">
        <table width="100%" style="text-align: center;">
            <tbody>
                <tr class="">

                    <!-- 最新消息資料內容 -->
                    <td width="45%">學歷</td>
                    <td width="45%">內容</td>
                    <td width="5%">顯示</td>
                    <td width="5%">刪除</td>

                </tr>
                


                <?php
                // 分頁
                // 撈總筆數 // Image資料表
                $all = $News3->count();
                //幾筆為一頁
                $div = 3;
                //總頁數,無條件進位
                $pages = ceil($all / $div);
                //目前位於哪一頁,預設第一頁
                $now = (isset($_GET['p'])) ? $_GET['p'] : "1";
                //從哪一頁開始, 取幾筆頁數// 1->0 1 2, 2->3 4 5, 3->6 7 8
                $start = ($now - 1) * $div;


                // <!-- 從mvim.php複製全部過來 -->
                $rows = $News3->all("Limit $start, $div");

                // echo "<pre>";
                // print_r($rows);
                // echo "</pre>";
                foreach ($rows as $key => $value) {
                ?>

                    <tr>

                        <td>
                            <!-- <input type="text" name="text[]" value="<?= $value['title'] ?>" style="width: 90%;"> -->
                            <textarea name="title[]" id="" style="width: 90%; height:100px"><?= $value['title'] ?></textarea>
                        </td>
                        <td>
                            <!-- <input type="text" name="text[]" value="<?= $value['text'] ?>" style="width: 90%;"> -->
                            <textarea name="text[]" id="" style="width: 90%; height:100px"><?= $value['text'] ?></textarea>
                        </td>
                        <td>
                            <!-- 顯示//有點選才送出值 -->
                            <input type="checkbox" name="sh[]" value="<?= $value['id'] ?>" <?= ($value['sh'] == 1) ? "checked" : "" ?>>
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
                echo "<a href='?do=news3&p=" . ($now - 1) . "'> < </a>";
            };

            for ($i = 1; $i <= $pages; $i++) {
                $fontSize = ($now == $i) ? '25px' : '16px';
                echo "<a href='?do=news3&p=" . $i . "' style='font-size:$fontSize'> $i </a> ";
            };

            // 下一頁<=總頁數
            if (($now + 1) <= $pages) {
                echo "<a href='?do=news3&p=" . ($now + 1) . "'> > </a>";
            };


            ?>
        </div>



        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>

                    <td width="200px">

                        <!-- URL不要空格 -->
                        <!-- 新增網站標題 -->
                        <!-- onclick 轉址 modal/title.php  -->
                        <!-- &#39;為單引號 -->
                        <input class=" ms-4" type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?= $do ?>.php&#39;)" value="<?= $as[$do] ?>">
                    </td>

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






