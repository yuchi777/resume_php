<!-- base.php在backend.php載入 -->



<div class="border border-2 border-dark" style="width:100%; height:100%; margin:auto; overflow:auto;">
    <p class="t cent botli"><?= $ts[$do]; ?></p>



    
    <!-- 因為刪除iframe所以target在form表單裡刪除 -->
    <form method="post"  action="api/edit.php">
        <table width="100%" style="text-align: center;">
            <tbody>
                <tr class="">
                    <td width="70%">圖片</td>
                    
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>



                <!-- 從title.php複製中間過來 -->
                <?php
                    $rows = $Mvim->all();
                    // echo "<pre>";
                    // print_r($rows);
                    // echo "</pre>";
                    foreach ($rows as $key => $value) {
                ?>

                <tr>
                    <td>
                        <!-- 圖片/尺寸變更 -->
                        <img src="../resume_php/img/<?=$value['img']?>" style="width: 100px;height:100px">
                    </td>
                    
                    <td>
                        <!-- 顯示//有點選才送出值/改多選checkbox,name為陣列 -->
                        <input type="checkbox" name="sh[]" value="<?= $value['id'] ?>" <?= ($value['sh']==1)?"checked":"" ?> > 
                    </td>
                    <td>
                        <!-- 刪除,可多選所以存成陣列, del[] //有點選才送出值 -->
                        <input type="checkbox" name="del[]" value="<?= $value['id'] ?>">
                    </td>
                    <td>

                        <!-- mvim_update -->
                        <!-- 更換圖片 onclick / php?id= value['id'] / 更換動畫-->
                        <input type="button" value="更換動畫" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/mvim_update.php?id=<?= $value['id'] ?>&#39;)">
                    
                    
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


        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>

                    <td width="200px">

                        <!-- URL不要空格 -->
                        <!-- 新增網站標題 -->
                        <!-- onclick 轉址 modal/title.php  -->
                        <!-- &#39;為單引號 -->
                        <input class=" ms-4" type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?=$do?>.php&#39;)" value="<?= $as[$do] ?>">
                    </td>

                    <td class="cent">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">

                        <!-- 傳送表單知道table是哪張資料表 -->
                        <input type="hidden" name="table" value="<?=$do;?>">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>
</div>








