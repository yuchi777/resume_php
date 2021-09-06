



<div class="border border-2 border-dark" style="width:100%; height:100%; margin:auto; overflow:auto;">
    <p class="t cent botli"><?= $ts[$do]; ?></p>



    
    <!-- 因為刪除iframe所以target在form表單裡刪除 -->
    <form method="post"  action="api/edit.php">
        <table width="100%" style="text-align: center;">
            <tbody>
                <tr class="">
                    <td width="10%">圖片</td>
                    <td width="25%">內容</td>
                    <td width="25%">URL</td>
                    <td width="7%">v1</td>
                    <td width="7%">v2</td>
                    <td width="7%">v3</td>
                    <td width="7%">del</td>
                    <td></td>
                </tr>

                <?php
                    $rows = $Title->all();
                    // echo "<pre>";
                    // print_r($rows);
                    // echo "</pre>";
                    foreach ($rows as $key => $value) {
                ?>

                <tr>
                    <td width="45%">
                        <!-- 圖片 -->
                        <img src="../resume_php/img/<?=$value['img']?>" style="width: 100px;height:100px">
                    </td>
                    <td width="23%">
                        <!-- 替代文字 -->
                        <input type="text" name="text[]" value="<?= $value['text']?>">
                    </td>
                    <td width="23%">
                        <!-- 替代文字 -->
                        <input type="text" name="url[]" value="<?= $value['url']?>">
                    </td>
                    <td width="7%">
                        <!-- 顯示//有點選才送出值 -->
                        <input type="checkbox" name="sh[]" value="<?= $value['id'] ?>" <?= ($value['sh']==1)?"checked":"" ?> > 
                    </td>
                    <td width="7%">
                        <!-- 顯示//有點選才送出值 -->
                        <input type="checkbox" name="sh2[]" value="<?= $value['id'] ?>" <?= ($value['sh2']==1)?"checked":"" ?> > 
                    </td>
                    <td width="7%">
                        <!-- 顯示//有點選才送出值 -->
                        <input type="checkbox" name="sh3[]" value="<?= $value['id'] ?>" <?= ($value['sh3']==1)?"checked":"" ?> > 
                    </td>
                    <td width="7%">
                        <!-- 刪除,可多選所以存成陣列, del[] //有點選才送出值 -->
                        <input type="checkbox" name="del[]" value="<?= $value['id'] ?>">
                    </td>
                    <td>
                        <!-- 更新圖片 onclick / php?id= value['id']-->
                        <input type="button" value="更新圖片" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/title_update.php?id=<?= $value['id'] ?>&#39;)">
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
                        <input type="hidden" name="table" value="<?=$do;?>">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>
</div>






